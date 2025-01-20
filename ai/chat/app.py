import os
import pandas as pd
import streamlit as st
from sqlalchemy import create_engine, text
from dotenv import load_dotenv
import re  # Import the re module
import datetime  # Import datetime for timestamp
import numpy as np
import plotly.express as px  # Import Plotly for interactive plotting
from io import BytesIO  # Import BytesIO for in-memory file handling

# Load environment variables from .env
load_dotenv()

# Automatically fetch credentials from .env
DB_NAME = os.getenv("DB_NAME")
DB_USER = os.getenv("DB_USER")
DB_PASSWORD = os.getenv("DB_PASSWORD")
DB_HOST = os.getenv("DB_HOST")
DB_PORT = os.getenv("DB_PORT")

# Generate the Postgres connection URI
POSTGRES_URI = f"postgresql+psycopg2://{DB_USER}:{DB_PASSWORD}@{DB_HOST}:{DB_PORT}/{DB_NAME}"

# SQL Query
QUERY = text("""
SELECT
  "source"."Indicator Group" AS "Indicator Group",
  "source"."Indicator Name" AS "Indicator Name",
  "source"."Target Value" AS "Target Value",
  "source"."Target Year" AS "Target Year",
  "source"."Baseline Value" AS "Baseline Value",
  "source"."Baseline Year" AS "Baseline Year",
  "source"."Facility Type" AS "Facility Type",
  "source"."Data Source" AS "Data Source",
  "source"."Data Source Detail" AS "Data Source Detail",
  "source"."Assessment" AS "Assessment",
  "source"."Administration Unit" AS "Administration Unit",
  "source"."Year" AS "Year",
  "source"."Quarter ID" AS "Quarter ID",
  "source"."Month ID" AS "Month ID",
  "source"."Period ID" AS "Period ID",
  "source"."Scope" AS "Scope",
  "source"."Region" AS "Region",
  "source"."Gender/Sex" AS "Gender/Sex",
  "source"."Value" AS "Value",
  "source"."Data Representation" AS "Data Representation",
  "source"."Period" AS "Period"
FROM
  (
    SELECT
      ig.indicator_group_name AS "Indicator Group",
      mi.indicator_name AS "Indicator Name",
      CAST(NULLIF(mit.indicator_target, '') AS NUMERIC) AS "Target Value",
      mit.indicator_target_year AS "Target Year",
      CAST(NULLIF(mit.indicator_baseline, '') AS NUMERIC) AS "Baseline Value",
      mit.indicator_baseline_year AS "Baseline Year",
      mf.facility_type_name AS "Facility Type",
      ds.data_source_name AS "Data Source",
      ir.ir_datasource AS "Data Source Detail",
      a.assessment_name AS "Assessment",
      u.unit_name AS "Administration Unit",
      ind.year AS "Year",
      ind.quarter_id AS "Quarter ID",
      ind.month_id AS "Month ID",
      ind.period_id AS "Period ID",
      s.scope_name AS "Scope",
      r.region_name AS "Region",
      ind.gender_sex AS "Gender/Sex",
      ind.value AS "Value",
      ind.data_representation AS "Data Representation",
      CASE
        WHEN ind.quarter_id IS NOT NULL THEN CONCAT('Q', ind.quarter_id :: TEXT, '-', ind.year :: TEXT)
        WHEN ind.month_id IS NOT NULL THEN CONCAT('M', ind.month_id :: TEXT, '-', ind.year :: TEXT)
        ELSE ind.year :: TEXT
      END AS "Period"
    FROM
      public.moh_indicator_data ind
      INNER JOIN public.moh_indicators mi ON ind.indicator_id = mi.indicator_id
      LEFT JOIN public.moh_facility_types mf ON ind.facility_type_id = mf.facility_type_id
      LEFT JOIN public.moh_data_scope s ON ind.scope_id = s.scope_id
      LEFT JOIN public.moh_regions r ON ind.region_id = r.region_id
      LEFT JOIN public.moh_administration_units u ON ind.unit_id = u.unit_id
      LEFT JOIN public.moh_data_sources ds ON ind.data_source_id = ds.data_source_id
      LEFT JOIN public.moh_ir_datasource ir ON ind.data_source_detail = CAST(ir.ir_id AS VARCHAR)
      LEFT JOIN public.moh_assessments a ON ind.assessment_id = a.assessment_id
      LEFT JOIN public.moh_indicator_groups ig ON mi.indicator_group_id = ig.indicator_group_id
      LEFT JOIN public.moh_indicators_target mit ON mi.indicator_id = mit.indicator_id
    GROUP BY
      mi.indicator_name,
      mit.indicator_target,
      mit.indicator_target_year,
      mit.indicator_baseline,
      mit.indicator_baseline_year,
      mf.facility_type_name,
      ds.data_source_name,
      ir.ir_datasource,
      a.assessment_name,
      r.region_name,
      u.unit_name,
      ind.year,
      ind.quarter_id,
      ind.month_id,
      ind.period_id,
      s.scope_name,
      ind.gender_sex,
      ind.data_representation,
      ig.indicator_group_id,
      ig.indicator_group_name,
      ind.value,
      CASE
        WHEN ind.quarter_id IS NOT NULL THEN CONCAT('Q', ind.quarter_id :: TEXT, '-', ind.year :: TEXT)
        WHEN ind.month_id IS NOT NULL THEN CONCAT('M', ind.month_id :: TEXT, '-', ind.year :: TEXT)
        ELSE ind.year :: TEXT
      END
  ) AS "source";
""")

