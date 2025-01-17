import os
import pandas as pd
import streamlit as st
from sqlalchemy import create_engine, text
from dotenv import load_dotenv

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

# Main application
def main():
    st.title("Chat with Your Indicator Data")
    st.sidebar.info("Data loaded from the query!")

    # Load data
    data = load_data()

    # Initialize chat state
    if "messages" not in st.session_state:
        st.session_state.messages = []  # Chat messages

    # Display chat messages
    for message in st.session_state.messages:
        with st.chat_message(message["role"], avatar=message["avatar"]):
            st.markdown(message["content"])

    # Chat input for user
    if user_input := st.chat_input("Ask your question about the indicator data..."):
        # Display user input
        with st.chat_message("user", avatar="👨🏻"):
            st.markdown(user_input)
        st.session_state.messages.append({"role": "user", "avatar": "👨🏻", "content": user_input})

        # Process user query
        with st.spinner("Analyzing your query..."):
            try:
                # Filter data
                filtered_data = filter_data(data, user_input)
                if not filtered_data.empty:
                    response = f"Here are the results:\n{filtered_data.to_markdown(index=False)}"
                else:
                    response = "No matching results found for your query."
            except Exception as e:
                response = f"Error: {e}"

        # Display assistant's response
        with st.chat_message("assistant", avatar="🤖"):
            st.markdown(response)
        st.session_state.messages.append({"role": "assistant", "avatar": "🤖", "content": response})

if __name__ == "__main__":
    main()
