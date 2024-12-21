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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    
    <!-- Font Awesome & Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/style/anychart-ui.min.css">
    <link rel='stylesheet' href='./public/style/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../../app/styles/default.css'>
    <link rel='stylesheet' href='../../app/styles/bootstrap/flatly/normal/style.css'>
        <!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <!--
    <link rel="stylesheet" href="./public/style/main.css"> for dark theme side bar
    <link rel="stylesheet" href="./public/style/main.light.css"> for light theme side bar Default
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" 1  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" 2  referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="./public/style/main.light.css">
    <link rel="stylesheet" href="./public/style/overrides.css">

    <!-- AnyChart Font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.anychart.com/releases/8.13.0/fonts/css/anychart-font.min.css"/>
    <style>
      .bg-light {
          --bs-bg-opacity: 1;
          background-color: rgb(22 57 91) !important;
      }
    .header-container {
            display: none;
            /* justify-content: space-between; */
            /* align-items: center; */
            /* background-color: #00274c; */
            /* padding: 4px 10px; */
            /* box-shadow: 0 4px 2px -2px gray; */
            /* flex-wrap: wrap; */
                }
    .section {
        background-color: white;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .section h2 {
        color: #007bff;
        margin-top: 0;
        border-bottom: 2px solid #eee;
        padding-bottom: 10px;
    }

    #container {
      min-height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .under-development {
        color: #dc3545;
        font-style: italic;
        margin-top: 10px;
    }
    /* Responsive design (optional but recommended) */
    @media (max-width: 600px) {
        .section {
          padding: 15px;
        }
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

        <label for="indicator">Indicator(s):</label>

                <!--
                <select id="indicator" onchange="applyFilters()" multiple></select>

        -->
        <select id="indicator" multiple="multiple" onchange="applyFilters()"></select>

        <label for="dataSource">Data Source:</label>
        <select id="dataSource" multiple="multiple" onchange="applyFilters()">

        </select>

        <label for="dataSourceDetail">Data Source Detail:</label>
        <select id="dataSourceDetail" onchange="applyFilters()">

        </select>

        <label for="scope">Scope:</label>
        <select id="scope" onchange="applyFilters()">

        </select>
  <!--
        
  -->
        <label for="region">Region:</label>
        <select id="region" multiple="multiple" onchange="applyFilters()"></select>

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
        <select id="period" multiple="multiple" onchange="applyFilters()"></select>
        
        <label for="year">Year:</label>
        <select id="year" multiple="multiple" onchange="applyFilters()"></select>


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

          <label for="chartType"><b>Chart Type</b></label>

          <select id="chartType" onchange="applyFilters()">
              <option value="column" data-icon="fa-chart-column">Column</option>
              <option value="bar" data-icon="fa-chart-bar">Bar</option>
              <option value="line" data-icon="fa-chart-line">Line</option>
              <option value="area" data-icon="fa-chart-area">Area</option>
              <option value="pie" data-icon="fa-chart-pie">Pie</option>
              <!--<option value="pareto" data-icon="fa-chart-pyramid">Combined + Target</option>-->
          </select>

        <br>
        <br>
        <button id="resetFilters" class="btn btn-primary btn-sm" id="showAll1"><h4>Reset Filters</h4></button>
        
    </div>
    <br>    
    <br>

    <ul>
        <li><a href="#filtered-chart" onclick="showSection('filtered-chart')"><h4><i class="fa-solid fa-chart-line"></i> Data Visualizer</a></h4></li>
        <li><a href="#help" onclick="showSection('help')"><h4><i class="fa fa-question-circle"></i> Help</a></h4></li>
        <li><a href="#about" onclick="showSection('about')"><h4><i class="fa fa-info-circle"></i> About</a></h4></li>
    </ul>

  </aside>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="sidebar-toggle">
      <i class="fa-solid fa-circle-chevron-left"></i>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#filtered-chart" onclick="showSection('filtered-chart')"><h4><i class="fa-solid fa-chart-line"></i> Data Visualizer</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#help" onclick="showSection('help')"><h4><i class="fa fa-question-circle"></i> Help</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about" onclick="showSection('about')"><h4><i class="fa fa-info-circle"></i> About</h4></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <br>
  <br>
  <br>

<div id="main-content">

    <div id="filtered-chart" class="section">
        <h2> </h2>
        <div id="container">
          <span>
          <p>Please use the filters on the 👈 left to start <b>Visualizing</b> Data</p>
  </span>
        </div>
    </div>

<div id="help" class="section" style="display:none;">
    <h2>Help</h2>

    <h3>Getting Started</h3>
    <p>The HISPMD Chart & Visualization Builder allows you to explore and visualize data from the Health Information System Performance Monitoring Dashboard (HISPMD). By selecting filters and options, you can generate charts and graphs that depict trends and relationships within the data set.</p>

    <h3>Filters</h3>
    <p>The filters on the left-hand side panel allow you to narrow down the data you want to visualize. Here's a breakdown of each filter:</p>
    <ul>
        <li><strong>Indicator Group:</strong> Choose a broad category of health indicators (e.g., Maternal Health, Child Health).</li>
        <li><strong>Indicator(s):</strong> Select specific indicators within the chosen group (you can choose multiple).</li>
        <li><strong>Data Source:</strong> Specify the source of the data (e.g., PRISM, RDQA, Admin, IR... ETC).</li>
        <li><strong>Data Source Detail:</strong> (Optional) Further refine the data source based on additional details. For example for IR Pathway Indicator Group</li>
        <li><strong>Scope:</strong> Define the geographical scope (e.g., National, Regional).</li>
        <li><strong>Region:</strong> (Optional) Select a specific region within the chosen scope.</li>
        <li><strong>Administration Unit:</strong> (Optional) Filter by a specific administrative unit (e.g., District).</li>
        <li><strong>Facility Type:</strong> (Optional) Choose the type of facility the data pertains to (e.g., Hospital, Clinic).</li>
        <li><strong>Period Type:</strong> Select how the data is categorized over time (e.g., Year, Month).</li>
        <li><strong>Year:</strong> (Optional) Choose a specific year within the chosen period type.</li>
        <li><strong>Period:</strong> (Optional) Depending on the period type, select a specific month, quarter, etc.</li>
    </ul>
    <p><strong>Applying Filters:</strong></p>
    <ul>
        <li>Use the dropdown menus to choose your desired options for each filter.</li>
        <li>Once you've selected your filters, the chart will update automatically.</li>
    </ul>
    <p><strong>Tip:</strong> Experiment with different filter combinations to explore various aspects of the data.</p>

    <h3>Grouping Data</h3>
    <p>The "Group By" filter (xAxis) allows you to define how the data is categorized on the X-axis of your chart. Options include:</p>
    <ul>
        <li>Year</li>
        <li>Period</li>
        <li>Period Type</li>
        <li>Indicator</li>
        <li>Region</li>
        <li>Data Source</li>
        <li>Data Source Detail</li>
        <li>Facility Type</li>
        <li>Administration Unit</li>
    </ul>
    <p>Choosing a grouping option will organize your data points along the X-axis based on your selection.</p>

    <h3>Chart Types</h3>
    <p>The "Chart Type" dropdown menu allows you to choose how you want to visualize the data. Options include:</p>
    <ul>
        <li><strong>Column:</strong> Displays data as vertical bars.</li>
        <li><strong>Bar:</strong> Displays data as horizontal bars.</li>
        <li><strong>Line:</strong> Shows trends over time using a line graph.</li>
        <li><strong>Area:</strong> Similar to a line graph, but fills the area beneath the line for emphasis.</li>
        <li><strong>Pie:(COMING SOON)</strong> Represents data proportions as slices of a pie chart.</li>
        <li><strong>Combined + Target:(COMING SOON) </strong> Displays a combination chart, potentially including target values.</li>
    </ul>
    <p><strong>Selecting a Chart Type:</strong></p>
    <ul>
        <li>Choose the chart type that best represents the data you're trying to analyze.</li>
        <li>Consider the type of data and the insights you want to extract when making your selection.</li>
    </ul>

    <h3>Resetting Filters</h3>
    <p>The "Reset Filters" button allows you to clear all your filter selections and return to the initial unfiltered data view. This is helpful if you want to start over with your data exploration.</p>

    <h3>Additional Functionalities</h3>
    <p><strong>Data Navigation (Potential Drill Down):</strong> Future development might include drill-down functionality. Check for updates.</p>
    <p><strong>Exporting Charts:</strong> Chart export functionality might be added in future updates.</p>

    <h3>Tips for Seamless Use</h3>
    <ul>
        <li>Start by selecting broad filters and gradually refine them as you explore the data.</li>
        <li>Consider the type of data and the story you want to tell when choosing a chart type.</li>
        <li>Don't hesitate to experiment with different filters and chart types to find the best visualization for your needs.</li>
    </ul>
</div>

<div id="about" class="section" style="display:none;">
    <h2>About</h2>
    <p>This is a data visualization tool that allows you to filter and display various types of charts using data from the API. It is designed to provide a user-friendly interface for exploring and analyzing health information system performance data.</p>
    <p><strong>Key Features:</strong></p>
    <ul>
        <li>Interactive filtering and data exploration.</li>
        <li>Multiple chart types for diverse data visualization.</li>
        <li>Clear and intuitive user interface.</li>
    </ul>
    <p>This tool is currently under development, and we are continuously working to improve its functionality and add new features. We welcome your feedback and suggestions.</p>
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


$(document).ready(function() {
    // Initialize Select2 with dynamic icon insertion
    $('select').select2({
        templateResult: function(data) {
            if (!data.id) { return data.text; } // Return text for the first load
            var iconClass = getIconForOption(data.id); // Function to get the icon class
            var $result = $('<span><i class="fa ' + iconClass + '"></i> ' + data.text + '</span>');
            return $result;
        },
        templateSelection: function(data) {
            var iconClass = getIconForOption(data.id); // Function to get the icon class
            var $selection = $('<span><i class="fa ' + iconClass + '"></i> ' + data.text + '</span>');
            return $selection;
        }
    });

    // Function to determine the appropriate icon based on the option value
    function getIconForOption(optionValue) {
        var iconClass = '';
        switch(optionValue) {
            case 'indicatorGroup1':
                iconClass = 'fa-sitemap';
                break;
            case 'indicator1':
                iconClass = 'fa-chart-line';
                break;
            case 'dataSource1':
                iconClass = 'fa-database';
                break;
            case 'dataSourceDetail1':
                iconClass = 'fa-info-circle';
                break;
            case 'scope1':
                iconClass = 'fa-globe';
                break;
            case 'region1':
                iconClass = 'fa-map-marker-alt';
                break;
            case 'administrationUnit1':
                iconClass = 'fa-building';
                break;
            case 'facilityType1':
                iconClass = 'fa-hospital';
                break;
            case 'periodType1':
                iconClass = 'fa-calendar';
                break;
            case 'period1':
                iconClass = 'fa-calendar-week';
                break;
            case 'year1':
                iconClass = 'fa-calendar-alt';
                break;
            default:
                iconClass = 'fa-check'; // Default icon for unknown options
        }
        return iconClass;
    }
});



$(document).ready(function() {
    $('#chartType').select2({
        templateResult: function (state) {
            if (!state.id) { return state.text; }
            var iconClass = $(state.element).data('icon');
            var $state = $('<span><i class="fas ' + iconClass + '" style="margin-right: 10px;"></i>' + state.text + '</span>');
            return $state;
        }
    });
});

</script>
<script src="./public/script/main.js"></script>
</body>
</html>