import streamlit as st
from langchain.chains.conversation.memory import ConversationBufferWindowMemory
from settings import MAX_BOT_MEMORY_SIZE, LLM_MOD, MAX_CHAT_HISTORY_SIZE
from langchain_groq import ChatGroq
from langchain.chains import ConversationChain
from database import Session
from models import ChatHistory
from sqlalchemy import text  # Import text for SQL queries
import os
import json
import datetime  # For adding timestamps

st.title("Chat with MERQ AI Data Assistant!")
st.write("Hello! I'm your friendly MERQ AI chatbot. I can help answer your questions, provide information, or just chat. I'm also super fast! Let's start our conversation!")

# Define example questions and SQL queries
EXAMPLES = [
    # Indicator Data
    ("Retrieve the total value of a specific indicator for a given year.",
     "SELECT SUM(value) AS total_value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID' AND year = 2023;"),
     
    ("Get the average value of indicators by region for the current year.",
     "SELECT region_id, AVG(value) AS average_value FROM moh_indicator_data WHERE year = EXTRACT(YEAR FROM CURRENT_DATE) GROUP BY region_id;"),
     
    ("Count the number of records for each indicator group.",
     "SELECT indicator_group_id, COUNT(data_id) AS record_count FROM moh_indicator_data GROUP BY indicator_group_id;"),
     
    ("Find the top 5 health facilities by indicator value for a specific indicator.",
     "SELECT facility_id, SUM(value) AS total_value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID' GROUP BY facility_id ORDER BY total_value DESC LIMIT 5;"),
     
    ("Get the distribution of values by gender for a specific indicator in a given year.",
     "SELECT gender_sex, SUM(value) AS total_value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID' AND year = 2023 GROUP BY gender_sex;"),
     
    ("Count the number of records for each year.",
     "SELECT year, COUNT(data_id) AS record_count FROM moh_indicator_data GROUP BY year ORDER BY year;"),
     
    ("Retrieve the latest value recorded for a specific indicator.",
     "SELECT value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID' ORDER BY year DESC LIMIT 1;"),
     
    ("Get the total values recorded for each indicator grouped by gender.",
     "SELECT gender_sex, SUM(value) AS total_value FROM moh_indicator_data GROUP BY gender_sex;"),
     
    ("Find the average value of a specific indicator across all regions.",
     "SELECT AVG(value) AS average_value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID';"),
     
    ("Retrieve the trend of a specific indicator over the last 5 years.",
     "SELECT year, SUM(value) AS total_value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID' AND year >= EXTRACT(YEAR FROM CURRENT_DATE) - 5 GROUP BY year ORDER BY year;"),
     
    # Related Tables
    ("List all regions with their names.",
     "SELECT region_id, region_name FROM moh_regions;"),
     
    ("Get details of all indicators within a specific indicator group.",
     "SELECT indicator_id, indicator_name FROM moh_indicators WHERE indicator_group_id = 'YOUR_GROUP_ID';"),
     
    ("Retrieve all assessments and their names.",
     "SELECT assessment_id, assessment_name FROM moh_assessments;"),
     
    ("List all data sources with their corresponding names.",
     "SELECT data_source_id, data_source_name FROM moh_data_sources;"),
     
    ("Get all health facilities along with their types.",
     "SELECT hf.facility_id, hf.facility_name, ft.facility_type_name FROM moh_health_facilities hf JOIN moh_facility_types ft ON hf.facility_type_id = ft.facility_type_id;"),
     
    ("Retrieve all administration units with their names.",
     "SELECT unit_id, unit_name FROM moh_administration_units;"),
     
    ("Get the average target for indicators grouped by their indicator group.",
     "SELECT ig.indicator_group_name, AVG(i.target) AS average_target FROM moh_indicator_groups ig JOIN moh_indicators i ON ig.indicator_group_id = i.indicator_group_id GROUP BY ig.indicator_group_name;"),
     
    ("Count the number of health facilities in each region.",
     "SELECT region_id, COUNT(facility_id) AS facility_count FROM moh_health_facilities GROUP BY region_id;"),
     
    ("Retrieve all facility types with their names.",
     "SELECT facility_type_id, facility_type_name FROM moh_facility_types;"),
     
    ("Find the top 3 data sources based on the total values reported.",
     "SELECT ds.data_source_name, SUM(mid.value) AS total_value FROM moh_data_sources ds JOIN moh_indicator_data mid ON ds.data_source_id = mid.data_source_id GROUP BY ds.data_source_name ORDER BY total_value DESC LIMIT 3;"),
     
    # Aggregation and Filtering
    ("Count the number of indicators grouped by their groups.",
     "SELECT ig.indicator_group_name, COUNT(i.indicator_id) AS indicator_count FROM moh_indicator_groups ig JOIN moh_indicators i ON ig.indicator_group_id = i.indicator_group_id GROUP BY ig.indicator_group_name;"),
     
    ("Find the maximum value recorded for an indicator in a specific year.",
     "SELECT MAX(value) AS max_value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID' AND year = 2023;"),
     
    ("Get the minimum value for indicators by year.",
     "SELECT year, MIN(value) AS min_value FROM moh_indicator_data GROUP BY year ORDER BY year;"),
     
    ("Calculate the total values for each year and gender.",
     "SELECT year, gender_sex, SUM(value) AS total_value FROM moh_indicator_data GROUP BY year, gender_sex ORDER BY year;"),
     
    ("Get the average values for all indicators by year.",
     "SELECT year, AVG(value) AS average_value FROM moh_indicator_data GROUP BY year ORDER BY year;"),
     
    ("Retrieve the count of data sources used in the indicator data.",
     "SELECT data_source_id, COUNT(data_id) AS source_count FROM moh_indicator_data GROUP BY data_source_id;"),
     
    ("List the top 10 regions based on the total indicator values.",
     "SELECT region_id, SUM(value) AS total_value FROM moh_indicator_data GROUP BY region_id ORDER BY total_value DESC LIMIT 10;"),
     
    ("Get the yearly target vs actual values for a specific indicator.",
     "SELECT year, target, SUM(value) AS actual_value FROM moh_indicator_data WHERE indicator_id = 'YOUR_INDICATOR_ID' GROUP BY year, target ORDER BY year;"),
     
    ("Find indicators that have not met their targets.",
     "SELECT indicator_id, indicator_name FROM moh_indicators i JOIN moh_indicator_data mid ON i.indicator_id = mid.indicator_id WHERE mid.value < i.target;"),
     
    # Cross-Table Queries
    ("Retrieve the list of health facilities along with their indicator values for a specific year.",
     "SELECT hf.facility_name, mid.value FROM moh_health_facilities hf JOIN moh_indicator_data mid ON hf.facility_id = mid.facility_id WHERE mid.year = 2023;"),
     
    ("Get the indicator names along with their corresponding group names.",
     "SELECT i.indicator_name, ig.indicator_group_name FROM moh_indicators i JOIN moh_indicator_groups ig ON i.indicator_group_id = ig.indicator_group_id;"),
     
    ("Count the number of assessments conducted per region.",
     "SELECT r.region_name, COUNT(a.assessment_id) AS assessment_count FROM moh_regions r JOIN moh_assessments a ON r.region_id = a.region_id GROUP BY r.region_name;"),
     
    ("List the indicators and their data sources.",
     "SELECT i.indicator_name, ds.data_source_name FROM moh_indicators i JOIN moh_data_sources ds ON i.data_source_id = ds.data_source_id;"),
     
    ("Get the average values of indicators by assessment name.",
     "SELECT a.assessment_name, AVG(mid.value) AS average_value FROM moh_assessments a JOIN moh_indicator_data mid ON a.assessment_id = mid.assessment_id GROUP BY a.assessment_name;"),
     
    ("Find the number of indicators for each facility type.",
     "SELECT ft.facility_type_name, COUNT(mid.indicator_id) AS indicator_count FROM moh_facility_types ft JOIN moh_health_facilities hf ON ft.facility_type_id = hf.facility_type_id JOIN moh_indicator_data mid ON hf.facility_id = mid.facility_id GROUP BY ft.facility_type_name;"),
     
    ("Get a summary of indicators grouped by data source.",
     "SELECT ds.data_source_name, COUNT(mid.data_id) AS indicator_count FROM moh_data_sources ds JOIN moh_indicator_data mid ON ds.data_source_id = mid.data_source_id GROUP BY ds.data_source_name;"),
     
    ("Retrieve all data scopes and their names.",
     "SELECT scope_id, scope_name FROM moh_data_scope;"),
     
    ("Find the total values reported by each health facility type.",
     "SELECT ft.facility_type_name, SUM(mid.value) AS total_value FROM moh_facility_types ft JOIN moh_health_facilities hf ON ft.facility_type_id = hf.facility_type_id JOIN moh_indicator_data mid ON hf.facility_id = mid.facility_id GROUP BY ft.facility_type_name;"),
     
    ("Get the list of administration units along with their regions.",
     "SELECT au.unit_name, r.region_name FROM moh_administration_units au JOIN moh_regions r ON au.region_id = r.region_id;"),
     
    # Complex Queries
    ("Retrieve the values of indicators filtered by multiple conditions.",
     "SELECT * FROM moh_indicator_data WHERE year = 2023 AND gender_sex = 'Male' AND value > 100;"),
     
    ("Get the total indicator values by gender and region for the current year.",
     "SELECT region_id, gender_sex, SUM(value) AS total_value FROM moh_indicator_data WHERE year = EXTRACT(YEAR FROM CURRENT_DATE) GROUP BY region_id, gender_sex;"),
     
    ("Count how many different indicators were reported by each data source.",
     "SELECT ds.data_source_name, COUNT(DISTINCT mid.indicator_id) AS unique_indicators FROM moh_data_sources ds JOIN moh_indicator_data mid ON ds.data_source_id = mid.data_source_id GROUP BY ds.data_source;"),

    # Complex Queries (continued)
    ("Count how many different indicators were reported by each data source.",
     "SELECT ds.data_source_name, COUNT(DISTINCT mid.indicator_id) AS unique_indicators FROM moh_data_sources ds JOIN moh_indicator_data mid ON ds.data_source_id = mid.data_source_id GROUP BY ds.data_source_name;"),
     
    ("Retrieve the average values of indicators by gender for each facility type.",
     "SELECT ft.facility_type_name, gender_sex, AVG(mid.value) AS average_value FROM moh_facility_types ft JOIN moh_health_facilities hf ON ft.facility_type_id = hf.facility_type_id JOIN moh_indicator_data mid ON hf.facility_id = mid.facility_id GROUP BY ft.facility_type_name, gender_sex;"),
     
    ("Get the maximum values reported for each region and their corresponding indicator.",
     "SELECT r.region_name, mid.indicator_id, MAX(mid.value) AS max_value FROM moh_regions r JOIN moh_indicator_data mid ON r.region_id = mid.region_id GROUP BY r.region_name, mid.indicator_id;"),
     
    ("Count the number of unique indicators reported per year.",
     "SELECT year, COUNT(DISTINCT indicator_id) AS unique_indicators FROM moh_indicator_data GROUP BY year ORDER BY year;"),
     
    ("Find the number of indicators reported by health facilities in a specific region.",
     "SELECT hf.facility_name, COUNT(mid.indicator_id) AS indicator_count FROM moh_health_facilities hf JOIN moh_indicator_data mid ON hf.facility_id = mid.facility_id WHERE mid.region_id = 'YOUR_REGION_ID' GROUP BY hf.facility_name;"),
     
    ("Get the total values reported for indicators by each assessment.",
     "SELECT a.assessment_name, SUM(mid.value) AS total_value FROM moh_assessments a JOIN moh_indicator_data mid ON a.assessment_id = mid.assessment_id GROUP BY a.assessment_name;"),
     
    ("List all indicator names along with their baseline and target values.",
     "SELECT i.indicator_name, i.baseline, i.target FROM moh_indicators i;"),
     
    ("Retrieve the average indicator values for each administration unit.",
     "SELECT au.unit_name, AVG(mid.value) AS average_value FROM moh_administration_units au JOIN moh_indicator_data mid ON au.unit_id = mid.unit_id GROUP BY au.unit_name;"),
     
    ("Count the number of indicators reported for each data scope.",
     "SELECT ds.scope_name, COUNT(mid.indicator_id) AS indicator_count FROM moh_data_scope ds JOIN moh_indicator_data mid ON ds.scope_id = mid.scope_id GROUP BY ds.scope_name;"),
     
    ("Get a summary of values by facility type and year.",
     "SELECT ft.facility_type_name, mid.year, SUM(mid.value) AS total_value FROM moh_facility_types ft JOIN moh_health_facilities hf ON ft.facility_type_id = hf.facility_type_id JOIN moh_indicator_data mid ON hf.facility_id = mid.facility_id GROUP BY ft.facility_type_name, mid.year ORDER BY mid.year;"),
     
    # Final examples
    ("Find indicators where actual values exceed their targets.",
     "SELECT i.indicator_name, mid.year, mid.value, i.target FROM moh_indicators i JOIN moh_indicator_data mid ON i.indicator_id = mid.indicator_id WHERE mid.value > i.target;"),
     
    ("Get the distribution of total values reported for each region by year.",
     "SELECT year, region_id, SUM(value) AS total_value FROM moh_indicator_data GROUP BY year, region_id ORDER BY year, region_id;"),
     
    ("Count the indicators per year and assessment.",
     "SELECT mid.year, a.assessment_name, COUNT(mid.indicator_id) AS indicator_count FROM moh_assessments a JOIN moh_indicator_data mid ON a.assessment_id = mid.assessment_id GROUP BY mid.year, a.assessment_name ORDER BY mid.year;"),
     
    ("List the health facilities with the highest indicator values for a specific year.",
     "SELECT hf.facility_name, SUM(mid.value) AS total_value FROM moh_health_facilities hf JOIN moh_indicator_data mid ON hf.facility_id = mid.facility_id WHERE mid.year = 2023 GROUP BY hf.facility_name ORDER BY total_value DESC LIMIT 5;"),
     
    ("Retrieve the average indicator values by region and gender.",
     "SELECT r.region_name, mid.gender_sex, AVG(mid.value) AS average_value FROM moh_regions r JOIN moh_indicator_data mid ON r.region_id = mid.region_id GROUP BY r.region_name, mid.gender_sex;"),
     
    ("Count the number of records for each assessment conducted per region.",
     "SELECT r.region_name, a.assessment_name, COUNT(mid.data_id) AS record_count FROM moh_regions r JOIN moh_assessments a ON r.region_id = a.region_id JOIN moh_indicator_data mid ON a.assessment_id = mid.assessment_id GROUP BY r.region_name, a.assessment_name;"),

]

    # Add more examples as needed

