import os
from dotenv import load_dotenv
from langchain_core.messages import AIMessage, HumanMessage
from langchain_core.prompts import ChatPromptTemplate
from langchain_core.runnables import RunnablePassthrough
from langchain_community.utilities import SQLDatabase
from langchain_core.output_parsers import StrOutputParser
from langchain_groq import ChatGroq
import streamlit as st
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
import altair as alt

# Load environment variables from .env file
load_dotenv()

# Define allowed tables
ALLOWED_TABLES = {
    'dataquality', 'datause', 'dhis2_periods', 'digitalhealth', 'digitalhealthapps',
    'financialresources', 'healthfacilities', 'healthunits', 'hisgovernance', 'hispartners',
    'mfr_dashboard_reports', 'mfr_facilities_register', 'mfr_operational_status', 'mfr_region',
    'mfr_woreda', 'mfr_zone', 'moh_administration_units', 'moh_assessments', 'moh_data_sources',
    'moh_facility_types', 'moh_health_facilities', 'moh_indicator_data', 'moh_indicator_groups',
    'moh_indicators', 'moh_regions', 'publications', 'regions', 'research', 'workforce'
}

# Function to initialize PostgreSQL database connection
def init_database() -> SQLDatabase:
    user = os.getenv('POSTGRES_USER')
    password = os.getenv('POSTGRES_PASSWORD')
    host = os.getenv('POSTGRES_HOST')
    port = os.getenv('POSTGRES_PORT')
    database = os.getenv('POSTGRES_DB')
    db_uri = f"postgresql+psycopg2://{user}:{password}@{host}:{port}/{database}"
    return SQLDatabase.from_uri(db_uri)

# Function to handle SQL query execution
def run_query(db, query):
    try:
        # Check if the query targets allowed tables
        if any(table in query.lower() for table in ALLOWED_TABLES):
            result = db.run(query)
            return result
        else:
            st.error("Query targets disallowed tables.")
            return None
    except Exception as e:
        st.error(f"Error executing query: {str(e)}")
        return None

