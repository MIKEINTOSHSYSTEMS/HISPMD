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

# Function to fetch JSON data from the provided API URL
def fetch_json_data():
    url = "https://hispmd.merqconsultancy.org/app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list"
    response = requests.get(url)
    if response.status_code == 200:
        return response.json()["data"]
    else:
        return None

# Get all indicator names for fuzzy matching
def get_indicator_names(json_data):
    return [entry["Indicator Name"] for entry in json_data]

# Fuzzy match function to find the best match or suggest alternatives
def fuzzy_search(query, json_data):
    indicator_names = get_indicator_names(json_data)
    match_result = process.extractOne(query, indicator_names, scorer=fuzz.token_sort_ratio)

    if match_result and match_result[1] > 70:  # match_result[1] is the score
        return match_result[0]  # return the best match
    else:
        # Suggest up to 3 closest matches
        suggestions = process.extract(query, indicator_names, scorer=fuzz.token_sort_ratio, limit=3)
        return suggestions

# Function to filter and summarize data based on user input
def filter_data(json_data, query):
    filtered_data = []
    indicator_name = fuzzy_search(query, json_data)
    
    if indicator_name:
        filtered_data = [
            entry for entry in json_data 
            if isinstance(entry.get("Indicator Name"), str) and indicator_name.lower() in entry["Indicator Name"].lower()
        ]
    
    return filtered_data

# Function to create a natural language summary
def summarize_data(filtered_data):
    if not filtered_data:
        return "Sorry, no matching data was found."

    # Generate summary
    summary = ""
    indicator_name = filtered_data[0].get("Indicator Name", "Unknown Indicator")
    summary += f"The indicator '{indicator_name}' has the following data:\n\n"

    for entry in filtered_data:
        year = entry.get("Year", "Unknown Year")
        value = entry.get("Value", "Unknown Value")
        region = entry.get("Region", "Unknown Region")
        data_source = entry.get("Data Source", "Unknown Data Source")
        summary += f"- In {year}, the value was {value} in {region} (Source: {data_source}).\n"

    return summary

# Function to compare values across different regions or years
def compare_values(filtered_data, compare_by="Region"):
    comparison = {}

    for entry in filtered_data:
        key = entry.get(compare_by, "Unknown")
        value = float(entry.get("Value", 0))
        if key in comparison:
            comparison[key] += value
        else:
            comparison[key] = value

    # Return max and min comparisons
    if comparison:
        max_key = max(comparison, key=comparison.get)
        min_key = min(comparison, key=comparison.get)
        return f"The highest value for '{compare_by}' is in {max_key} with {comparison[max_key]} and the lowest is in {min_key} with {comparison[min_key]}."
    else:
        return "Sorry, not enough data to compare."

# Function to handle user message and response
def send_message():
    formatted_input = st.session_state.user_input.replace("\n", "\n\n")
    response = None

    # Fetch the JSON data
    json_data = fetch_json_data()

    if json_data:
        user_input_lower = formatted_input.lower()

        if "how many regions" in user_input_lower:
            unique_regions = set(entry["Region"] for entry in json_data if entry["Region"])
            response = f"There are {len(unique_regions)} regions."

        elif "compare" in user_input_lower:
            filtered_data = filter_data(json_data, user_input_lower)
            response = compare_values(filtered_data)

        elif "show me" in user_input_lower or "give me" in user_input_lower:
            filtered_data = filter_data(json_data, user_input_lower)
            if filtered_data:
                df = pd.DataFrame(filtered_data)
                df = df[['Year', 'Value', 'Data Source', 'Assessment', 'Region']]
                st.table(df)
                response = summarize_data(filtered_data)
            else:
                response = "Sorry, I couldn't find any data matching your query."

        else:
            filtered_data = filter_data(json_data, user_input_lower)
            if filtered_data:
                response = summarize_data(filtered_data)
            else:
                response = "Sorry, I couldn't recognize the indicator you mentioned."
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

# UI Components
with st.expander("Chat", expanded=True):
    user_input = st.text_area("Ask a question:", height=200, value=st.session_state.user_input if 'user_input' in st.session_state else "", key="user_input")
    send_button = st.button("Send", on_click=send_message)

    # Display chat history
    chat_history_container = st.container()
    chat_history_container.write("Chat History:")
    for message in reversed(st.session_state.chat_history):
        if isinstance(message, dict) and "human" in message and "AI" in message:
            chat_history_container.markdown(f"**{message['human']}**\n\n_{message['AI']}_")  # Ensure newline handling