def load_chat_history():
    with Session() as session:
        last_entries = session.query(ChatHistory).order_by(ChatHistory.id.desc()).limit(MAX_CHAT_HISTORY_SIZE).all()
        chat_history = [json.loads(entry.chat_history) for entry in last_entries]
        return chat_history[::-1]  # Reverse to display oldest first

if "chat_history" not in st.session_state:
    st.session_state.chat_history = load_chat_history()

memory = ConversationBufferWindowMemory(k=MAX_BOT_MEMORY_SIZE)
for message in st.session_state.chat_history:
    if isinstance(message, dict) and "human" in message and "AI" in message:
        memory.save_context({"input": message["human"]}, {"output": message["AI"]})
    else:
        print("Message format error:", message)

groq_chat = ChatGroq(groq_api_key=os.getenv("GROQ_API_KEY"), model_name=LLM_MOD, temperature=0.2)
conversation = ConversationChain(llm=groq_chat, memory=memory)


def send_message():
    formatted_input = st.session_state.user_input.replace("\n", "\n\n")  # Double newlines for proper Markdown paragraphs
    response = None
    
    # Check if the input matches any example questions
    for example_question, sql_query in EXAMPLES:
        if formatted_input.lower() == example_question.lower():
            # Execute the SQL query
            try:
                with Session() as session:
                    result = session.execute(text(sql_query)).fetchall()  # Use text() to wrap the SQL query
                    response = f"SQL Query: {sql_query}\n\nResults:\n"
                    for row in result:
                        response += str(row) + "\n"
            except Exception as e:
                response = f"An error occurred: {str(e)}"
            break

    # If no match, proceed with the LLM conversation
    if response is None:
        response = conversation.invoke(formatted_input)['response']
    
    timestamp = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    message = {"human": f"You ({timestamp}): {formatted_input}", "AI": f"MERQ ChatBot ({timestamp}): {response}"}
    st.session_state.chat_history.append(message)
    st.session_state.user_input = ""  # Clear the input after processing

    with Session() as session:
        new_entry = ChatHistory(chat_history=json.dumps(message))
        session.add(new_entry)
        session.commit()

with st.expander("Chat", expanded=True):
    user_input = st.text_area("Ask a question:", height=200, value=st.session_state.user_input if 'user_input' in st.session_state else "", key="user_input")
    send_button = st.button("Send", on_click=send_message)

    chat_history_container = st.container()
    chat_history_container.write("Chat History:")
    for message in reversed(st.session_state.chat_history):
        if isinstance(message, dict) and "human" in message and "AI" in message:
            chat_history_container.markdown(f"**{message['human']}**\n\n_{message['AI']}_")  # Ensure newline handling