# Function to get SQL chain for processing user queries
def get_sql_chain(db):
    template = """
    You are a senior data analyst at MERQ Consultancy. You are interacting with a user who is asking you questions about the HISPMD's database.
    Based on the table schema below, write a SQL query that would answer the user's question. Take the conversation history into account.

    <SCHEMA>{schema}</SCHEMA>

    Conversation History: {chat_history}

    Write only the SQL query and nothing else. Do not wrap the SQL query in any other text, not even backticks.

    For example:

    Data Quality
    Question: Retrieve the number of data quality issues reported per month for the current year.
    SQL Query: SELECT DATE_TRUNC('month', issue_date) AS month, COUNT(issue_id) AS total_issues FROM dataquality WHERE EXTRACT(YEAR FROM issue_date) = EXTRACT(YEAR FROM CURRENT_DATE) GROUP BY month ORDER BY month;

    Question: Find the top 5 data quality issues by frequency.
    SQL Query: SELECT issue_type, COUNT(issue_id) AS issue_count FROM dataquality GROUP BY issue_type ORDER BY issue_count DESC LIMIT 5;
    
    Data Use
    Question: List all the health facilities and the corresponding data usage metrics for the last 6 months.
    SQL Query: SELECT health_facility_id, AVG(data_usage) AS avg_data_usage FROM datause WHERE report_date >= CURRENT_DATE - INTERVAL '6 months' GROUP BY health_facility_id;

    Question: Find the total data use per health unit and sort by descending data use.
    SQL Query: SELECT health_unit_id, SUM(data_usage) AS total_data_use FROM datause GROUP BY health_unit_id ORDER BY total_data_use DESC;

    DHIS2 Periods
    Question: Retrieve the total number of reports submitted in each DHIS2 period for the current year.
    SQL Query: SELECT period, COUNT(report_id) AS total_reports FROM dhis2_periods WHERE EXTRACT(YEAR FROM period_start) = EXTRACT(YEAR FROM CURRENT_DATE) GROUP BY period ORDER BY period;

    Question: Show the distribution of report submissions by quarter for the current year.
    SQL Query: SELECT EXTRACT(QUARTER FROM period_start) AS quarter, COUNT(report_id) AS total_reports FROM dhis2_periods WHERE EXTRACT(YEAR FROM period_start) = EXTRACT(YEAR FROM CURRENT_DATE) GROUP BY quarter ORDER BY quarter;

    Digital Health
    Question: List all digital health applications and their current status.
    SQL Query: SELECT app_id, app_name, status FROM digitalhealthapps;

    Question: Retrieve the total funding for digital health initiatives in the last year.
    SQL Query: SELECT SUM(funding_amount) AS total_funding FROM financialresources WHERE initiative_type = 'Digital Health' AND funding_date >= CURRENT_DATE - INTERVAL '1 year';

    Health Facilities
    Question: Find the average number of patients served per health facility in the last 3 months.
    SQL Query: SELECT health_facility_id, AVG(patient_count) AS avg_patients FROM healthfacilities WHERE service_date >= CURRENT_DATE - INTERVAL '3 months' GROUP BY health_facility_id;

    Question: List the top 10 health facilities based on the number of services provided.
    SQL Query: SELECT health_facility_id, COUNT(service_id) AS total_services FROM healthfacilities GROUP BY health_facility_id ORDER BY total_services DESC LIMIT 10;

    Health Units
    Question: Retrieve the number of health units operational in each region.
    SQL Query: SELECT region_id, COUNT(health_unit_id) AS operational_units FROM healthunits GROUP BY region_id;

    Question: Show the average operational status rating of health units across all zones.
    SQL Query: SELECT zone_id, AVG(rating) AS avg_rating FROM mfr_operational_status GROUP BY zone_id;

    HIS Governance
    Question: Find the number of governance meetings held per month.
    SQL Query: SELECT DATE_TRUNC('month', meeting_date) AS month, COUNT(meeting_id) AS total_meetings FROM hisgovernance GROUP BY month ORDER BY month;

    Question: List all partners involved in HIS governance and their contribution levels.
    SQL Query: SELECT partner_name, contribution_level FROM hispartners;

    Monitoring and Evaluation
    Question: Retrieve the dashboard report metrics for each facility.
    SQL Query: SELECT facility_id, report_metric FROM mfr_dashboard_reports;

    Question: List the operational status of facilities in each region.
    SQL Query: SELECT region_id, facility_id, status FROM mfr_facilities_register JOIN mfr_operational_status ON mfr_facilities_register.facility_id = mfr_operational_status.facility_id;

    Indicator Data
    Question: Show the trend of a specific health indicator over the last year.
    SQL Query: SELECT EXTRACT(MONTH FROM report_date) AS month, AVG(indicator_value) AS avg_value FROM moh_indicator_data WHERE indicator_id = 'XYZ' AND report_date >= CURRENT_DATE - INTERVAL '1 year' GROUP BY month ORDER BY month;

    Question: Retrieve the top 5 indicators based on performance score.
    SQL Query: SELECT indicator_id, SUM(score) AS total_score FROM moh_indicator_data GROUP BY indicator_id ORDER BY total_score DESC LIMIT 5;

    Publications and Research
    Question: List all publications related to health research in the last 2 years.
    SQL Query: SELECT * FROM publications WHERE publication_date >= CURRENT_DATE - INTERVAL '2 years' AND topic = 'Health Research';

    Question: Find the top 5 research projects with the most funding.
    SQL Query: SELECT project_id, SUM(funding_amount) AS total_funding FROM research GROUP BY project_id ORDER BY total_funding DESC LIMIT 5;

    Workforce
    Question: Count the number of healthcare workers who have completed training in the last 6 months.
    SQL Query: SELECT COUNT(worker_id) AS trained_workers FROM workforce WHERE training_completion_date >= CURRENT_DATE - INTERVAL '6 months';

    Question: Retrieve the distribution of healthcare workers by region.
    SQL Query: SELECT region_id, COUNT(worker_id) AS workforce_count FROM workforce GROUP BY region_id;
    

    Your turn:

    Question: {question}
    SQL Query:
    """

    prompt = ChatPromptTemplate.from_template(template)

    llm = ChatGroq(model="llama3-8b-8192", temperature=0.2)

    def get_schema(_):
        return db.get_table_info()

    return (
        RunnablePassthrough.assign(schema=get_schema)
        | prompt
        | llm
        | StrOutputParser()
    )

