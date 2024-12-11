import streamlit as st
from langchain.chains.conversation.memory import ConversationBufferWindowMemory
from settings import MAX_BOT_MEMORY_SIZE, LLM_MOD, MAX_CHAT_HISTORY_SIZE
from langchain_groq import ChatGroq
from langchain.chains import ConversationChain
from database import Session
from models import ChatHistory
from sqlalchemy import text
import os
import json
import datetime
import requests
import pandas as pd  # Import pandas for table display
from rapidfuzz import process, fuzz  # Import fuzzy matching

st.title("Chat with MERQ AI Data Assistant!")
st.write("Hello! I'm your friendly MERQ AI chatbot. Let's start our conversation!")

# Function to load previous chat history
def load_chat_history():
    with Session() as session:
        last_entries = session.query(ChatHistory).order_by(ChatHistory.id.desc()).limit(MAX_CHAT_HISTORY_SIZE).all()
        chat_history = [json.loads(entry.chat_history) for entry in last_entries]
        return chat_history[::-1]  # Reverse to display oldest first

# Initialize chat history if not present in session
if "chat_history" not in st.session_state:
    st.session_state.chat_history = load_chat_history()

# Memory for holding recent chat context
memory = ConversationBufferWindowMemory(k=MAX_BOT_MEMORY_SIZE)

# Load previous messages into memory
for message in st.session_state.chat_history:
    if isinstance(message, dict) and "human" in message and "AI" in message:
        memory.save_context({"input": message["human"]}, {"output": message["AI"]})
    else:
        print("Message format error:", message)

# Initialize the Groq-based LLM chat model
groq_chat = ChatGroq(groq_api_key=os.getenv("GROQ_API_KEY"), model_name=LLM_MOD, temperature=0.2)
conversation = ConversationChain(llm=groq_chat, memory=memory)

# Function to fetch JSON data from the API with dynamic filtering
def fetch_json_data(query_params):
    base_url = "https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list"
    query_string = "&q=" + query_params
    response = requests.get(base_url + query_string)
    if response.status_code == 200:
        return response.json()["data"]
    else:
        return None

# Function to parse user query and build dynamic filters for API search
def parse_query(user_input):
    filters = []
    if "indicator" in user_input.lower():
        filters.append(f"Indicator Name~equals~{user_input.split('indicator')[-1].strip()}")
    if "year" in user_input.lower():
        year = [word for word in user_input.split() if word.isdigit()]
        if year:
            filters.append(f"Year~equals~{year[0]}")
    if "scope" in user_input.lower():
        scope = [word for word in user_input.split() if word.lower() in ["national", "regional", "global"]]
        if scope:
            filters.append(f"Scope~equals~{scope[0].capitalize()}")
    if "region" in user_input.lower():
        region = [word for word in user_input.split() if word.lower() not in ["year", "scope", "indicator"]]
        if region:
            filters.append(f"Region~equals~{' '.join(region)}")

    # Combine filters into one query string
    query = "(" + ")(".join(filters) + ")"
    return query

# Function to perform fuzzy matching for an indicator name in the dataset
def fuzzy_search(query, data):
    # Extract indicator names from the data
    indicator_names = [entry["Indicator Name"] for entry in data]
    
    # Perform fuzzy matching using the 'process' function
    matches = process.extract(query, indicator_names, scorer=fuzz.ratio, limit=5)

    # Return the matched indicator names
    return matches if matches else None

# Function to calculate aggregates (mean, sum, min, max) for the filtered data
def calculate_aggregates(data):
    values = [float(entry["Value"]) for entry in data if entry["Value"]]
    if values:
        return {
            "mean": sum(values) / len(values),
            "sum": sum(values),
            "min": min(values),
            "max": max(values)
        }
    return None

