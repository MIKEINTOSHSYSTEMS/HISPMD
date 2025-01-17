#!/bin/bash

# Start the watcher script in the background
python3 watcher.py &

# Start the Streamlit app
streamlit run app.py --server.port=8501 --server.address=0.0.0.0
