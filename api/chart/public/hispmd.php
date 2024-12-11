<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Chart & Visualization Builder</title>
    <script src="../public/script/anychart-ui.min.js"></script>  
    <script src="../public/script/visualization_bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/style/anychart-ui.min.css">
    <!--
    
    <link rel="stylesheet" type="text/css" href="./public/style/anychart-font.min.css"/>
    -->
    
    <!--
    <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.13.0/css/anychart-ui.min.css">
    -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.anychart.com/releases/8.13.0/fonts/css/anychart-font.min.css"/>
    <!-- -->
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            margin: 0;
            transition: margin-left 0.3s ease;
        }

        /* Sidebar Menu Styles */
        #sidebar {
            width: 300px;
            background: linear-gradient(145deg, #2e4053, #00274ce9, #1c2833);
            color: #ecf0f1;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            border-right: 2px solid #34495e;
            transition: transform 0.3s ease-in-out;
            z-index: 1000; /* Ensure the sidebar stays above other content */
            overflow-y: auto; /* Allow scrolling when the content overflows */
        }

        #sidebar h2 {
            font-size: 28px;
            font-weight: bold;
            color: #ecf0f1;
            text-align: center;
            border-bottom: 2px solid #34495e;
            padding-bottom: 10px;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        #sidebar ul li {
            margin: 10px 0;
        }

        #sidebar ul li a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 10px;
            background: transparent;
            transition: all 0.3s ease-in-out;
        }

        #sidebar ul li a:hover {
            background-color: #34495e;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transform: translateX(5px);
        }

        #sidebar ul li a:active {
            background-color: #1c2833;
            transform: scale(0.98);
        }

        #sidebar ul li a i {
            margin-right: 10px;
            font-size: 18px;
            color: #ecf0f1;
        }

        /* Filters Styling */
        .filters {
            background: rgba(255, 255, 255, 0.05);
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: inset 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        .filters label {
            font-size: 14px;
            font-weight: bold;
            color: #bdc3c7;
        }

        .filters select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #34495e;
            background: #2e4053;
            color: #ecf0f1;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .filters select:focus {
            outline: none;
            border-color: #5dade2;
            box-shadow: 0px 0px 4px rgba(93, 173, 226, 0.8);
        }

        /* Main Content Styles */
        #main-content {
            margin-left: 300px;
            margin-top: 0px;
            padding: 20px;
            width: calc(100% - 300px);
            overflow-y: auto;
            transition: margin-left 0.3s ease;
            z-index: 500; /* Ensure the content appears below the sidebar */
        }

        h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Filters Container */
        .filters {
            margin-bottom: 30px;
        }

        .filters select {
            margin: 5px;
            padding: 5px;
        }

        /* Chart Container */
        #container {
            width: 100%;
            height: 500px;
            margin-top: 7px;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            #sidebar {
                transform: translateX(-100%);
            }

            #main-content {
                margin-left: 0;
                width: 100%;
            }

            #sidebar.show {
                transform: translateX(0);
            }

            #sidebar ul li a {
                font-size: 16px;
                padding: 10px;
            }

            .filters select {
                font-size: 12px;
            }

            #toggle-menu {
                display: block;
                position: absolute;
                top: 1px;
                left: 2px;
                background-color: #34495e;
                padding: 10px;
                border-radius: 25%;
                color: #ecf0f1;
                font-size: 24px;
                border: none;
                cursor: pointer;
                z-index: 2000; /* Ensure the toggle button is always above content */
            }
        }
        /* Default Hide Menu Button */
        #toggle-menu {
            display: show; /*none;*/
        }
    </style>
            