# Function to handle user message and response
def send_message():
    formatted_input = st.session_state.user_input.replace("\n", "\n\n")
    response = None

    # Parse user input to build dynamic query
    query_params = parse_query(formatted_input)

    # Fetch the JSON data
    json_data = fetch_json_data(query_params)

    if json_data:
        user_input_lower = formatted_input.lower()

        # Fuzzy search for indicator
        matched_indicator = fuzzy_search(formatted_input, json_data)

        if matched_indicator:
            if isinstance(matched_indicator, list):  # If suggestions are provided
                response = "I found these possible matches for your query:\n"
                for idx, suggestion in enumerate(matched_indicator):
                    # Make each suggestion clickable as a button with a unique key based on index
                    button_label = suggestion[0]
                    button_key = f"button_{idx}_{button_label}"  # Unique key for each button
                    if st.button(button_label, key=button_key):  # When clicked, run the query for that indicator
                        # Filter the data for the selected indicator
                        selected_indicator_name = button_label
                        filtered_data = [
                            entry for entry in json_data 
                            if entry["Indicator Name"].lower() == selected_indicator_name.lower()
                        ]
                        # Recalculate aggregates or trends based on the query type
                        response = process_selected_indicator(filtered_data, user_input_lower, selected_indicator_name)
                        break
            else:  # Exact match found
                matched_indicator_name = matched_indicator[0][0]
                filtered_data = [
                    entry for entry in json_data 
                    if entry["Indicator Name"].lower() == matched_indicator_name.lower()
                ]
                response = f"I found the following data for '{matched_indicator_name}':\n"
                for entry in filtered_data:
                    response += (
                        f"- Year: {entry['Year']}, Region: {entry['Region'] or 'unspecified'}, "
                        f"Value: {entry['Value']}, Data Source: {entry['Data Source']}, "
                        f"Scope: {entry['Scope']}, Assessment: {entry['Assessment']}\n"
                    )
        else:
            response = "Sorry, I couldn't recognize the indicator you're asking about. Could you provide more details?"
    else:
        response = "Unable to fetch data from the server."

    # Save the message to the database and update the chat history
    timestamp = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    message = {"human": f"You ({timestamp}): {formatted_input}", "AI": f"MERQ ChatBot ({timestamp}): {response}"}
    st.session_state.chat_history.append(message)
    st.session_state.user_input = ""  # Clear the input after processing

    # Save the message to the database
    with Session() as session:
        new_entry = ChatHistory(chat_history=json.dumps(message))
        session.add(new_entry)
        session.commit()

    st.write(response)

# Function to process selected indicator after button click
def process_selected_indicator(filtered_data, user_input_lower, selected_indicator_name):
    if "highest value" in user_input_lower:
        max_value_entry = max(filtered_data, key=lambda x: float(x["Value"]) if x["Value"] else float('-inf'))
        return (
            f"The region with the highest value for '{selected_indicator_name}' is "
            f"{max_value_entry['Region'] or 'unspecified'} with a value of {max_value_entry['Value']} "
            f"in the year {max_value_entry['Year']}."
        )
    elif "lowest value" in user_input_lower:
        min_value_entry = min(filtered_data, key=lambda x: float(x["Value"]) if x["Value"] else float('inf'))
        return (
            f"The region with the lowest value for '{selected_indicator_name}' is "
            f"{min_value_entry['Region'] or 'unspecified'} with a value of {min_value_entry['Value']} "
            f"in the year {min_value_entry['Year']}."
        )
    elif "average value" in user_input_lower or "mean value" in user_input_lower:
        aggregates = calculate_aggregates(filtered_data)
        if aggregates:
            return (
                f"The average value for '{selected_indicator_name}' across all regions and years is "
                f"{aggregates['mean']:.2f}. Sum: {aggregates['sum']:.2f}, Min: {aggregates['min']}, Max: {aggregates['max']}."
            )
        else:
            return "No valid values found for averaging."
    elif "trend" in user_input_lower:
        trend_data = sorted(filtered_data, key=lambda x: x["Year"])
        return (
            f"Here is the trend for '{selected_indicator_name}' over the years:\n"
            + "\n".join([f"Year: {entry['Year']}, Value: {entry['Value']}" for entry in trend_data])
        )
    else:
        return f"Here is the data for '{selected_indicator_name}':\n" + "\n".join([str(entry) for entry in filtered_data])

# UI Components
with st.expander("Chat", expanded=True):
    user_input = st.text_area("Ask a question:", height=200, value=st.session_state.user_input if 'user_input' in st.session_state else "", key="user_input")
    send_button = st.button("Send", on_click=send_message)

    # Display chat history
    chat_history_container = st.container()
    chat_history_container.write("Chat History:")

    # Iterate through the chat history in reverse order
    for message in reversed(st.session_state.chat_history):
        st.write(f"You: {message['human']}")
        st.write(f"Bot: {message['AI']}")