# Function to get response to user query
def get_response(user_query: str, db: SQLDatabase, chat_history: list):
    sql_chain = get_sql_chain(db)

    template = """
    You are a senior data analyst at MERQ Consultancy. You are interacting with a user who is asking questions about the HISPMD database.
    Based on the table schema below, along with the user's question, SQL query, and SQL response, write a natural language response.

    <SCHEMA>{schema}</SCHEMA>

    Conversation History: {chat_history}
    SQL Query: <SQL>{query}</SQL>
    User Question: {question}
    SQL Response: {response}

    Write a clear and concise explanation that answers the user's question based on the SQL response and schema. Make sure your response is understandable and provides context to the user.
    """

    prompt = ChatPromptTemplate.from_template(template)

    llm = ChatGroq(model="llama3-8b-8192", temperature=0.2)

    chain = (
        RunnablePassthrough.assign(query=sql_chain).assign(
            schema=lambda _: db.get_table_info(),
            response=lambda vars: run_query(db, vars["query"]),
        )
        | prompt
        | llm
        | StrOutputParser()
    )

    return chain.invoke({
        "question": user_query,
        "chat_history": chat_history,
    })

# Function to create a line chart
def create_line_chart(data, x, y, title):
    plt.figure(figsize=(10, 6))
    sns.lineplot(x=x, y=y, data=data, marker='o')
    plt.title(title)
    plt.xticks(rotation=45)
    st.pyplot()

# Function to create a bar chart
def create_bar_chart(data, x, y, title):
    plt.figure(figsize=(10, 6))
    sns.barplot(x=x, y=y, data=data)
    plt.title(title)
    plt.xticks(rotation=45)
    st.pyplot()

# Function to create a pie chart
def create_pie_chart(data, labels, title):
    plt.figure(figsize=(10, 6))
    plt.pie(data, labels=labels, autopct='%1.1f%%', startangle=140)
    plt.title(title)
    st.pyplot()

# Streamlit UI
if "chat_history" not in st.session_state:
    st.session_state.chat_history = [
        AIMessage(content="Hello! I'm MERQ AI Data Assistant. Ask me anything about your HISPMD System Data."),
    ]

st.set_page_config(page_title="Chat with HISPMD", page_icon=":speech_balloon:")

st.title("Chat with MERQ-AI Data Assistant")

with st.sidebar:
    st.header("AI-powered analysis and interpretation")
    st.subheader("Instructions")
    st.write("This is a simple chat application using the HISPMD Data. Tap/Click on the button below to start chatting.")

    if st.button("Click Here To START"):
        with st.spinner("Connecting to MERQ AI..."):
            db = init_database()
            st.session_state.db = db
            st.success("Connected to MERQ AI!")

for message in st.session_state.chat_history:
    if isinstance(message, AIMessage):
        with st.chat_message("AI"):
            st.markdown(message.content)
    elif isinstance(message, HumanMessage):
        with st.chat_message("Human"):
            st.markdown(message.content)

user_query = st.chat_input("Type a message...")
if user_query is not None and user_query.strip() != "":
    st.session_state.chat_history.append(HumanMessage(content=user_query))

    with st.chat_message("Human"):
        st.markdown(user_query)

    with st.chat_message("AI"):
        response = get_response(user_query, st.session_state.db, st.session_state.chat_history)
        st.markdown(response)

        # Data visualization based on response
        if "SELECT" in user_query.upper() and "GRAPH:" in response:
            lines = response.split('\n')
            graph_type = None
            for line in lines:
                if "Graph:" in line:
                    graph_type = line.split(':')[-1].strip()
                    break
            
            query_result = run_query(st.session_state.db, user_query)
            if query_result:
                df = pd.DataFrame(query_result)
                if not df.empty:
                    if graph_type == 'Line graph':
                        create_line_chart(df, df.columns[0], df.columns[1], "Line Chart")
                    elif graph_type == 'Bar chart':
                        create_bar_chart(df, df.columns[0], df.columns[1], "Bar Chart")
                    elif graph_type == 'Pie chart':
                        labels = [str(item[0]) for item in query_result]
                        values = [float(item[1]) for item in query_result]
                        create_pie_chart(values, labels, "Pie Chart")

    st.session_state.chat_history.append(AIMessage(content=response))