</head>
<body>
<button id="toggle-menu">☰</button>
    <!-- Sidebar Menu -->
    <div id="sidebar">
        <img src="/app/moh_white.png" alt="Health Information System Performance Monitoring Dashboard (HISPMD)" width="50%" class="mCS_img_loaded">
        <h5>HISPMD Data Visualizer & Chart Builder</h5>

         <!-- Filters -->
            <div class="filters">


                <label for="indicatorGroup">Indicator Group:</label>
                <select id="indicatorGroup" onchange="applyFilters()"></select>

                <label for="indicator">Indicator(s): Multi Select</label>
                <select id="indicator" onchange="applyFilters()" multiple></select>

                <br>

                <label for="dataSource">Data Source:</label>
                <select id="dataSource" onchange="applyFilters()"></select>

                <label for="dataSourceDetail">Data Source Detail:</label>
                <select id="dataSourceDetail" onchange="applyFilters()"></select>

                <label for="scope">Scope:</label>
                <select id="scope" onchange="applyFilters()"></select>

                <label for="region">Region:</label>
                <select id="region" onchange="applyFilters()"></select>

                <label for="administrationUnit">Administration Unit:</label>
                <select id="administrationUnit" onchange="applyFilters()"></select>

                <label for="facilityType">Facility Type:</label>
                <select id="facilityType" onchange="applyFilters()"></select>

                <label for="year">Year:</label>
                <select id="year" onchange="applyFilters()"></select>


                <br>

                <label for="xAxis">Group By:</label>
                <select id="xAxis" onchange="applyFilters()">
                    <option value="year">Year</option>
                    <option value="indicator">Indicator</option>
                    <option value="region">Region</option>
                    <option value="dataSource">Data Source</option>
                    <option value="dataSourceDetail">Data Source Detail</option>
                    <option value="facilityType">Facility Type</option>
                    <option value="administrationUnit">Administration Unit</option>
                </select>
                <br>
                <br>
                <label for="chartType">Select Chart Type</label>
                <select id="chartType" onchange="applyFilters()">
                    <option value="column">Column</option>
                    <option value="bar">Bar</option>
                    <option value="line">Line</option>
                    <option value="area">Area</option>
                    <option value="pie">Pie</option>
                </select>
                <br>

            </div>


        <br>
        <br>
        <ul>
            <li><a href="#filtered-chart" onclick="showSection('filtered-chart')">HISPMD Data Visualizer</a></li>
            <li><a href="#settings" onclick="showSection('settings')">Settings</a></li>
            <li><a href="#about" onclick="showSection('about')">About</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Filtered Chart Section -->
        <div id="filtered-chart" class="section">
            <!--<h2>HISPMD Chart & Visualization Builder</h2>-->
            
            <!--

                <label for="chartType">Chart Type:</label>
                <select id="chartType" onchange="applyFilters()">
                    <option value="column">Column</option>
                    <option value="bar">Bar</option>
                    <option value="line">Line</option>
                    <option value="area">Area</option>
                    <option value="pie">Pie</option>
                </select>
                <br>
                -->
                
            <!-- Chart Container -->
            <div id="container"></div>
        </div>

        <!-- Settings Section -->
        <div id="settings" class="section" style="display:none;">
            <h2>Settings</h2>
            <p>Adjust your chart settings and data preferences here.</p>
        </div>

        <!-- About Section -->
        <div id="about" class="section" style="display:none;">
            <h2>About</h2>
            <p>This is a data visualization tool that allows you to filter and display various types of charts using the data from the API.</p>
        </div>
    </div>

    <script>
        let rawData = []; // Store fetched data
        let filteredData = []; // Store filtered data

        // Fetch data from API
        fetch("https://hispmd.merqconsultancy.org/api/chart/public/data/hispm_data.php")
            .then(response => response.json())
            .then(data => {
                rawData = data;
                populateFilters(); // Populate filters dynamically
                applyFilters(); // Initialize chart with data
            })
            .catch(error => console.error("Error fetching data:", error));

        // Populate filter dropdowns dynamically
        function populateFilters() {
            populateDropdown("indicatorGroup", [...new Set(rawData.map(item => item["Indicator Group"]))]);
            populateDropdown("indicator", [...new Set(rawData.map(item => item["indicator"]))]);
            populateDropdown("dataSource", [...new Set(rawData.map(item => item["Data Source"]))]);
            populateDropdown("dataSourceDetail", [...new Set(rawData.map(item => item["Data Source Detail"]))]);
            populateDropdown("scope", [...new Set(rawData.map(item => item["Scope"]))]);
            populateDropdown("region", [...new Set(rawData.map(item => item["Region"]))]);
            populateDropdown("facilityType", [...new Set(rawData.map(item => item["Facility Type"]))]);
            populateDropdown("year", [...new Set(rawData.map(item => item["Year"]))]);
            populateDropdown("administrationUnit", [...new Set(rawData.map(item => item["Administration Unit"]))]);
        }

        // Populate individual dropdown
        function populateDropdown(id, options) {
            const dropdown = document.getElementById(id);
            dropdown.innerHTML = `<option value="">All</option>`; // Add "All" option
            options
                .filter(option => option !== "") // Exclude empty values
                .forEach(option => {
                    dropdown.innerHTML += `<option value="${option}">${option}</option>`;
                });
        }

        // Apply filters to the data
