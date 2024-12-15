<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Chart & Visualization Builder</title>

    <!-- JavaScript Libraries -->
    <script src="./public/script/anychart-ui.min.js"></script>  
    <script src="./public/script/visualization_bundle.min.js"></script>
    <script src="./public/script/anychart-base.min.js"></script>
    <script src="./public/script/anychart-cartesian-3d.min.js"></script>
    <script src="./public/script/anychart-exports.min.js"></script>

    <!-- Font Awesome & Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/style/anychart-ui.min.css">
    <link rel='stylesheet' href='./public/style/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../../app/styles/default.css'>
    <link rel='stylesheet' href='../../app/styles/bootstrap/flatly/normal/style.css'>
    <link rel="stylesheet" href="./public/style/main.css">
    <link rel="stylesheet" href="./public/style/overrides.css">

    <!-- AnyChart Font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.anychart.com/releases/8.13.0/fonts/css/anychart-font.min.css"/>
    <style>
    .header-container {
            display: none;
            /* justify-content: space-between; */
            /* align-items: center; */
            /* background-color: #00274c; */
            /* padding: 4px 10px; */
            /* box-shadow: 0 4px 2px -2px gray; */
            /* flex-wrap: wrap; */
                }
        </style>
</head>
<body>

<div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img src="/app/moh_white.png" alt="Health Information System Performance Monitoring Dashboard (HISPMD)" width="40%" class="">
    </div>

    <br><br>
        
    <div class="filters">
        <label for="indicatorGroup">Indicator Group:</label>
        <!--
        <select id="indicatorGroup" onchange="applyFilters()">
        -->

        <select id="indicatorGroup" onchange="applyFilters()">

        </select>

        <label for="indicator">Indicator(s): Multi Select</label>

                <!--
                <select id="indicator" onchange="applyFilters()" multiple></select>

        -->
        <select id="indicator" onchange="applyFilters()" multiple></select>

        <label for="dataSource">Data Source:</label>
        <select id="dataSource" onchange="applyFilters()">

        </select>

        <label for="dataSourceDetail">Data Source Detail:</label>
        <select id="dataSourceDetail" onchange="applyFilters()">

        </select>

        <label for="scope">Scope:</label>
        <select id="scope" onchange="applyFilters()">

        </select>

        <label for="region">Region:</label>
        <select id="region" onchange="applyFilters()"></select>

        <label for="administrationUnit">Administration Unit:</label>
        <select id="administrationUnit" onchange="applyFilters()">

        </select>

        <label for="facilityType">Facility Type:</label>
        <select id="facilityType" onchange="applyFilters()">

        </select>

        <label for="periodType">Period Type:</label>
        <select id="periodType" onchange="applyFilters()">

        </select>

        <label for="period">Period:</label>
        <select id="period" onchange="applyFilters()"></select>
        
        <label for="year">Year:</label>
        <select id="year" onchange="applyFilters()"></select>


        <label for="xAxis">Group By:</label>
        <select id="xAxis" onchange="applyFilters()">
            <option value="year">Year</option>
            <option value="period">Period</option>
            <option value="periodType">Period Type</option>
            <option value="indicator">Indicator</option>
            <option value="region">Region</option>
            <option value="dataSource">Data Source</option>
            <option value="dataSourceDetail">Data Source Detail</option>
            <option value="facilityType">Facility Type</option>
            <option value="administrationUnit">Administration Unit</option>
        </select>

        <label for="chartType">Select Chart Type</label>
        <select id="chartType" onchange="applyFilters()">
            <option value="column">Column</option>
            <option value="pareto">Combined + Target</option>
            <option value="bar">Bar</option>
            <option value="line">Line</option>
            <option value="area">Area</option>
            <option value="pie">Pie</option>
        </select>
        <br>
        <br>
        <button id="resetFilters" class="btn btn-default btn-sm" id="showAll1">Reset</button>
        
    </div>
    <br>    
    <br>

    <ul>
        <li><a href="#filtered-chart" onclick="showSection('filtered-chart')">HISPMD Data Visualizer</a></li>
        <li><a href="#help" onclick="showSection('help')">Help</a></li>
        <li><a href="#about" onclick="showSection('about')">About</a></li>
    </ul>

  </aside>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle">
            <i class="fa fa-bars"> </i> Data Visualizer
          </a>
        </div>
      </div>
    </nav>
  </div>
  <br>
  <br>
  <br>

  <!-- Main Content -->
  <div id="main-content">
      <!-- Filtered Chart Section -->
      <div id="filtered-chart" class="section">
          <div id="container"></div>
      </div>

      <!-- Help Section -->
      <div id="help" class="section" style="display:none;">
          <h2>Help</h2>
          <p>Help and related articles will be found here on how you can create filter export and customize charts and data preferences.</p>
          <p>CURRENTLY UNDER DEVELOPMENT </p>
      </div>

      <!-- About Section -->
      <div id="about" class="section" style="display:none;">
          <h2>About</h2>
          <p>This is a data visualization tool that allows you to filter and display various types of charts using the data from the API.</p>
          <p>CURRENTLY UNDER DEVELOPMENT </p>
          <br><br>
          <h6>HISPMDCharts - JavaScript Charts designed to be embedded and integrated, v8.10.0.1933</h6>
      </div>

  </div>
</div>

<script>
// Function to apply filters when the user selects options
function applyFilters() {
    const filters = {
        indicatorGroup: document.getElementById('indicatorGroup').value,
        indicator: Array.from(document.getElementById('indicator').selectedOptions).map(option => option.value),
        dataSource: document.getElementById('dataSource').value,
        dataSourceDetail: document.getElementById('dataSourceDetail').value,
        scope: document.getElementById('scope').value,
        region: document.getElementById('region').value,
        administrationUnit: document.getElementById('administrationUnit').value,
        facilityType: document.getElementById('facilityType').value,
        periodType: document.getElementById('periodType').value,
        year: document.getElementById('year').value,
        period: document.getElementById('period').value,
        xAxis: document.getElementById('xAxis').value,
        chartType: document.getElementById('chartType').value
    };

    updateChart(filters); // Function in main.js
}

// Function to switch between sections
function showSection(section) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(sec => sec.style.display = 'none');
    document.getElementById(section).style.display = 'block';
}

// Add a reset filter button handler
const resetFiltersButton = document.getElementById("resetFilters");

resetFiltersButton.addEventListener("click", () => {
  // Reset all dropdowns to "All" option
  const filterDropdowns = [
    "indicatorGroup",
    "indicator",
    "dataSource",
    "dataSourceDetail",
    "scope",
    "region",
    "periodType",
    "facilityType",
    "year",
    "period",
    "administrationUnit",
  ];

  filterDropdowns.forEach((id) => {
    const dropdown = document.getElementById(id);
    if (dropdown) {
      dropdown.selectedIndex = 0; // Reset to "All" option
    }
  });

  // Reset filtered data and redraw the chart
  filteredData = rawData; // Reset to all data
  applyFilters(); // Reapply filters (will update the chart)
});

</script>
<script src="./public/script/app.js"></script>
</body>
</html>