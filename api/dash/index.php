<?php
// index.php - Advanced Dynamic Data Visualization Dashboard
if (isset($_GET['getdashboards'])) {
    header('Content-Type: application/json');
    echo file_exists('hisdashboards.json') ? file_get_contents('hisdashboards.json') : json_encode([]);
    exit;
}

if (isset($_GET['api']) && $_GET['api'] == '1') {
    header('Content-Type: application/json');
    echo file_get_contents('./data/offline_hispmd_data.json');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'save_dashboard') {
        $dashboardName = $_POST['dashboard_name'] ?? 'dashboard_' . date('Ymd_His');
        $settings = json_decode($_POST['settings'], true);
        $dashboards = file_exists('hisdashboards.json') ? json_decode(file_get_contents('hisdashboards.json'), true) : [];
        $dashboards[$dashboardName] = $settings;
        file_put_contents('hisdashboards.json', json_encode($dashboards, JSON_PRETTY_PRINT));
        echo json_encode(['status' => 'success', 'message' => 'Dashboard saved successfully']);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Advanced Dashboard</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/dashboards.css">


    <!--
    <link rel="stylesheet" href="css/dashboards.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    -->
    <link rel="stylesheet" href="css/styles.css">



    <!-- Highcharts -->
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/sonification.js"></script>
    <script src="https://code.highcharts.com/maps/modules/data.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/maps/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/maps/modules/map.js"></script>
    <!-- Include Highcharts library -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- CUSTOMS -->
    <script src="js/highcharts.js"></script>
    <script src="js/highcharts-more.js"></script>
    <script src="js/exporting.js"></script>
    <script src="js/export-data.js"></script>
    <script src="js/accessibility.js"></script>
    <script src="js/maps/highmaps.js"></script>
    <script src="js/heatmap.js"></script>
    <script src="js/solid-gauge.js"></script>
    <script src="js/drilldown.js"></script>
    <script src="js/variable-pie.js"></script>
    <script src="js/series-label.js"></script>
    <script src="js/annotations.js"></script>
    <script src="js/item-series.js"></script>
    <script src="js/maps/exporting.js"></script>
    <script src="js/dashboards/dashboards.js"></script>
    <script src="js/dashboards/datagrid.js"></script>
    <script src="js/papaparse.min.js"></script>
    <script src="js/xlsx.full.min.js"></script>
    <script src="js/Sortable.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


    <!-- Include Highmaps (if you're using maps) 
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
-->
    <!-- Include Highcharts themes if using default themes
    <script src="https://code.highcharts.com/themes/dark-unica.js"></script>
     -->
</head>

<body>
    <div class="mobile-header d-lg-none">
        <button class="btn btn-outline-secondary" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <h5 class="mb-0">Dashboard</h5>

        <!--
        <div class="mobile-actions">
            <button class="btn btn-primary btn-sm" onclick="openAddChartModal()">
                <i class="fas fa-plus"></i>
            </button>
        </div>
-->
    </div>
    <!-- Theme Toggle -->
    <div class="theme-toggle">
        <button class="btn btn-primary rounded-circle p-2" onclick="toggleTheme()">
            <i class="fas fa-moon"></i>
        </button>
    </div>

    <!-- Sidebar -->
    <!-- Sidebar Navigation -->
    <nav class="sidebar">
        <div class="sidebar-header p-3 d-flex flex-column">
            <!-- Header with Collapse Toggle -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">
                    <i class="fas fa-chart-line me-2"></i>HISPMD
                </h4>
                <button class="btn btn-sm btn-outline-secondary toggle-sidebar" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Quick Actions Toolbar -->
            <div class="quick-actions mb-4">
                <div class="btn-group w-100 mb-2">
                    <button class="btn btn-primary flex-grow-1 text-start" title="Add Chart" onclick="openAddChartModal()">
                        <i class="fas fa-plus me-2"></i>New Chart
                    </button>
                </div>

                <div class="btn-toolbar justify-content-between">
                    <div class="btn-group">
                        <button class="btn btn-sm btn-success" title="Save Dashboard" onclick="openSaveDashboardModal()">
                            <i class="fas fa-save"></i>
                        </button>
                        <button class="btn btn-sm btn-secondary" title="Load Dashboard" onclick="openLoadDashboardModal()">
                            <i class="fas fa-folder-open"></i>
                        </button>
                    </div>
                    <button class="btn btn-sm btn-light" title="Reset Dashboard" onclick="resetDashboard()">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
            </div>

            <!-- Filter Search Box -->
            <div class="search-box mb-3">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control" id="filterSearch" placeholder="Search filters...">
                </div>
            </div>

            <!-- Filter Accordion -->
            <div class="filter-accordion accordion" id="filterAccordion">
                <!-- Indicator Group Filter -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filterIndicatorGroup">
                            <i class="fas fa-layer-group me-2"></i>Indicator Group
                        </button>
                    </h2>
                    <div id="filterIndicatorGroup" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                        <div class="accordion-body p-2">
                            <div class="filter-control">
                                <div class="filter-select" onclick="toggleOptions('indicatorGroupOptions')">
                                    <span id="indicatorGroupDisplay">All</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="filter-options" id="indicatorGroupOptions">
                                    <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('indicatorGroupOptions', this.value)">
                                    <div class="filter-option">
                                        <input type="checkbox" id="indicatorGroupAll" checked onclick="selectAll('indicatorGroup')">
                                        <label for="indicatorGroupAll">All</label>
                                    </div>
                                    <!-- Options populated by JavaScript -->
                                </div>
                                <div class="selected-tags" id="indicatorGroupTags"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Indicator Filter -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filterIndicator">
                            <i class="fas fa-chart-bar me-2"></i>Indicator
                        </button>
                    </h2>
                    <div id="filterIndicator" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                        <div class="accordion-body p-2">
                            <div class="filter-control">
                                <div class="filter-select" onclick="toggleOptions('indicatorOptions')">
                                    <span id="indicatorDisplay">All</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="filter-options" id="indicatorOptions">
                                    <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('indicatorOptions', this.value)">
                                    <div class="filter-option">
                                        <input type="checkbox" id="indicatorAll" checked onclick="selectAll('indicator')">
                                        <label for="indicatorAll">All</label>
                                    </div>
                                    <!-- Options populated by JavaScript -->
                                </div>
                                <div class="selected-tags" id="indicatorTags"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Source Filter -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filterDataSource">
                            <i class="fas fa-database me-2"></i>Data Source
                        </button>
                    </h2>
                    <div id="filterDataSource" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                        <div class="accordion-body p-2">
                            <div class="filter-control">
                                <div class="filter-select" onclick="toggleOptions('dataSourceOptions')">
                                    <span id="dataSourceDisplay">All</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="filter-options" id="dataSourceOptions">
                                    <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('dataSourceOptions', this.value)">
                                    <div class="filter-option">
                                        <input type="checkbox" id="dataSourceAll" checked onclick="selectAll('dataSource')">
                                        <label for="dataSourceAll">All</label>
                                    </div>
                                    <!-- Options populated by JavaScript -->
                                </div>
                                <div class="selected-tags" id="dataSourceTags"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Filters (collapsed by default) -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filterMoreOptions">
                            <i class="fas fa-sliders-h me-2"></i>More Filters
                        </button>
                    </h2>
                    <div id="filterMoreOptions" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                        <div class="accordion-body p-2">
                            <!-- Scope Filter -->
                            <div class="filter-group mb-3">
                                <label class="filter-label">Scope</label>
                                <div class="filter-control">
                                    <div class="filter-select" onclick="toggleOptions('scopeOptions')">
                                        <span id="scopeDisplay">All</span>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="filter-options" id="scopeOptions">
                                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('scopeOptions', this.value)">
                                        <div class="filter-option">
                                            <input type="checkbox" id="scopeAll" checked onclick="selectAll('scope')">
                                            <label for="scopeAll">All</label>
                                        </div>
                                        <!-- Options populated by JavaScript -->
                                    </div>
                                    <div class="selected-tags" id="scopeTags"></div>
                                </div>
                            </div>

                            <!-- Region Filter -->
                            <div class="filter-group mb-3">
                                <label class="filter-label">Region</label>
                                <div class="filter-control">
                                    <div class="filter-select" onclick="toggleOptions('regionOptions')">
                                        <span id="regionDisplay">All</span>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="filter-options" id="regionOptions">
                                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('regionOptions', this.value)">
                                        <div class="filter-option">
                                            <input type="checkbox" id="regionAll" checked onclick="selectAll('region')">
                                            <label for="regionAll">All</label>
                                        </div>
                                        <!-- Options populated by JavaScript -->
                                    </div>
                                    <div class="selected-tags" id="regionTags"></div>
                                </div>
                            </div>

                            <!-- Year Filter -->
                            <div class="filter-group">
                                <label class="filter-label">Year</label>
                                <div class="filter-control">
                                    <div class="filter-select" onclick="toggleOptions('yearOptions')">
                                        <span id="yearDisplay">All</span>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="filter-options" id="yearOptions">
                                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('yearOptions', this.value)">
                                        <div class="filter-option">
                                            <input type="checkbox" id="yearAll" checked onclick="selectAll('year')">
                                            <label for="yearAll">All</label>
                                        </div>
                                        <!-- Options populated by JavaScript -->
                                    </div>
                                    <div class="selected-tags" id="yearTags"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer mt-auto pt-3 border-top">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">v1.0.0</small>
                    <button class="btn btn-sm btn-outline-secondary" onclick="toggleTheme()">
                        <i class="fas fa-moon"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Header (shown only on small screens) -->
    <header class="mobile-header d-lg-none">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center py-2">
                <button class="btn btn-outline-secondary mobile-menu-toggle" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
                <i class="fas fa-chart-line me-2"></i>
                <h1 class="h5 mb-0">HISPMD</h1>

                <div class="btn-group">
                    <button class="btn btn-primary btn-sm" onclick="openAddChartModal()">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="btn btn-sm btn-success" title="Save Dashboard" onclick="openSaveDashboardModal()">
                        <i class="fas fa-save"></i>
                    </button>
                    <button class="btn btn-sm btn-secondary" title="Load Dashboard" onclick="openLoadDashboardModal()">
                        <i class="fas fa-folder-open"></i>
                    </button>
                    <button class="btn btn-sm btn-light" title="Reset Dashboard" onclick="resetDashboard()">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>


            </div>
        </div>
    </header>


    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="sticky-top bg-body border-bottom">
            <!--
        <div class="container-fluid d-flex justify-content-between align-items-center py-2">
                <h1 class="h4 mb-0">HISPMD - Dashboard Builder</h1>
                <button class="btn btn-primary" onclick="openAddChartModal()">
                    <i class="fas fa-plus"></i> New Chart
                </button>

-->
            <!--
            <div class="container-fluid py-2">
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-secondary me-3 d-lg-none" onclick="toggleSidebar()">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="flex-grow-1">
                        <h1 class="h4 mb-0">Advanced Data Visualization</h1>
                        <p class="text-muted mb-0">Interactive Analytics Platform</p>
                    </div>
                    <input type="file" id="fileInput" class="form-control w-auto">
                </div>
            </div>
-->
        </header>

        <!-- Dashboard -->
        <!-- Update your chart containers -->
        <br>
        <br>


        <div class="dashboard-container" id="dashboardContainer">
            <!-- Charts will be dynamically added here -->
        </div>

    </main>


    <br>
    </br>
    <br>
    </br>
    <br>
    </br>

    <div class="dashboard-footer">

        &copy; <?= date('Y') ?> HISPMD Advanced Dashboard | Powered by MERQ Consultancy
    </div>

    <!-- Add Chart Modal -->
    <div id="addChartModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addChartModal')">&times;</span>
            <h2>Add New Chart</h2>
            <div class="form-group">
                <label for="newChartTitle">Chart Title:</label>
                <input type="text" id="newChartTitle" class="form-control" placeholder="Enter chart title">
            </div>
            <div class="form-group">
                <label for="newChartType">Chart Type:</label>
                <select id="newChartType" class="form-control">
                    <option value="column">Column</option>
                    <option value="line">Line</option>
                    <option value="bar">Bar</option>
                    <option value="pie">Pie</option>
                    <option value="area">Area</option>
                    <option value="stackedColumn">Stacked Column</option>
                    <option value="radar">Radar</option>
                    <option value="gauge">Gauge</option>
                    <option value="singleValue">Single Value</option>
                    <option value="cumulative">Cumulative</option>
                    <option value="yearOverYear">Year over Year</option>
                    <option value="2category">2-Category</option>
                    <option value="combination">Combination</option>
                    <option value="pivot">Pivot</option>
                    <option value="geojson">Geo Map (Choropleth)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="newChartXAxis">X-Axis:</label>
                <select id="newChartXAxis" class="form-control">
                    <option value="Year">Year</option>
                    <option value="indicator">Indicator</option>
                    <option value="Region">Region</option>
                    <option value="Facility Type">Facility Type</option>
                    <option value="Data Source">Data Source</option>
                    <option value="Indicator Group">Indicator Group</option>
                    <option value="Data Source Detail">Data Source Detail</option>
                    <option value="Administration Unit">Administration Unit</option>
                    <option value="Scope">Scope</option>
                    <option value="Period Type">Period Type</option>
                </select>
            </div>
            <div class="form-group">
                <label for="newChartYAxis">Y-Axis Value:</label>
                <select id="newChartYAxis" class="form-control">
                    <option value="value">Value</option>
                    <option value="Target Value">Target Value</option>
                    <option value="Baseline Value">Baseline Value</option>
                </select>
            </div>

            <div class="form-group">
                <label>Chart Filters:</label>
                <div class="filter-group">
                    <label>Indicator Group:</label>
                    <div class="filter-select" onclick="toggleOptions('newChartIndicatorGroupOptions')">
                        <span id="newChartIndicatorGroupDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="newChartIndicatorGroupOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('newChartIndicatorGroupOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="newChartIndicatorGroupAll" checked onclick="selectAll('newChartIndicatorGroup', true)">
                            <label for="newChartIndicatorGroupAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="newChartIndicatorGroupTags"></div>
                </div>

                <div class="filter-group">
                    <label>Indicator:</label>
                    <div class="filter-select" onclick="toggleOptions('newChartIndicatorOptions')">
                        <span id="newChartIndicatorDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="newChartIndicatorOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('newChartIndicatorOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="newChartIndicatorAll" checked onclick="selectAll('newChartIndicator', true)">
                            <label for="newChartIndicatorAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="newChartIndicatorTags"></div>
                </div>

                <div class="filter-group">
                    <label>Data Source:</label>
                    <div class="filter-select" onclick="toggleOptions('newChartDataSourceOptions')">
                        <span id="newChartDataSourceDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="newChartDataSourceOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('newChartDataSourceOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="newChartDataSourceAll" checked onclick="selectAll('newChartDataSource', true)">
                            <label for="newChartDataSourceAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="newChartDataSourceTags"></div>
                </div>

                <!-- In Add Chart Modal, after Data Source filter group -->
                <div class="filter-group">
                    <label>Data Source Detail:</label>
                    <div class="filter-select" onclick="toggleOptions('newChartDataSourceDetailOptions')">
                        <span id="newChartDataSourceDetailDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="newChartDataSourceDetailOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('newChartDataSourceDetailOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="newChartDataSourceDetailAll" checked onclick="selectAll('newChartDataSourceDetail', true)">
                            <label for="newChartDataSourceDetailAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="newChartDataSourceDetailTags"></div>
                </div>
                <!-- End Add Chart Modal addition -->

                <div class="filter-group">
                    <label>Scope:</label>
                    <div class="filter-select" onclick="toggleOptions('newChartScopeOptions')">
                        <span id="newChartScopeDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="newChartScopeOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('newChartScopeOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="newChartScopeAll" checked onclick="selectAll('newChartScope', true)">
                            <label for="newChartScopeAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="newChartScopeTags"></div>
                </div>
                <div class="filter-group">
                    <label>Year:</label>
                    <div class="filter-select" onclick="toggleOptions('newChartYearOptions')">
                        <span id="newChartYearDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="newChartYearOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('newChartYearOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="newChartYearAll" checked onclick="selectAll('newChartYear', true)">
                            <label for="newChartYearAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="newChartYearTags"></div>
                </div>
            </div>

            <div class="chart-size-controls">
                <div class="chart-size-control">
                    <label>Width:</label>
                    <input type="number" id="newChartWidth" class="form-control" value="500" min="300" max="1200">
                    <span>px</span>
                </div>
                <div class="chart-size-control">
                    <label>Height:</label>
                    <input type="number" id="newChartHeight" class="form-control" value="400" min="200" max="800">
                    <span>px</span>
                </div>
            </div>

            <div class="display-options">
                <h4>Display Options:</h4>
                <div class="display-option">
                    <input type="checkbox" id="newChartShowLegend" checked>
                    <label for="newChartShowLegend">Show Legend</label>
                </div>
                <div class="display-option">
                    <input type="checkbox" id="newChartShowLabels" checked>
                    <label for="newChartShowLabels">Show Data Labels</label>
                </div>
                <div class="display-option">
                    <input type="checkbox" id="newChartShowTooltip" checked>
                    <label for="newChartShowTooltip">Show Tooltip with Details</label>
                </div>
            </div>

            <button class="btn btn-primary" onclick="addNewChart()" style="margin-top: 1em;">Add Chart</button>
        </div>
    </div>

    <!-- Edit Chart Modal -->
    <div id="editChartModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editChartModal')">&times;</span>
            <h2>Edit Chart</h2>
            <input type="hidden" id="editChartId">
            <div class="form-group">
                <label for="editChartTitle">Chart Title:</label>
                <input type="text" id="editChartTitle" class="form-control" placeholder="Enter chart title">
            </div>
            <div class="form-group">
                <label for="editChartType">Chart Type:</label>
                <select id="editChartType" class="form-control">
                    <option value="column">Column</option>
                    <option value="line">Line</option>
                    <option value="bar">Bar</option>
                    <option value="pie">Pie</option>
                    <option value="area">Area</option>
                    <option value="stackedColumn">Stacked Column</option>
                    <option value="radar">Radar</option>
                    <option value="gauge">Gauge</option>
                    <option value="singleValue">Single Value</option>
                    <option value="cumulative">Cumulative</option>
                    <option value="yearOverYear">Year over Year</option>
                    <option value="2category">2-Category</option>
                    <option value="combination">Combination</option>
                    <option value="pivot">Pivot</option>
                    <option value="geojson">Geo Map (Choropleth)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="editChartXAxis">X-Axis:</label>
                <select id="editChartXAxis" class="form-control">
                    <option value="Year">Year</option>
                    <option value="indicator">Indicator</option>
                    <option value="Region">Region</option>
                    <option value="Facility Type">Facility Type</option>
                    <option value="Data Source">Data Source</option>
                    <option value="Indicator Group">Indicator Group</option>
                    <option value="Data Source Detail">Data Source Detail</option>
                    <option value="Administration Unit">Administration Unit</option>
                    <option value="Scope">Scope</option>
                    <option value="Period Type">Period Type</option>
                </select>
            </div>
            <div class="form-group">
                <label for="editChartYAxis">Y-Axis Value:</label>
                <select id="editChartYAxis" class="form-control">
                    <option value="value">Value</option>
                    <option value="Target Value">Target Value</option>
                    <option value="Baseline Value">Baseline Value</option>
                </select>
            </div>

            <div class="form-group">
                <label>Chart Filters:</label>
                <div class="filter-group">
                    <label>Indicator Group:</label>
                    <div class="filter-select" onclick="toggleOptions('editChartIndicatorGroupOptions')">
                        <span id="editChartIndicatorGroupDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="editChartIndicatorGroupOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('editChartIndicatorGroupOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="editChartIndicatorGroupAll" checked onclick="selectAll('editChartIndicatorGroup', true)">
                            <label for="editChartIndicatorGroupAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="editChartIndicatorGroupTags"></div>
                </div>

                <div class="filter-group">
                    <label>Indicator:</label>
                    <div class="filter-select" onclick="toggleOptions('editChartIndicatorOptions')">
                        <span id="editChartIndicatorDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="editChartIndicatorOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('editChartIndicatorOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="editChartIndicatorAll" checked onclick="selectAll('editChartIndicator', true)">
                            <label for="editChartIndicatorAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="editChartIndicatorTags"></div>
                </div>

                <div class="filter-group">
                    <label>Data Source:</label>
                    <div class="filter-select" onclick="toggleOptions('editChartDataSourceOptions')">
                        <span id="editChartDataSourceDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="editChartDataSourceOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('editChartDataSourceOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="editChartDataSourceAll" checked onclick="selectAll('editChartDataSource', true)">
                            <label for="editChartDataSourceAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="editChartDataSourceTags"></div>
                </div>

                <!-- In Edit Chart Modal, after Data Source filter group -->
                <div class="filter-group">
                    <label>Data Source Detail:</label>
                    <div class="filter-select" onclick="toggleOptions('editChartDataSourceDetailOptions')">
                        <span id="editChartDataSourceDetailDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="editChartDataSourceDetailOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('editChartDataSourceDetailOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="editChartDataSourceDetailAll" checked onclick="selectAll('editChartDataSourceDetail', true)">
                            <label for="editChartDataSourceDetailAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="editChartDataSourceDetailTags"></div>
                </div>
                <!-- End Edit Chart Modal addition -->

                <div class="filter-group">
                    <label>Scope:</label>
                    <div class="filter-select" onclick="toggleOptions('editChartScopeOptions')">
                        <span id="editChartScopeDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="editChartScopeOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('editChartScopeOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="editChartScopeAll" checked onclick="selectAll('editChartScope', true)">
                            <label for="editChartScopeAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="editChartScopeTags"></div>
                </div>
                <div class="filter-group">
                    <label>Year:</label>
                    <div class="filter-select" onclick="toggleOptions('editChartYearOptions')">
                        <span id="editChartYearDisplay">All</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="filter-options" id="editChartYearOptions">
                        <input type="text" class="filter-search" placeholder="Search..." oninput="filterOptions('editChartYearOptions', this.value)">
                        <div class="filter-option">
                            <input type="checkbox" id="editChartYearAll" checked onclick="selectAll('editChartYear', true)">
                            <label for="editChartYearAll">All</label>
                        </div>
                    </div>
                    <div class="multi-select-display" id="editChartYearTags"></div>
                </div>
            </div>

            <div class="chart-size-controls">
                <div class="chart-size-control">
                    <label>Width:</label>
                    <input type="number" id="editChartWidth" class="form-control" value="500" min="300" max="1200">
                    <span>px</span>
                </div>
                <div class="chart-size-control">
                    <label>Height:</label>
                    <input type="number" id="editChartHeight" class="form-control" value="400" min="200" max="800">
                    <span>px</span>
                </div>
            </div>

            <div class="display-options">
                <h4>Display Options:</h4>
                <div class="display-option">
                    <input type="checkbox" id="editChartShowLegend">
                    <label for="editChartShowLegend">Show Legend</label>
                </div>
                <div class="display-option">
                    <input type="checkbox" id="editChartShowLabels">
                    <label for="editChartShowLabels">Show Data Labels</label>
                </div>
                <div class="display-option">
                    <input type="checkbox" id="editChartShowTooltip">
                    <label for="editChartShowTooltip">Show Tooltip with Details</label>
                </div>
            </div>

            <button class="btn btn-primary" onclick="updateChart()" style="margin-top: 1em;">Update Chart</button>
        </div>
    </div>

    <!-- Save Dashboard Modal -->
    <div id="saveDashboardModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('saveDashboardModal')">&times;</span>
            <h2>Save Dashboard</h2>
            <div class="form-group">
                <label for="dashboardName">Dashboard Name:</label>
                <input type="text" id="dashboardName" class="form-control" placeholder="Enter dashboard name">
            </div>
            <button class="btn btn-primary" onclick="saveDashboard()">Save</button>
        </div>
    </div>

    <!-- Load Dashboard Modal -->
    <div id="loadDashboardModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loadDashboardModal')">&times;</span>
            <h2>Load Dashboard</h2>
            <div class="dashboard-list" id="dashboardList">
                <!-- Dashboards will be listed here -->
            </div>
            <button class="btn btn-primary" onclick="loadSelectedDashboard()" style="margin-top: 1em;">Load Selected</button>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    <script>
    </script>

    <!-- JavaScript code for chart handling -->
    <script src="js/scripts.js"></script>
    <!-- JavaScript code for custom interactive app scripts handling -->
    <script src="js/app.js"></script>
    <script>
        // Initialize the dashboard application
        const dashboardApp = new DashboardApp();

        // Expose necessary methods to global scope
        window.toggleTheme = () => dashboardApp.toggleTheme();
        window.toggleSidebar = () => dashboardApp.toggleSidebar();
    </script>
</body>

</html>