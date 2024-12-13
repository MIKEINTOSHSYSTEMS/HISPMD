<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Chart</title>
    <script src="../script/visualization_bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            margin: 0;
        }

        /* Sidebar Menu Styles */
        #sidebar {
            width: 200px;
            background-color: #2f4f4f;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        #sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li {
            margin: 10px 0;
        }

        #sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 8px;
            border-radius: 4px;
        }

        #sidebar ul li a:hover {
            background-color: #4c6f6f;
        }

        /* Main Content Styles */
        #main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
            overflow-y: auto;
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
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar Menu -->
    <div id="sidebar">
        <h2>Dashboard Menu</h2>
        <br>
        <br>

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

                <br>

                <label for="xAxis">X-Axis:</label>
                <select id="xAxis" onchange="applyFilters()">
                    <option value="year">Year</option>
                    <option value="indicator">Indicator</option>
                    <option value="region">Region</option>
                    <option value="dataSource">Data Source</option>
                    <option value="dataSourceDetail">Data Source Detail</option>
                    <option value="facilityType">Facility Type</option>
                    <option value="administrationUnit">Administration Unit</option>
                </select>
            </div>


        <br>
        <br>
        <ul>
            <li><a href="#filtered-chart" onclick="showSection('filtered-chart')">Filtered Chart</a></li>
            <li><a href="#settings" onclick="showSection('settings')">Settings</a></li>
            <li><a href="#about" onclick="showSection('about')">About</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Filtered Chart Section -->
        <div id="filtered-chart" class="section">
            <h2>Filtered Chart with Data from API</h2>
            

                <label for="chartType">Chart Type:</label>
                <select id="chartType" onchange="applyFilters()">
                    <option value="column">Column</option>
                    <option value="bar">Bar</option>
                    <option value="line">Line</option>
                    <option value="area">Area</option>
                    <option value="pie">Pie</option>
                </select>
                <br>
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
        function applyFilters() {
            const chartType = document.getElementById("chartType").value;
            const indicatorGroup = document.getElementById("indicatorGroup").value;
            const selectedIndicators = Array.from(document.getElementById("indicator").selectedOptions).map(option => option.value);
            const dataSource = document.getElementById("dataSource").value;
            const dataSourceDetail = document.getElementById("dataSourceDetail").value;
            const scope = document.getElementById("scope").value;
            const region = document.getElementById("region").value;
            const facilityType = document.getElementById("facilityType").value;
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
                (administrationUnit === "" || item["Administration Unit"] === administrationUnit)
            );

            updateDropdownsBasedOnIndicators(selectedIndicators);
            drawChart(chartType, selectedIndicators, xAxis); // Update chart with filtered data
        }

        // Update dropdowns based on selected indicators
        function updateDropdownsBasedOnIndicators(selectedIndicators) {
            if (selectedIndicators.length === 1) {
                const selectedIndicator = selectedIndicators[0];
                const indicatorData = rawData.filter(item => item["indicator"] === selectedIndicator);

                populateDropdown("dataSource", [...new Set(indicatorData.map(item => item["Data Source"]))]);
                populateDropdown("dataSourceDetail", [...new Set(indicatorData.map(item => item["Data Source Detail"]))]);
                populateDropdown("region", [...new Set(indicatorData.map(item => item["Region"]))]);
                populateDropdown("facilityType", [...new Set(indicatorData.map(item => item["Facility Type"]))]);
                populateDropdown("administrationUnit", [...new Set(indicatorData.map(item => item["Administration Unit"]))]);
            }
        }

        // Draw the chart
        function drawChart(chartType, selectedIndicators, xAxis) {
            // Prepare chart data (average value instead of sum)
            let chartData = {};

            // Group data by selected xAxis option
            filteredData.forEach(item => {
                const key = getChartKey(xAxis, item);
                if (!chartData[key]) {
                    chartData[key] = { total: 0, count: 0 };
                }
                chartData[key].total += item["value"];
                chartData[key].count += 1;
            });

            // Calculate the average values
            const chartDataArray = Object.entries(chartData).map(([key, { total, count }]) => [key, total / count]);

            // Clear the previous chart
            document.getElementById("container").innerHTML = '';

            // Create a chart instance based on the selected chart type
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

            // Add data to the chart
            chart.data(chartDataArray);

            // Set chart title dynamically
            const chartTitle = selectedIndicators.length > 0 ? `Chart for ${selectedIndicators.join(", ")}` : "Indicators Chart";
            chart.title(chartTitle);

            // Set axis titles for non-pie charts
            if (chartType !== "pie") {
                chart.xAxis().title(xAxis === "year" ? "Years" : "Indicators");
                chart.yAxis().title("Average Values");
            }

            // Show legends and data labels
            chart.legend(true);
            chart.labels().enabled(true).format("{%value}");

            // Draw the chart
            chart.container("container");
            chart.draw();
        }

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
    </script>
</body>
</html>
