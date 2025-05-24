<?php
// Add Chart Modal
?>
<div class="modal fade" id="addChartModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Chart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addChartForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newChartTitle" class="form-label">Chart Title</label>
                                <input type="text" class="form-control" id="newChartTitle" placeholder="Enter chart title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newChartType" class="form-label">Chart Type</label>
                                <select class="form-select" id="newChartType">
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newChartXAxis" class="form-label">X-Axis</label>
                                <select class="form-select" id="newChartXAxis">
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
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newChartYAxis" class="form-label">Y-Axis Value</label>
                                <select class="form-select" id="newChartYAxis">
                                    <option value="value">Value</option>
                                    <option value="Target Value">Target Value</option>
                                    <option value="Baseline Value">Baseline Value</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chart Filters</label>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newChartIndicatorGroup" class="form-label">Indicator Group</label>
                                            <select class="form-select filter-select" id="newChartIndicatorGroup" multiple>
                                                <!-- Options will be populated by JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newChartIndicator" class="form-label">Indicator</label>
                                            <select class="form-select filter-select" id="newChartIndicator" multiple>
                                                <!-- Options will be populated by JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newChartDataSource" class="form-label">Data Source</label>
                                            <select class="form-select filter-select" id="newChartDataSource" multiple>
                                                <!-- Options will be populated by JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newChartDataSourceDetail" class="form-label">Data Source Detail</label>
                                            <select class="form-select filter-select" id="newChartDataSourceDetail" multiple>
                                                <!-- Options will be populated by JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newChartScope" class="form-label">Scope</label>
                                            <select class="form-select filter-select" id="newChartScope" multiple>
                                                <!-- Options will be populated by JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newChartYear" class="form-label">Year</label>
                                            <select class="form-select filter-select" id="newChartYear" multiple>
                                                <!-- Options will be populated by JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newChartWidth" class="form-label">Width (px)</label>
                                <input type="number" class="form-control" id="newChartWidth" value="500" min="300" max="1200">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newChartHeight" class="form-label">Height (px)</label>
                                <input type="number" class="form-control" id="newChartHeight" value="400" min="200" max="800">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Display Options</label>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="newChartShowLegend" checked>
                                    <label class="form-check-label" for="newChartShowLegend">Show Legend</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="newChartShowLabels" checked>
                                    <label class="form-check-label" for="newChartShowLabels">Show Data Labels</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="newChartShowTooltip" checked>
                                    <label class="form-check-label" for="newChartShowTooltip">Show Tooltip with Details</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addNewChart()">Add Chart</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Chart Modal -->
<div class="modal fade" id="editChartModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Chart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editChartForm">
                    <input type="hidden" id="editChartId">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editChartTitle" class="form-label">Chart Title</label>
                                <input type="text" class="form-control" id="editChartTitle" placeholder="Enter chart title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editChartType" class="form-label">Chart Type</label>
                                <select class="form-select" id="editChartType">
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editChartXAxis" class="form-label">X-Axis</label>
                                <select class="form-select" id="editChartXAxis">
                                    <option value="Year">Year</option>
                                    <option value="indicator">Indicator</option>
                                    <option value="Region">Region</option>
                                    <option value="Facility Type">Facility Type</option>
                                    <option value="Data Source">Data Source</option>
                                    <option value="Indicator Group">Indicator Group</option>
                                    <option value="Data Source Detail">Data Source Detail</option>
                                    <option value="Administration Unit">Administ
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