import os
from dotenv import load_dotenv
from langchain_core.messages import AIMessage, HumanMessage
from langchain_core.prompts import ChatPromptTemplate
from langchain_core.runnables import RunnablePassthrough
from langchain_community.utilities import SQLDatabase
from langchain_core.output_parsers import StrOutputParser
from langchain_groq import ChatGroq
import streamlit as st

load_dotenv()

def init_database() -> SQLDatabase:
    user = os.getenv('MYSQL_USER')
    password = os.getenv('MYSQL_PASSWORD')
    host = os.getenv('MYSQL_HOST')
    port = os.getenv('MYSQL_PORT')
    database = os.getenv('MYSQL_DATABASE')
    db_uri = f"mysql+mysqlconnector://{user}:{password}@{host}:{port}/{database}"
    return SQLDatabase.from_uri(db_uri)

def get_sql_chain(db):
    template = """
        You are a data analyst at a company. You are interacting with a user who is asking you questions about the company's database.
        Based on the table schema below, write a SQL query that would answer the user's question. Take the conversation history into account.

        <SCHEMA>{schema}</SCHEMA>

        Conversation History: {chat_history}

        Write only the SQL query and nothing else. Do not wrap the SQL query in any other text, not even backticks.

        For example:
        Question: Retrieve all products from the 'products' table?
        SQL Query: SELECT * FROM products;
        Question: Show the details of a specific product with a given ID.
        SQL Query: SELECT * FROM products WHERE product_id = 1;
        Question: List all users from the 'users' table.
        SQL Query: SELECT * FROM users;

        Question:Display the contents of the 'cart' table. 
        SQL Query: SELECT * FROM cart;

        Question:Get the order history for a specific user from the 'orders' table. 
        SQL Query: SELECT * FROM orders WHERE user_id = 1;

        Question: Count the number of messages in the 'message' table.
        SQL Query: SELECT COUNT(*) AS message_count FROM message;

        Question: Find the total quantity of products available in the 'products' table.
        SQL Query: SELECT SUM(quantity) AS total_quantity FROM products;

        Question: Show the latest orders placed in the 'orders' table.
        SQL Query: SELECT * FROM orders ORDER BY order_date DESC LIMIT 5;

        Question: Identify the most ordered product from the 'orders' table.
        SQL Query: SELECT product_id, SUM(quantity) AS total_ordered 
        FROM orders 
        GROUP BY product_id 
        ORDER BY total_ordered DESC 
        LIMIT 1;

        Question: Determine the total revenue generated from all orders in the 'orders' table.
        SQL Query: SELECT SUM(total_amount) AS total_revenue FROM orders;

        Your turn:

        Question: {question}
        SQL Query:
        """

    prompt = ChatPromptTemplate.from_template(template)

    llm = ChatGroq(model="mixtral-8x7b-32768", temperature=0)

    def get_schema(_):
        return db.get_table_info()

    return (
        RunnablePassthrough.assign(schema=get_schema)
        | prompt
        | llm
        | StrOutputParser()
    )

def get_response(user_query: str, db: SQLDatabase, chat_history: list):
    sql_chain = get_sql_chain(db)

    template = """
        You are a data analyst at a company. You are interacting with a user who is asking you questions about the company's database.
        Based on the table schema below, question, sql query, and sql response, write a natural language response.
        <SCHEMA>{schema}</SCHEMA>

        Conversation History: {chat_history}
        SQL Query: <SQL>{query}</SQL>
        User question: {question}
        SQL Response: {response}"""

    prompt = ChatPromptTemplate.from_template(template)

    llm = ChatGroq(model="mixtral-8x7b-32768", temperature=0)

    chain = (
        RunnablePassthrough.assign(query=sql_chain).assign(
            schema=lambda _: db.get_table_info(),
            response=lambda vars: db.run(vars["query"]),
        )
        | prompt
        | llm
        | StrOutputParser()
    )

    return chain.invoke({
        "question": user_query,
        "chat_history": chat_history,
    })


if "chat_history" not in st.session_state:
    st.session_state.chat_history = [
        AIMessage(content="Hello! I'm MERQ AI Data Assistant. Ask me anything about your HISPMD Data."),
    ]

st.set_page_config(page_title="Chat with HISPMD", page_icon=":speech_balloon:")

st.title("Chat with MERQ-AI Data Assistant")

with st.sidebar:
    st.header("AI-powered analysis and interpretation")
    st.subheader("Instructions")
    st.write("This is a simple chat application using the Data. Tap/Click on the button below to start chatting.")

    if st.button("Start Here"):
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

    st.session_state.chat_history.append(AIMessage(content=response))
