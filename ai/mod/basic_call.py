import os

from groq import Groq
from dotenv import load_dotenv

load_dotenv(".env")

client = Groq(
    api_key=os.getenv("GROQ_API_KEY"),
)

chat_completion = client.chat.completions.create(
    messages=[
        {
            "role": "data analyst",
            "content": "You are a senior data analyst at MERQ Consultancy. You are interacting with a user who is asking you questions about the HISPMD's database. Based on the table schema below, write a SQL query that would answer the user's question. Take the conversation history into account and be able to get the actual and accurate data only from the database with human understandable interpretation without referring to external data sources!",
        }
    ],
    model="llama3-8b-8192",
)

print(chat_completion.choices[0].message.content)