# Load data into a Pandas DataFrame
@st.cache_resource
def load_data():
    engine = create_engine(POSTGRES_URI)
    with engine.connect() as connection:
        data = pd.read_sql(QUERY, connection)
    return data

# Filter data based on user input
def filter_data(df, query):
    query = query.lower()
    filtered = df[df.apply(lambda row: query in row.astype(str).str.lower().to_string(), axis=1)]
    return filtered

# Handle different types of user queries
def handle_user_query(df, user_input):
    user_input = user_input.lower()
    if "what is hispmd" in user_input or "what is the system all about" in user_input or "hispmd" in user_input:
        return """HISPMD is Health Information Systems Performance Monitoring Dashboard.

The [Ministry of Health – Ethiopia](https://moh.gov.et) developed this dashboard to routinely monitor the performance of the Ethiopian Health Information System. This dashboard illustrates the HIS performance in terms of data quality, data use, digital health, HIS governance, and information revolution pathways. The indicators used in the dashboard were selected and prioritized through a collaborative co-design process involving relevant stakeholders. It utilizes diverse data sources from the routine health information system, surveys, and review reports. To assist in interpreting the indicator values, a brief description of the data sources is provided."""
    elif "hello" in user_input or "hi" in user_input:
        return "Hello! How can I assist you with the HISPMD Indicator data today?"
    elif "how are you" in user_input:
        return "I'm fine, I hope you are doing well too!"
    elif "who are you" in user_input:
        return "I'm your HISPMD AI Data Assistant chatbot, but I'm here to help you with your indicator data queries! Type help to learn more..."
    elif "how do i use this dashboard help me" in user_input or "how can i use this chat bot" in user_input:
        return "Sure, I will be very happy to help you. Just start by typing an indicator name or a question about the data."
    elif "who developed you" in user_input or "who is the developer" in user_input:
        return "I'm developed by [MERQ Consultancy](https://merqconsultancy.org) by a developer named [Michael Kifle Teferra](https://www.linkedin.com/in/michael-k-teferra-50573079/)! You can see the details in Additional Info under the Menu section."
    elif "help" in user_input or "i don't understand" in user_input or "please help" in user_input or "explain" in user_input or "what" in user_input:
        return "You can ask questions like:\n- 'List all data'\n- 'How many indicators are there?'\n- 'What is the average value of [Indicator Name]?'\n- 'What is the sum of [Indicator Name]?'\n- 'Show unique indicators'\n- 'Give me a summary of [Indicator Name]'\n- 'What is the maximum value of [Indicator Name]?'\n- 'What is the minimum value of [Indicator Name]?'\n- 'Show the lowest value for [Indicator Name]'\n- 'Show the highest value for [Indicator Name]'\n- 'What is the value of [Indicator Name] in the year [Year]?'"
    elif "how to generate charts" in user_input or "how to" in user_input:
        return "You can generate different types of charts by asking the chatbot. Here are some examples:\n- 'Show a bar chart of [Indicator Name] by year'\n- 'Show a line chart of [Indicator Name] by year'\n- 'Show an area chart of [Indicator Name] by year'\n- 'Show a pie chart of [Indicator Name] by [Category]'\n- 'Show a horizontal bar chart of [Indicator Name] by [Category]'\n- 'Show a combo chart of [Indicator Name] by year'\n\nExamples:\n- 'Show a bar chart of birth notifications by year'\n- 'Show a chart of reporting completeness by region'\n- 'Show an area chart of RDQA by region'\n- 'Show a pie chart of Woreda by data source detail'\n- 'Show a horizontal bar chart of Reporting completeness by Facility Type'\n- 'Show a combo chart of Reporting Timeliness by region for year 2024'"
    elif "why is this like this" in user_input:
        return "Please provide more details about your query so I can assist you better."
    elif "how do i use this dashboard help me" in user_input:
        return "sure I will be very happy to help you just start by typeing an indicator name..."    
    elif "thank you" in user_input or "thanks" in user_input:
        return "You are very Welcome!😊 If you have got any questions regarding HISPMD indicators please feel free to ask!"    
    elif "HISPMD" in user_input:
        return "HISPMD stands for Health Information Systems Performance Monitoring Dashboard."    
    elif "list all data" in user_input:
        return df
    elif "how many" in user_input:
        return df["Indicator Name"].nunique()
    elif "average" in user_input:
        match = re.search(r"average of (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return result["Value"].mean()
    elif "sum of" in user_input:
        match = re.search(r"sum of (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return result["Value"].sum()
    elif "unique" in user_input:
        return df["Indicator Name"].unique()
    elif "summary of" in user_input:
        match = re.search(r"summary of (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return result.describe()
    elif "summary of" in user_input and "by" in user_input:
        match = re.search(r"summary of (.+) by (.+)", user_input)
        if match:
            indicator, group_by = match.groups()
            indicator = indicator.strip()
            group_by = [g.strip().lower() for g in group_by.split(",")]
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                group_by_columns = [next((col for col in result.columns if col.lower() == g), g) for g in group_by]
                if all(col in result.columns for col in group_by_columns):
                    grouped_result = result.groupby(group_by_columns).describe()
                    return grouped_result
    elif "maximum" in user_input:
        match = re.search(r"maximum of (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return result["Value"].max()
    elif "minimum" in user_input:
        match = re.search(r"minimum of (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return result["Value"].min()
    elif "lowest" in user_input:
        match = re.search(r"lowest value for (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return result.loc[result["Value"].idxmin()]
    elif "highest" in user_input:
        match = re.search(r"highest value for (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return result.loc[result["Value"].idxmax()]
    elif "value of" in user_input:
        match = re.search(r"value of (.+) in the year (\d{4})", user_input)
        if match:
            indicator, year = match.groups()
            indicator = indicator.strip()
            result = df[(df["Indicator Name"].str.lower().str.contains(indicator)) & (df["Year"] == int(year))]
            if not result.empty:
                return result
    elif "trend of" in user_input:
        match = re.search(r"trend of (.+)", user_input)
        if match:
            indicator = match.group(1).strip()
            result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                return {"data": result.sort_values(by="Year"), "type": "trend"}
    elif "chart of" in user_input or "chart for" in user_input:
        match = re.search(r"chart (?:of|for) (.+) by (.+)", user_input)
        if match:
            indicator, x_axis = match.groups()
            indicator = indicator.strip()
            x_axis = x_axis.strip().lower()
            year_match = re.search(r"for year (\d{4}(?: \d{4})*)", user_input)
            if year_match:
                years = list(map(int, year_match.group(1).split()))
                result = df[(df["Indicator Name"].str.lower().str.contains(indicator)) & (df["Year"].isin(years))]
            else:
                result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
            if not result.empty:
                x_axis = re.sub(r" for year \d{4}(?: \d{4})*", "", x_axis).strip()  # Clean x_axis
                chart_type = "bar"  # Default chart type
                if "line chart" in user_input:
                    chart_type = "line"
                elif "area chart" in user_input:
                    chart_type = "area"
                elif "pie chart" in user_input:
                    chart_type = "pie"
                elif "horizontal bar chart" in user_input:
                    chart_type = "horizontal_bar"
                elif "combo chart" in user_input:
                    chart_type = "combo"
                return {"data": result, "x_axis": x_axis, "chart_type": chart_type}
        else:
            match = re.search(r"chart (?:of|for) (.+)", user_input)
            if match:
                indicator = match.group(1).strip()
                result = df[df["Indicator Name"].str.lower().str.contains(indicator)]
                if not result.empty:
                    x_axis = "year"
                    chart_type = "bar"  # Default chart type
                    return {"data": result, "x_axis": x_axis, "chart_type": chart_type}
    elif "filter by" in user_input:
        match = re.search(r"filter by (.+)", user_input)
        if match:
            filters = match.group(1).strip().split(",")
            filtered_df = df
            for f in filters:
                key, value = f.split("=")
                key = key.strip().lower()
                value = value.strip().lower()
                filtered_df = filtered_df[filtered_df[key].str.lower() == value]
            if not filtered_df.empty:
                return filtered_df
    else:
        return filter_data(df, user_input)

# Generate conversational response
def generate_response(result, user_input, chart_color):
    columns_order = [
        "Indicator Group", "Indicator Name", "Year", "Data Source", "Scope", "Data Source Detail",
        "Value", "Target Value", "Baseline Value", "Administration Unit", "Facility Type", "Region"
    ]
    
    if isinstance(result, dict) and "data" in result:
        data = result["data"]
        chart_type = result.get("chart_type", "bar")
        x_axis = result["x_axis"]
        match = re.search(r"chart (?:of|for) (.+) by", user_input, re.IGNORECASE)
        indicator_name = match.group(1) if match else user_input
        
        # Clean the indicator_name to remove "chart for" or "chart of"
        indicator_name = re.sub(r"chart (?:of|for) ", "", indicator_name, flags=re.IGNORECASE)
        
        # Ensure x_axis matches column names
        x_axis = next((col for col in data.columns if col.lower() == x_axis.lower()), x_axis)
        
        if x_axis not in data.columns:
            response = f"Invalid x-axis '{x_axis}'. Please specify a valid column name."
        else:
            hover_data = [col for col in data.columns if col not in ["Value", x_axis] and data[col].notna().any()]
            hover_data = ["Indicator Group", "Indicator Name", "Data Source", "Scope"] + hover_data
            
            if chart_type == "line":
                fig = px.line(data, x=x_axis, y="Value", title=f"Line Chart of {indicator_name} by {x_axis}", 
                              hover_data=hover_data, template="plotly_dark", line_shape='linear')
                fig.update_traces(line=dict(color=chart_color))
            elif chart_type == "area":
                fig = px.area(data, x=x_axis, y="Value", title=f"Area Chart of {indicator_name} by {x_axis}", 
                              hover_data=hover_data, template="plotly_dark")
                fig.update_traces(line=dict(color=chart_color), fillcolor=chart_color)
            elif chart_type == "pie":
                fig = px.pie(data, names=x_axis, values="Value", title=f"Pie Chart of {indicator_name} by {x_axis}")
                fig.update_traces(marker=dict(colors=[chart_color]))
            elif chart_type == "horizontal_bar":
                fig = px.bar(data, x="Value", y=x_axis, orientation='h', title=f"Horizontal Bar Chart of {indicator_name} by {x_axis}", 
                             hover_data=hover_data, template="plotly_dark")
                fig.update_traces(marker=dict(color=chart_color))
            elif chart_type == "combo":
                fig = px.line(data, x=x_axis, y="Value", title=f"Combo Chart of {indicator_name} by {x_axis}", 
                              hover_data=hover_data, template="plotly_dark")
                fig.add_bar(x=data[x_axis], y=data["Value"], name="Bar", marker=dict(color=chart_color))
                fig.add_scatter(x=data[x_axis], y=data["Value"], mode='markers', name="Scatter", marker=dict(color=chart_color))
            else:
                fig = px.bar(data, x=x_axis, y="Value", title=f"Bar Chart of {indicator_name} by {x_axis}", 
                             hover_data=hover_data, template="plotly_dark")
                fig.update_traces(marker=dict(color=chart_color))
            
            if chart_type != "pie":
                fig.update_traces(marker=dict(opacity=0.7))
            st.plotly_chart(fig, key=f"chart_{len(st.session_state.charts)}")
            
            # Store chart in session state
            st.session_state.charts.append({"fig": fig, "user_input": user_input})
            
            # Export functionality
            st.download_button(
                label="Export Data as CSV",
                data=data.to_csv(index=False).encode('utf-8'),
                file_name=f"{indicator_name}_data.csv",
                mime="text/csv"
            )
            
            # Export to Excel
            output = BytesIO()
            with pd.ExcelWriter(output, engine='xlsxwriter') as writer:
                data.to_excel(writer, index=False, sheet_name='Sheet1')
                writer.close()
            st.download_button(
                label="Export Data as Excel",
                data=output.getvalue(),
                file_name=f"{indicator_name}_data.xlsx",
                mime="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
            )
            
            st.download_button(
                label="Export Chart as PNG",
                data=fig.to_image(format="png"),
                file_name=f"{indicator_name}_chart.png",
                mime="image/png"
            )
            st.download_button(
                label="Export Chart as PDF",
                data=fig.to_image(format="pdf"),
                file_name=f"{indicator_name}_chart.pdf",
                mime="application/pdf"
            )
            
            response = f"Here is the {chart_type.replace('_', ' ')} for your query '{user_input}':"
    elif isinstance(result, pd.DataFrame):
        if not result.empty:
            # Reorder columns and drop columns with all NaN values
            available_columns = [col for col in columns_order if col in result.columns]
            result = result[available_columns].dropna(axis=1, how='all')
            
            # Format Year column to remove decimals
            if "Year" in result.columns:
                result["Year"] = result["Year"].astype(int)
            
            # Calculate summary statistics
            summary_stats = result.describe().loc[['mean', 'max', 'min', 'count']]
            
            # Generate summary paragraph
            summary_paragraph = f"The summary of the indicator data is as follows:\n\n"
            summary_paragraph += f"Average Value: {summary_stats.loc['mean', 'Value']:.2f} "
            summary_paragraph += f"Maximum Value: {summary_stats.loc['max', 'Value']:.2f} "
            summary_paragraph += f"Minimum Value: {summary_stats.loc['min', 'Value']:.2f} "
            summary_paragraph += f"Count of Rows: {int(summary_stats.loc['count', 'Value'])}\n"
            
            response = f"Here are the results for your query '{user_input}':\n\n{result.to_markdown(index=False)}\n\n{summary_paragraph}"
        else:
            response = "I couldn't find any matching results for your query. Could you please rephrase or provide more details?"
    elif isinstance(result, pd.Series):
        response = f"Here is the result for your query '{user_input}':\n\n{result.to_markdown()}"
    elif isinstance(result, (int, float)):
        response = f"The result for your query '{user_input}' is {result}."
    elif isinstance(result, str):
        response = result
    else:
        response = "I couldn't understand your query. Could you please rephrase or provide more details?"
    return response

# Generate conversation content
def generate_conversation_content(messages):
    content = ""
    for message in messages:
        content += f"{message['role']}: {message['content']}\n"
    return content

# Main application
def main():
    st.title("HISPMD AI Data Assistant")
    st.sidebar.info("Data loaded from the HISPMD!")

    # Sidebar menu
    menu = st.sidebar.selectbox("Menu", ["Chat", "Help", "About", "Additional Info"])

    if menu == "Help":
        st.subheader("Help")
        st.markdown("""
        **How to use the AI Chatbot:**
        1. Type your question in the chat input box.
        2. The chatbot will respond with relevant information based on the indicator data.
        3. You can ask questions like:
            - "Hello" or "Hi"
            - "List all data"
            - "How many indicators are there?"
            - "What is the average value of [Indicator Name]?"
            - "What is the sum of [Indicator Name]?"
            - "Show unique indicators"
            - "Give me a summary of [Indicator Name]"
            - "What is the maximum value of [Indicator Name]?"
            - "What is the minimum value of [Indicator Name]?"
            - "Show the lowest value for [Indicator Name]"
            - "Show the highest value for [Indicator Name]"
            - "What is the value of [Indicator Name] in the year [Year]?"

        **How to generate charts:**
        \n
        You can generate different types of charts by asking the chatbot. Here are some examples:\n
            - "Show a bar chart of [Indicator Name] by year"
            - "Show a line chart of [Indicator Name] by year"
            - "Show an area chart of [Indicator Name] by year"
            - "Show a pie chart of [Indicator Name] by [Category]"
            - "Show a horizontal bar chart of [Indicator Name] by [Category]"
            - "Show a combo chart of [Indicator Name] by year"
        
        **Examples:**\n
            Show a bar chart of reporting timeliness by year
            Show a line chart of birth notification by year
            Show an area chart of reporting completeness by year
            Show a pie chart of woredas by data source detail
            Show a horizontal bar chart of Reporting completeness by Facility Type
            Show a combo chart of reporting timeliness by region for year 2024
        """)
    elif menu == "About":
        st.subheader("About")
        st.markdown("""
        **HISPMD AI Data Assistant**
        This application allows you to interact with the HISPMD indicator data using natural language queries.
        It leverages Streamlit for the web interface and SQLAlchemy for database interactions.
        NO AI Or ML is used in this application. It is a simple rule-based chatbot. That only works on HISPMD data and has it's own Engine.
        """)
    elif menu == "Additional Info":
        st.subheader("Additional Info")
        st.markdown("""
        **Relevant Information:**
        - This chatbot is designed to help you quickly access and analyze indicator data.
        - For more information, please contact the support team.

        **Powered By [MERQ Consultancy](https://merqconsultancy.org)**

        **Designed and Developed by Information Systems & Digital Health Unit**

        **Developer: Michael Kifle Teferra**
        - **Contact:** +251913391985
        - **Web:** [mikeintoshsys.com](https://mikeintoshsys.com)
        - **Telegram:** [@mikeintosh](https://t.me/mikeintosh)
        - **GitHub:** [MIKEINTOSHSYSTEMS](https://github.com/MIKEINTOSHSYSTEMS)

        **For support regarding HISPMD:** support@merqconsultancy.org
        """)
    else:
        # Load data
        data = load_data()

        # Initialize chat state
        if "messages" not in st.session_state:
            st.session_state.messages = []  # Chat messages
        if "charts" not in st.session_state:
            st.session_state.charts = []  # Store charts

        # Display chat messages
        for i, message in enumerate(st.session_state.messages):
            with st.chat_message(message["role"], avatar=message["avatar"]):
                st.markdown(message["content"])
                if message["role"] == "assistant" and "chart_index" in message:
                    if message["chart_index"] < len(st.session_state.charts):
                        st.plotly_chart(st.session_state.charts[message["chart_index"]]["fig"], key=f"chart_{i}_{message['chart_index']}")
                if message["role"] == "user":
                    if st.button("Re-run this query", key=f"rerun_{i}"):
                        user_input = message["content"]
                        with st.chat_message("user", avatar="👨🏻"):
                            st.markdown(user_input)
                        st.session_state.messages.append({"role": "user", "avatar": "👨🏻", "content": user_input})

                        with st.spinner("Analyzing your query..."):
                            try:
                                result = handle_user_query(data, user_input)
                                response = generate_response(result, user_input, chart_color)
                            except Exception as e:
                                response = f"Oops! Something went wrong while processing your query. Error: {e}"

                        with st.chat_message("assistant", avatar="🤖"):
                            st.markdown(response)
                        if isinstance(result, dict) and "data" in result:
                            st.session_state.messages.append({"role": "assistant", "avatar": "🤖", "content": response, "chart_index": len(st.session_state.charts) - 1})
                        else:
                            st.session_state.messages.append({"role": "assistant", "avatar": "🤖", "content": response})

        # Add color picker to sidebar
        chart_color = st.sidebar.color_picker("Pick a chart color", "#1f77b4")

        # Chat input for user
        if user_input := st.chat_input("Type help or Ask your question here..."):
            # Display user input
            with st.chat_message("user", avatar="👨🏻"):
                st.markdown(user_input)
            st.session_state.messages.append({"role": "user", "avatar": "👨🏻", "content": user_input})

            # Process user query
            with st.spinner("Analyzing your query..."):
                try:
                    result = handle_user_query(data, user_input)
                    response = generate_response(result, user_input, chart_color)
                except Exception as e:
                    response = f"Oops! Something went wrong while processing your query. Error: {e}"

            # Display assistant's response
            with st.chat_message("assistant", avatar="🤖"):
                st.markdown(response)
            if isinstance(result, dict) and "data" in result:
                st.session_state.messages.append({"role": "assistant", "avatar": "🤖", "content": response, "chart_index": len(st.session_state.charts) - 1})
            else:
                st.session_state.messages.append({"role": "assistant", "avatar": "🤖", "content": response})

        # Export and download conversation button
        if st.button("Chat History"):
            content = generate_conversation_content(st.session_state.messages)
            st.download_button(
                label="Export and Download Conversation",
                data=content,
                file_name=f"conversation_{datetime.datetime.now().strftime('%Y%m%d_%H%M%S')}.txt",
                mime="text/plain"
            )

if __name__ == "__main__":
    main()