// Apply filters to the data
function applyFilters() {
    const chartType = document.getElementById("chartType").value;
    const indicatorGroup = document.getElementById("indicatorGroup").value;
    const selectedIndicators = Array.from(document.getElementById("indicator").selectedOptions).map(option => option.value);
    const dataSource = document.getElementById("dataSource").value;
    const dataSourceDetail = document.getElementById("dataSourceDetail").value;
    const scope = document.getElementById("scope").value;
    const region = document.getElementById("region").value;
    const facilityType = document.getElementById("facilityType").value;
    const year = document.getElementById("year").value;
    const administrationUnit = document.getElementById("administrationUnit").value;
    const xAxis = document.getElementById("xAxis").value;

    // Filter data based on selected values
    filteredData = rawData.filter(item => 
        (indicatorGroup === "" || item["Indicator Group"] === indicatorGroup) &&
        (selectedIndicators.length === 0 || selectedIndicators.includes(item["indicator"])) &&
        (dataSource === "" || item["Data Source"] === dataSource) &&
        (dataSourceDetail === "" || item["Data Source Detail"] === dataSourceDetail) &&
        (scope === "" || item["Scope"] === scope) &&
        (region === "" || item["Region"] === region) &&
        (facilityType === "" || item["Facility Type"] === facilityType) &&
        (year === "" || item["Year"] === year) &&
        (administrationUnit === "" || item["Administration Unit"] === administrationUnit)
    );

    updateIndicatorsBasedOnGroup(indicatorGroup);
    drawChart(chartType, selectedIndicators, xAxis); // Update chart with filtered data
}

// Update the indicator dropdown based on the selected indicator group
function updateIndicatorsBasedOnGroup(indicatorGroup) {
    const indicators = rawData
        .filter(item => indicatorGroup === "" || item["Indicator Group"] === indicatorGroup)
        .map(item => item["indicator"]);
    populateDropdown("indicator", [...new Set(indicators)]);
}

// Populate filter dropdowns dynamically
function populateFilters() {
    populateDropdown("indicatorGroup", [...new Set(rawData.map(item => item["Indicator Group"]))]);
    populateDropdown("dataSource", [...new Set(rawData.map(item => item["Data Source"]))]);
    populateDropdown("dataSourceDetail", [...new Set(rawData.map(item => item["Data Source Detail"]))]);
    populateDropdown("scope", [...new Set(rawData.map(item => item["Scope"]))]);
    populateDropdown("region", [...new Set(rawData.map(item => item["Region"]))]);
    populateDropdown("facilityType", [...new Set(rawData.map(item => item["Facility Type"]))]);
    populateDropdown("year", [...new Set(rawData.map(item => item["Year"]))]);
    populateDropdown("administrationUnit", [...new Set(rawData.map(item => item["Administration Unit"]))]);

    // Initialize indicators based on the first indicator group or all
    updateIndicatorsBasedOnGroup(document.getElementById("indicatorGroup").value);
}

