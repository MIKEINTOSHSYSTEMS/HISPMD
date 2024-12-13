<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Chart</title>
    <script src="../script/visualization_bundle.min.js"></script>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Menu Styles */
        #sidebar {
            width: 250px;
            background: linear-gradient(145deg, #2f4f4f, #3e6060);
            color: #fff;
            padding: 30px 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
        }

        #sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li {
            margin: 15px 0;
        }

        #sidebar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        #sidebar ul li a:hover {
            background-color: #4c6f6f;
            transform: translateX(10px);
        }

        /* Main Content Styles */
        #main-content {
            margin-left: 250px;
            padding: 30px;
            width: calc(100% - 250px);
            overflow-y: auto;
            background-color: #fff;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 30px;
            font-weight: 700;
            color: #333;
        }

        /* Filters Section */
        .filters {
            margin-bottom: 40px;
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .filters select,
        .filters label {
            font-size: 16px;
            padding: 8px;
            margin: 8px 0;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ddd;
            background-color: #fff;
            transition: border-color 0.3s ease;
        }

        .filters select:focus,
        .filters label:focus {
            border-color: #4c6f6f;
        }

        .filters label {
            font-weight: 600;
            color: #333;
        }

        /* Chart Container */
        #container {
            width: 100%;
            height: 500px;
            margin-top: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Section Visibility */
        .section {
            display: none;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            #sidebar {
                width: 200px;
                padding: 20px;
            }

            #main-content {
                margin-left: 200px;
                padding: 15px;
            }

            #sidebar ul li a {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            #sidebar {
                width: 150px;
            }

            #main-content {
                margin-left: 150px;
            }

            .filters {
                padding: 15px;
            }

            .filters select,
            .filters label {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Menu -->
    <div id="sidebar">
        <h2>Dashboard Menu</h2>
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
            
            <!-- Filters -->
            <div class="filters">
                <label for="chartType">Chart Type:</label>
                <select id="chartType" onchange="applyFilters()">
                    <option value="column">Column</option>
                    <option value="bar">Bar</option>
                    <option value="line">Line</option>
                    <option value="area">Area</option>
                    <option value="pie">Pie</option>
                </select>

                <label for="indicatorGroup">Indicator Group:</label>
                <select id="indicatorGroup" onchange="applyFilters()"></select>

                <label for="indicator">Indicator(s):</label>
                <select id="indicator" onchange="applyFilters()" multiple></select>

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
            const administrationUnit = document.getElementById("administrationUnit").value;
            const facilityType = document.getElementById("facilityType").value;

            // Filter the raw data based on selected filters
            filteredData = rawData.filter(item => {
                return (
                    (!indicatorGroup || item["Indicator Group"] === indicatorGroup) &&
                    (selectedIndicators.length === 0 || selectedIndicators.includes(item["indicator"])) &&
                    (!dataSource || item["Data Source"] === dataSource) &&
                    (!dataSourceDetail || item["Data Source Detail"] === dataSourceDetail) &&
                    (!scope || item["Scope"] === scope) &&
                    (!region || item["Region"] === region) &&
                    (!facilityType || item["Facility Type"] === facilityType) &&
                    (!administrationUnit || item["Administration Unit"] === administrationUnit)
                );
            });

            // Update chart based on filtered data
            updateChart(chartType, filteredData);
        }

        // Update chart with new data
        function updateChart(chartType, data) {
            const ctx = document.getElementById("container").getContext("2d");
            const chartData = {
                labels: [...new Set(data.map(item => item["Year"]))],
                datasets: [{
                    data: data.map(item => item["Value"]),
                    backgroundColor: chartType === "pie" ? "#71a7f9" : undefined,
                    borderColor: "#6c8efb",
                    borderWidth: 1
                }]
            };

            new Chart(ctx, {
                type: chartType,
                data: chartData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: "top"
                        }
                    }
                }
            });
        }

        // Show section
        function showSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = section.id === sectionId ? 'block' : 'none';
            });
        }
    </script>
</body>
</html>
