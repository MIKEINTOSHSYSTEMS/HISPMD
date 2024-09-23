# Local Chat Bot

Local Chat Bot is an advanced chatbot application built using Streamlit and powered by the LangChain library. It utilizes a conversational AI model to interact with users, providing responses and storing chat history.

## Project Structure

```plaintext
LOCAL_CHAT_BOT/
├── alembic/
│ ├── versions/
│ │ └── 001_create_chat_history_table.py
│ └── env.py
├── .env
├── .env-example
├── .gitignore
├── alembic.ini
├── basic_call.py
├── chatbot.py
├── database.py
├── models.py
├── requirements.txt
└── settings.py
```

## Setup

### Prerequisites

- Python 3.8+
- Pip
- Virtual environment (recommended)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/aarriitt666/local_chat_bot.git
   cd local_chat_bot
   ```

2. Create and activate a virtual environment:

   ```bash
   python -m venv env
   source env/bin/activate  # On Windows use `env\Scripts\activate`
   ```

3. Install dependencies:

   ```bash
   pip install -r requirements.txt
   ```

4. Set up environment variables:
   Copy .env-example to .env and modify it to fit your environment settings.

5. Initialize the database:

   ```bash
   alembic upgrade head
   ```

6. Usage
   Run the application using Streamlit:
   ```bash
   streamlit run chatbot.py
   ```

## Features

- Real-time chat interface with a conversational AI.
- Persistent chat history stored in a database.
- Migration management with Alembic.

## Contributing

Contributions are welcome! Please read the contributing guidelines on how to make contributions.

## License

Distributed under the MIT License. See LICENSE for more information.

This README includes basic sections that are typical for a GitHub project, such as a project description, setup instructions, features, and contribution guidelines. You can modify or extend any section as needed, especially the "Contributing" and "License" sections, depending on your project's specific requirements and policies.
