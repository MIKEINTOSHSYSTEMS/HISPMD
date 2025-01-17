FROM python:3.9-slim

# Set the working directory
WORKDIR /chat

# Install required system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    curl \
    software-properties-common \
    git \
    && rm -rf /var/lib/apt/lists/*

# Copy requirements.txt first to leverage Docker cache
COPY requirements.txt .

# Install Python dependencies
RUN pip install -r requirements.txt

# Copy the rest of the application
COPY . .

# Add the watcher script and make it executable
#COPY ../watcher.py /chat/watcher.py

# Add the startup script and make it executable
#COPY run.sh /chat/run.sh
#RUN chmod +x /chat/run.sh
RUN chmod +x run.sh

# Expose the application port
EXPOSE 8501

# HEALTHCHECK
HEALTHCHECK CMD curl --fail https://localhost:8501/_stcore/health || exit 1

# Run the startup script
#ENTRYPOINT ["/chat/run.sh"]
ENTRYPOINT ["run.sh"]

# HEALTHCHECK
#HEALTHCHECK CMD curl --fail http://localhost:8501/_stcore/health
#HEALTHCHECK CMD curl --fail https://localhost:8501/_stcore/health

#ENTRYPOINT ["streamlit", "run", "app.py", "--server.port=8501", "--server.address=0.0.0.0"]
