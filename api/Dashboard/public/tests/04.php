<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Chart</title>
    <!--
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-bundle.min.js"></script>
    -->

    <script src="../script/visualization_bundle.min.js">

        </script>

</head>
<body>
    <h2>Filtered Chart with Data from API</h2>
    
    <!-- Filters -->
    <div>
        <label for="chartType">Chart Type:</label>
        <select id="chartType" onchange="applyFilters()">
            <option value="column">Column</option>
            <option value="bar">Bar</option>
            <option value="line">Line</option>
            <option value="area">Area</option>
            <option value="pie">Pie</option>
        </select>
        <br>

        <label for="indicatorGroup">Indicator Group:</label>
        <select id="indicatorGroup" onchange="applyFilters()"></select>

        <label for="indicator">Indicator:</label>
        <select id="indicator" onchange="applyFilters()"></select>

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
    </div>

    <!-- Chart Container -->
    <div id="container" style="width: 100%; height: 500px; margin-top: 20px;"></div>

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
            const indicator = document.getElementById("indicator").value;
            const dataSource = document.getElementById("dataSource").value;
            const dataSourceDetail = document.getElementById("dataSourceDetail").value;
            const scope = document.getElementById("scope").value;
            const region = document.getElementById("region").value;
            const administrationUnit = document.getElementById("administrationUnit").value;

            // Filter data based on selected values
            filteredData = rawData.filter(item => 
                (indicatorGroup === "" || item["Indicator Group"] === indicatorGroup) &&
                (indicator === "" || item["indicator"] === indicator) &&
                (dataSource === "" || item["Data Source"] === dataSource) &&
                (dataSourceDetail === "" || item["Data Source Detail"] === dataSourceDetail) &&
                (scope === "" || item["Scope"] === scope) &&
                (region === "" || item["Region"] === region) &&
                (administrationUnit === "" || item["Administration Unit"] === administrationUnit)
            );

            drawChart(chartType, indicator); // Update chart with filtered data
        }

        // Draw the chart
        function drawChart(chartType, selectedIndicator) {
            // Prepare chart data
            const chartData = filteredData.reduce((acc, item) => {
                const year = item["Year"];
                const value = item["value"];
                if (!acc[year]) acc[year] = 0; // Initialize year if not present
                acc[year] += value; // Sum values by year
                return acc;
            }, {});

            const chartDataArray = Object.entries(chartData).map(([year, value]) => [year, value]);

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
            const chartTitle = selectedIndicator ? `Chart for ${selectedIndicator}` : "Filtered Chart";
            chart.title(chartTitle);

            // Set axis titles for non-pie charts
            if (chartType !== "pie") {
                chart.xAxis().title("Years");
                chart.yAxis().title("Values");
            }

            // Show legends and data labels
            chart.legend(true);
            chart.labels().enabled(true).format("{%value}");

            // Draw the chart
            chart.container("container");
            chart.draw();
        }
    </script>
</body>
</html>