function drawChart(chartType, selectedIndicators, xAxis) {
    console.log('Drawing chart...'); // Debugging statement
    let chartData = {};
    filteredData.forEach(item => {
        const key = getChartKey(xAxis, item);
        if (!chartData[key]) {
            chartData[key] = { total: 0, count: 0 };
        }
        chartData[key].total += item["value"];
        chartData[key].count += 1;
    });

    const chartDataArray = Object.entries(chartData).map(([key, { total, count }]) => [key, total / count]);

    console.log(chartDataArray); // Check if the data is correct

    // Ensure container is cleared before drawing new chart
    document.getElementById("container").innerHTML = '';

    let chart;
    if (chartType === "pie") {
        chart = anychart.pie();
    } else if (chartType === "bar") {
        chart = anychart.bar();
    } else if (chartType === "line") {
        chart = anychart.line();
    } else if (chartType === "area") {
        chart = anychart.area();
    } else {
        chart = anychart.column(); // Default to column chart
    }

    chart.palette(anychart.palettes.distinctColors);
    chart.data(chartDataArray);

    const chartTitle = selectedIndicators.length > 0 ? `Chart for ${selectedIndicators.join(", ")}` : "Indicators Chart";
    chart.title(chartTitle);

    if (chartType !== "pie") {
        let xAxisTitle = "";
        switch (xAxis) {
            case "year":
                xAxisTitle = "Years";
                break;
            case "indicator":
                xAxisTitle = "Indicators";
                break;
            case "dataSource":
                xAxisTitle = "Data Sources";
                break;
            case "dataSourceDetail":
                xAxisTitle = "Data Source Details";
                break;
            case "scope":
                xAxisTitle = "Scopes";
                break;
            case "region":
                xAxisTitle = "Regions";
                break;
            case "administrationUnit":
                xAxisTitle = "Administrative Units";
                break;
            case "facilityType":
                xAxisTitle = "Facility Types";
                break;
            default:
                xAxisTitle = "X-Axis";
        }

        chart.xAxis().title(xAxisTitle);
        chart.yAxis().title("Data Values");
    }

    chart.legend().enabled(true);
    chart.legend().useHtml(true);

    chart.legend().itemsFormat(function() {
    return "<span style='color:" + this.series.color() + ";font-weight:600'>" +
            this.series.name() + "</span>: $" + this.series.getStat("sum");
    });    

    chart.labels().enabled(true).format("{%value}");

    var legend = anychart.standalones.legend();
    var legendItems = [];
    for (let i = 0; i < chartDataArray.length; i++) {
        legendItems.push({
            text: chartDataArray[i][0],
            iconType: "circle",
            iconFill: chart.palette().itemAt(i)
        });
    }

    legend.items(legendItems);
    legend.position("right");
    legend.align("top");
    legend.container("container");
    legend.draw();

    chart.container("container");
    chart.draw();
}

            // replace menu items provider
chart.contextMenu().itemsProvider(function() {
  var items = {
    'menu-item-1': {
      'text': 'Print chart',
      'action': function() {
        this.chart.print();
      }
    }, 
    'menu-item-2': {
      'text': 'Save chart as image',
      'action': function() {
        this.chart.saveAsPng();
      }
    }, 
    'menu-item-3': {
      'text': 'Go to my page',
      'href': 'http://merqconsultancy.org',
      'target': '_blank'
    }
  }

  return items;
});



        // Get the chart key based on the selected x-axis
        function getChartKey(xAxis, item) {
            switch(xAxis) {
                case "year":
                    return item["Year"];
                case "indicator":
                    return item["indicator"];
                case "region":
                    return item["Region"];
                case "dataSource":
                    return item["Data Source"];
                case "dataSourceDetail":
                    return item["Data Source Detail"];
                case "facilityType":
                    return item["Facility Type"];
                case "administrationUnit":
                    return item["Administration Unit"];
                default:
                    return item["Year"];
            }
        }

        // Show the relevant section based on the clicked menu item
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => section.style.display = 'none');
            document.getElementById(sectionId).style.display = 'block';
        }

        // Initialize the view
        showSection('filtered-chart');

                // Toggle sidebar on mobile
        const toggleMenuButton = document.getElementById('toggle-menu');
        const sidebar = document.getElementById('sidebar');

        toggleMenuButton.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });
    </script>
</body>
</html>
