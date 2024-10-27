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
    #url = "../../app/api/v1.php?apikey=$2y$10$vdzwxfOVSYoy9xMYgISLjuNfKYxGCa4RpQRTTm5kU3qcMDxupd72C&table=hispmd_indicators_data&action=list"
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

# Function to handle user message and response
def send_message():
    formatted_input = st.session_state.user_input.replace("\n", "\n\n")
    response = None

    # Fetch the JSON data
    json_data = fetch_json_data()

    if json_data:
        user_input_lower = formatted_input.lower()

        # Handle queries about regions
        if "how many regions" in user_input_lower:
            unique_regions = set(entry["Region"] for entry in json_data)
            response = f"There are {len(unique_regions)} regions."
        elif "highest number of values" in user_input_lower or "lowest number of values" in user_input_lower:
            indicator_name = None
            for entry in json_data:
                if isinstance(entry["Indicator Name"], str) and entry["Indicator Name"].lower() in user_input_lower:
                    indicator_name = entry["Indicator Name"]
                    break
            
            if indicator_name:
                region_values = {}
                for entry in json_data:
                    if entry["Indicator Name"] == indicator_name:
                        region = entry["Region"]
                        value = entry["Value"]
                        if region in region_values:
                            region_values[region] += value
                        else:
                            region_values[region] = value
                
                if "highest" in user_input_lower:
                    max_region = max(region_values, key=region_values.get)
                    max_value = region_values[max_region]
                    response = f"The region with the highest number of values for {indicator_name} is {max_region} with {max_value} values."
                else:
                    min_region = min(region_values, key=region_values.get)
                    min_value = region_values[min_region]
                    response = f"The region with the lowest number of values for {indicator_name} is {min_region} with {min_value} values."
            else:
                response = "Sorry, I couldn't recognize the indicator you mentioned."
        elif "show me" in user_input_lower or "give me" in user_input_lower:
            indicator_name = fuzzy_search(user_input_lower, json_data)
            if indicator_name:
                if isinstance(indicator_name[0], tuple):
                    indicator_name = indicator_name[0][0]
                else:
                    indicator_name = indicator_name[0]

                filtered_data = [
                    entry for entry in json_data 
                    if isinstance(entry.get("Indicator Name"), str) and indicator_name.lower() in entry["Indicator Name"].lower()
                ]
                if filtered_data:
                    # Prepare data for table display
                    df = pd.DataFrame(filtered_data)
                    # Optional: Select specific columns to display
                    df = df[['Year', 'Value', 'Data Source', 'Assessment', 'Region']]
                    st.table(df)
                    response = f"Here is the information for '{indicator_name}':"
                else:
                    response = "Sorry, I couldn't find any data matching your query."
            else:
                response = "Sorry, I couldn't recognize the indicator you mentioned."
        else:
            # Fuzzy search for the indicator name
            indicator_names = fuzzy_search(user_input_lower, json_data)
            if indicator_names:
                if isinstance(indicator_names[0], tuple):
                    indicator_name = indicator_names[0][0]
                else:
                    indicator_name = indicator_names[0]

                filtered_data = [
                    entry for entry in json_data 
                    if isinstance(entry.get("Indicator Name"), str) and indicator_name.lower() in entry["Indicator Name"].lower()
                ]
                if filtered_data:
                    response = "Here are the results matching your query:\n\n"
                    for entry in filtered_data:
                        response += f"Indicator: {entry['Indicator Name']}\n"
                        response += f"Year: {entry['Year']}\n"
                        response += f"Value: {entry['Value']}\n"
                        response += f"Group: {entry['Indicator Group']}\n"
                        response += f"Data Source: {entry['Data Source']}\n\n"
                else:
                    response = "Sorry, I couldn't find any data matching your query."
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
