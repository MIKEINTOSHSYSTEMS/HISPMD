<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Chart & Visualization Builder</title>
    <script src="./public/script/anychart-ui.min.js"></script>  
    <script src="./public/script/visualization_bundle.min.js"></script>
    <script src="./public/script/main.js"></script>
    <link rel="stylesheet" href="./public/style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/style/anychart-ui.min.css">
    <!--
    
    <link rel="stylesheet" type="text/css" href="./public/style/anychart-font.min.css"/>
    -->
    
    <!--
    <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.13.0/css/anychart-ui.min.css">
    -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.anychart.com/releases/8.13.0/fonts/css/anychart-font.min.css"/>
    <!-- -->
            
</head>
<body>
<button id="toggle-menu" aria-label="Toggle menu">☰</button>
<div id="sidebar" class="sidebar">
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
<div id="main-content" class="main-content">
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
     </script>
</body>
</html>
