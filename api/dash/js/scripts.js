document.addEventListener('DOMContentLoaded', function () {
    // Close modals when clicking outside
    document.addEventListener('click', function (event) {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
});

// Global variables
let rawData = [];
let filteredData = [];
let selectedFilters = {
    indicatorGroup: [],
    indicator: [],
    dataSource: [],
    scope: [],
    region: [],
    adminUnit: [],
    facilityType: [],
    dataSourceDetail: [],
    periodType: [],
    year: []
};
let currentCharts = [];
let dashboardSettings = {};
let chartFilters = {};

// Initialize dashboard
document.addEventListener('DOMContentLoaded', function () {
    fetchData();
    initializeSortable();
    initializeChartFilterOptions();
});

// Initialize sortable for charts
function initializeSortable() {
    new Sortable(document.getElementById('dashboardContainer'), {
        animation: 150,
        ghostClass: 'ghost',
        onEnd: function () {
            updateChartOrder();
        }
    });
}

const regionNameMapping = {
    'Addis Ababa': 'Addis Ababa',
    'Afar': 'Afar',
    'Amhara': 'Amhara',
    'benishangul-gumuz': 'Benishangul Gumuz',
    'dire dawa': 'Dire Dawa',
    'gambela': 'Gambela',
    'harari': 'Harari',
    'oromia': 'Oromia',
    'sidama': 'Sidama',
    'somali': 'Somali',
    'south west ethiopia peoples': 'South West Ethiopia Peoples',
    'southern nations, nationalities, and peoples': 'Southern Nations, Nationalities, and Peoples',
    'tigray': 'Tigray',
    'Addis Ababa City Administration': 'Addis Ababa',
    'Afar Region': 'Afar',
    'Amhara Region': 'Amhara',
    'Benishangul Gumuz Region': 'Benishangul-Gumuz',
    'Central Ethiopia region': 'Central Ethiopia',
    'Dire Dawa City Administration': 'Dire Dawa',
    'Gambella Region': 'Gambela',
    'Harari Region': 'Harari',
    'Oromia Region': 'Oromia',
    'Sidama Region': 'Sidama',
    'Somali Region': 'Somali',
    'South West Ethiopia Region': 'South West Ethiopia',
    'South Ethiopia Region': 'Southern Nations, Nationalities, and Peoples',
    'Tigray Region': 'Tigray',
    // Add any other regional variations you might encounter
    'south west ethiopia': 'South West Ethiopia Peoples',
    'snnpr': 'Southern Nations, Nationalities, and Peoples',
    'addis ababa': 'Addis Ababa',
    'afar': 'Afar',
    'amhara': 'Amhara',
    'benishangul gumuz': 'Benishangul Gumuz',
    'dire dawa': 'Dire Dawa',
    'gambela': 'Gambela',
    'harari': 'Harari',
    'oromia': 'Oromia',
    'sidama': 'Sidama',
    'somali': 'Somali',
    'south west ethiopia peoples': 'South West Ethiopia Peoples',
    'southern nations, nationalities, and peoples': 'Southern Nations, Nationalities, and Peoples',
    'tigray': 'Tigray',
    'addis ababa city administration': 'Addis Ababa',
    'afar region': 'Afar',
    'amhara region': 'Amhara',
    'benishangul gumuz region': 'Benishangul Gumuz',
    'central ethiopia region': 'Central Ethiopia',
    'dire dawa city administration': 'Dire Dawa',
    'gambella region': 'Gambela',
    'harari region': 'Harari',
    'oromia region': 'Oromia',
    'sidama region': 'Sidama',
    'somali region': 'Somali',
    'south west ethiopia region': 'South West Ethiopia',
    'south ethiopia region': 'Southern Nations, Nationalities, and Peoples',
    'tigray region': 'Tigray',
    'south west ethiopia': 'South West Ethiopia Peoples',
    'snnpr': 'Southern Nations, Nationalities, and Peoples'
};

// Initialize chart filter options
function initializeChartFilterOptions() {
    const filterGroups = [
        'indicatorGroup', 'indicator', 'dataSource', 'scope',
        'region', 'adminUnit', 'facilityType', 'dataSourceDetail', 'periodType', 'year'
    ];

    filterGroups.forEach(group => {
        // For add chart modal
        const newChartGroup = 'newChart' + group.charAt(0).toUpperCase() + group.slice(1);
        chartFilters[newChartGroup] = [];

        // For edit chart modal
        const editChartGroup = 'editChart' + group.charAt(0).toUpperCase() + group.slice(1);
        chartFilters[editChartGroup] = [];
    });

    // Add region filter specifically for map charts
    chartFilters.newChartRegion = [];
    chartFilters.editChartRegion = [];
}

// Update chart order in settings
function updateChartOrder() {
    const container = document.getElementById('dashboardContainer');
    const chartIds = Array.from(container.children).map(el => el.id.replace('chart-', ''));
    dashboardSettings.chartOrder = chartIds;
    saveDashboardSettings();
}

// Fetch data from API
async function fetchData() {
    try {
        const res = await fetch('?api=1');
        rawData = await res.json();

        // Convert year values to strings for consistent filtering
        rawData.forEach(item => {
            if (item.Year) item.Year = item.Year.toString();
        });

        filteredData = rawData;
        populateFilters();
        populateChartFilterOptions();
        renderAllCharts();
    } catch (error) {
        console.error('Error fetching data:', error);
        alert('Failed to fetch data. Please try again.');
    }
}

// Populate all filter dropdowns
function populateFilters() {
    // Get unique values for each filter
    const indicatorGroups = [...new Set(rawData.map(d => d['Indicator Group']))].filter(Boolean);
    const indicators = [...new Set(rawData.map(d => d.indicator))].filter(Boolean);
    const dataSources = [...new Set(rawData.map(d => d['Data Source']))].filter(Boolean);
    const scopes = [...new Set(rawData.map(d => d.Scope))].filter(Boolean);
    const regions = [...new Set(rawData.map(d => d.Region))].filter(Boolean);
    const adminUnits = [...new Set(rawData.map(d => d['Administration Unit']))].filter(Boolean);
    const facilityTypes = [...new Set(rawData.map(d => d['Facility Type']))].filter(Boolean);
    const dataSourceDetails = [...new Set(rawData.map(d => d['Data Source Detail']))].filter(Boolean);
    const periodTypes = [...new Set(rawData.map(d => d['Period Type']))].filter(Boolean);
    const years = [...new Set(rawData.map(d => d.Year))].filter(Boolean).sort();

    // Populate filter options
    populateFilterOptions('indicatorGroup', indicatorGroups);
    populateFilterOptions('indicator', indicators);
    populateFilterOptions('dataSource', dataSources);
    populateFilterOptions('scope', scopes);
    populateFilterOptions('region', regions);
    populateFilterOptions('adminUnit', adminUnits);
    populateFilterOptions('facilityType', facilityTypes);
    populateFilterOptions('dataSourceDetail', dataSourceDetails);
    populateFilterOptions('periodType', periodTypes);
    populateFilterOptions('year', years);

    // Set default selected filters to "All"
    Object.keys(selectedFilters).forEach(filter => {
        selectedFilters[filter] = [];
        updateFilterDisplay(filter);
    });
}

// Populate chart filter options (for add/edit chart modals)
function populateChartFilterOptions() {
    // For add chart modal
    const indicatorGroups = [...new Set(rawData.map(d => d['Indicator Group']))].filter(Boolean);
    populateFilterOptions('newChartIndicatorGroup', indicatorGroups);

    // For edit chart modal
    populateFilterOptions('editChartIndicatorGroup', indicatorGroups);

    const dataSourceDetails = [...new Set(rawData.map(d => d['Data Source Detail']))].filter(Boolean);
    populateFilterOptions('newChartDataSourceDetail', dataSourceDetails);
    populateFilterOptions('editChartDataSourceDetail', dataSourceDetails);

}

// Populate options for a specific filter
function populateFilterOptions(filterId, values) {
    const optionsContainer = document.getElementById(`${filterId}Options`);
    if (!optionsContainer) return;

    const allOption = optionsContainer.querySelector(`#${filterId}All`);

    // Clear existing options (except "All")
    while (optionsContainer.children.length > 1) {
        optionsContainer.removeChild(optionsContainer.lastChild);
    }

    // Add new options
    values.forEach(value => {
        const option = document.createElement('div');
        option.className = 'filter-option';
        option.innerHTML = `
            <input type="checkbox" id="${filterId}_${value.replace(/[^a-zA-Z0-9]/g, '_')}" value="${value}" 
                   onclick="updateFilterSelection('${filterId}', '${value.replace(/'/g, "\\'")}', ${filterId.startsWith('newChart') || filterId.startsWith('editChart')})">
            <label for="${filterId}_${value.replace(/[^a-zA-Z0-9]/g, '_')}">${value}</label>
        `;
        optionsContainer.appendChild(option);
    });
}

// Toggle filter options visibility
function toggleOptions(optionId) {
    const options = document.getElementById(optionId);
    options.classList.toggle('show');

    // Close other open options
    document.querySelectorAll('.filter-options').forEach(opt => {
        if (opt.id !== optionId && opt.classList.contains('show')) {
            opt.classList.remove('show');
        }
    });
}

// Close all filter options
function closeAllOptions() {
    document.querySelectorAll('.filter-options').forEach(opt => {
        opt.classList.remove('show');
    });
}

// Click handler for document to close options when clicking outside
document.addEventListener('click', function (e) {
    if (!e.target.closest('.filter-select') && !e.target.closest('.filter-options')) {
        closeAllOptions();
    }
});

// Filter options based on search input
function filterOptions(containerId, searchText) {
    const container = document.getElementById(containerId);
    if (!container) return;

    const options = container.querySelectorAll('.filter-option');
    const search = searchText.toLowerCase();

    options.forEach(option => {
        const text = option.textContent.toLowerCase();
        if (text.includes(search)) {
            option.style.display = 'flex';
        } else {
            option.style.display = 'none';
        }
    });
}

// Select all options for a filter
function selectAll(filterId, isChartFilter = false) {
    const allCheckbox = document.getElementById(`${filterId}All`);
    const options = document.getElementById(`${filterId}Options`);
    const checkboxes = options.querySelectorAll('input[type="checkbox"]:not(#${filterId}All)');

    checkboxes.forEach(checkbox => {
        checkbox.checked = allCheckbox.checked;
        const value = checkbox.value;

        if (isChartFilter) {
            const filterKey = filterId.startsWith('newChart') ?
                filterId.replace('newChart', '').toLowerCase() :
                filterId.startsWith('editChart') ?
                    filterId.replace('editChart', '').toLowerCase() : filterId;

            if (allCheckbox.checked) {
                if (!chartFilters[filterId].includes(value)) {
                    chartFilters[filterId].push(value);
                }
            } else {
                chartFilters[filterId] = chartFilters[filterId].filter(v => v !== value);
            }
        } else {
            if (allCheckbox.checked) {
                if (!selectedFilters[filterId].includes(value)) {
                    selectedFilters[filterId].push(value);
                }
            } else {
                selectedFilters[filterId] = selectedFilters[filterId].filter(v => v !== value);
            }
        }
    });

    updateFilterDisplay(filterId, isChartFilter);

    if (!isChartFilter) {
        filterData();
    } else {
        updateDependentChartFilters(filterId);
    }
}

// Update filter selection
function updateFilterSelection(filterId, value, isChartFilter = false) {
    const checkbox = document.querySelector(`#${filterId}Options input[value="${value.replace(/\\'/g, "'")}"]`);
    if (!checkbox) return;

    const filterKey = isChartFilter ?
        (filterId.startsWith('newChart') ? filterId.replace('newChart', '').toLowerCase() :
            filterId.startsWith('editChart') ? filterId.replace('editChart', '').toLowerCase() : filterId) :
        filterId;

    const filterObject = isChartFilter ? chartFilters : selectedFilters;

    if (checkbox.checked) {
        if (!filterObject[filterId].includes(value)) {
            filterObject[filterId].push(value);
        }
    } else {
        filterObject[filterId] = filterObject[filterId].filter(v => v !== value);
        // Uncheck "All" if any option is unchecked
        const allCheckbox = document.getElementById(`${filterId}All`);
        if (allCheckbox) allCheckbox.checked = false;
    }

    updateFilterDisplay(filterId, isChartFilter);

    if (!isChartFilter) {
        filterData();
    } else {
        updateDependentChartFilters(filterId);
    }
}

// Update dependent chart filters when a parent filter changes
function updateDependentChartFilters(filterId, resetChildren = true) {
    const isNewChart = filterId.startsWith('newChart');
    const prefix = isNewChart ? 'newChart' : 'editChart';

    // Get the current data based on global filters
    let currentData = filteredData;

    if (filterId === `${prefix}IndicatorGroup`) {
        // Update indicators based on selected indicator groups
        const selectedGroups = chartFilters[filterId];

        let filteredIndicators = [];
        if (selectedGroups.length === 0) {
            // If no groups selected, show all indicators
            filteredIndicators = [...new Set(currentData.map(d => d.indicator))].filter(Boolean);
        } else {
            // Filter indicators by selected groups
            filteredIndicators = [...new Set(
                currentData.filter(d => selectedGroups.includes(d['Indicator Group']))
                    .map(d => d.indicator)
            )].filter(Boolean);
        }

        // Update indicator options
        populateFilterOptions(`${prefix}Indicator`, filteredIndicators);

        if (resetChildren) {
            // Reset indicator selection
            chartFilters[`${prefix}Indicator`] = [];
            document.getElementById(`${prefix}IndicatorAll`).checked = true;
            updateFilterDisplay(`${prefix}Indicator`, true);

            // Reset all dependent filters
            chartFilters[`${prefix}DataSource`] = [];
            document.getElementById(`${prefix}DataSourceAll`).checked = true;
            updateFilterDisplay(`${prefix}DataSource`, true);

            chartFilters[`${prefix}Scope`] = [];
            document.getElementById(`${prefix}ScopeAll`).checked = true;
            updateFilterDisplay(`${prefix}Scope`, true);

            chartFilters[`${prefix}Year`] = [];
            document.getElementById(`${prefix}YearAll`).checked = true;
            updateFilterDisplay(`${prefix}Year`, true);
        }
    }

    if (filterId === `${prefix}Indicator`) {
        // Update data sources based on selected indicators
        const selectedIndicators = chartFilters[filterId];

        let filteredDataSources = [];
        if (selectedIndicators.length === 0) {
            // If no indicators selected, show all data sources
            filteredDataSources = [...new Set(currentData.map(d => d['Data Source']))].filter(Boolean);
        } else {
            // Filter data sources by selected indicators
            filteredDataSources = [...new Set(
                currentData.filter(d => selectedIndicators.includes(d.indicator))
                    .map(d => d['Data Source'])
            )].filter(Boolean);
        }

        // Update data source options
        populateFilterOptions(`${prefix}DataSource`, filteredDataSources);

        if (resetChildren) {
            // Reset data source selection
            chartFilters[`${prefix}DataSource`] = [];
            document.getElementById(`${prefix}DataSourceAll`).checked = true;
            updateFilterDisplay(`${prefix}DataSource`, true);

            // Reset all dependent filters
            chartFilters[`${prefix}Scope`] = [];
            document.getElementById(`${prefix}ScopeAll`).checked = true;
            updateFilterDisplay(`${prefix}Scope`, true);

            chartFilters[`${prefix}Year`] = [];
            document.getElementById(`${prefix}YearAll`).checked = true;
            updateFilterDisplay(`${prefix}Year`, true);
        }
    }

    if (filterId === `${prefix}DataSource`) {
        // Update scopes based on selected data sources
        const selectedDataSources = chartFilters[filterId];

        let filteredScopes = [];
        if (selectedDataSources.length === 0) {
            // If no data sources selected, show all scopes
            filteredScopes = [...new Set(currentData.map(d => d.Scope))].filter(Boolean);
        } else {
            // Filter scopes by selected data sources
            filteredScopes = [...new Set(
                currentData.filter(d => selectedDataSources.includes(d['Data Source']))
                    .map(d => d.Scope)
            )].filter(Boolean);
        }

        // Update scope options
        populateFilterOptions(`${prefix}Scope`, filteredScopes);

        if (resetChildren) {
            // Reset scope selection
            chartFilters[`${prefix}Scope`] = [];
            document.getElementById(`${prefix}ScopeAll`).checked = true;
            updateFilterDisplay(`${prefix}Scope`, true);

            // Reset year filter
            chartFilters[`${prefix}Year`] = [];
            document.getElementById(`${prefix}YearAll`).checked = true;
            updateFilterDisplay(`${prefix}Year`, true);
        }
    }

    if (filterId === `${prefix}Scope`) {
        // Update years based on selected scopes
        const selectedScopes = chartFilters[filterId];

        let filteredYears = [];
        if (selectedScopes.length === 0) {
            // If no scopes selected, show all years
            filteredYears = [...new Set(currentData.map(d => d.Year))].filter(Boolean).sort();
        } else {
            // Filter years by selected scopes
            filteredYears = [...new Set(
                currentData.filter(d => selectedScopes.includes(d.Scope))
                    .map(d => d.Year)
            )].filter(Boolean).sort();
        }

        // Update year options
        populateFilterOptions(`${prefix}Year`, filteredYears);

        if (resetChildren) {
            // Reset year selection
            chartFilters[`${prefix}Year`] = [];
            document.getElementById(`${prefix}YearAll`).checked = true;
            updateFilterDisplay(`${prefix}Year`, true);
        }
    }
}

// Update filter display (selected tags and summary)
function updateFilterDisplay(filterId, isChartFilter = false) {
    const displayElement = document.getElementById(`${filterId}Display`);
    const tagsContainer = document.getElementById(`${filterId}Tags`);

    if (!displayElement || !tagsContainer) return;

    const selectedValues = isChartFilter ? chartFilters[filterId] : selectedFilters[filterId];
    const checkboxes = document.querySelectorAll(`#${filterId}Options input:not(#${filterId}All)`);

    if (selectedValues.length === 0 || selectedValues.length === checkboxes.length) {
        displayElement.textContent = 'All';
        tagsContainer.innerHTML = '';
    } else {
        displayElement.textContent = `${selectedValues.length} selected`;

        // Update tags
        tagsContainer.innerHTML = '';
        selectedValues.forEach(value => {
            const tag = document.createElement('div');
            tag.className = 'selected-tag';
            tag.innerHTML = `${value} <i class="fas fa-times" onclick="removeFilterTag('${filterId}', '${value.replace(/'/g, "\\'")}', ${isChartFilter})"></i>`;
            tagsContainer.appendChild(tag);
        });
    }
}

// Remove a filter tag
function removeFilterTag(filterId, value, isChartFilter = false) {
    const filterObject = isChartFilter ? chartFilters : selectedFilters;

    filterObject[filterId] = filterObject[filterId].filter(v => v !== value);
    const checkbox = document.querySelector(`#${filterId}Options input[value="${value.replace(/\\'/g, "'")}"]`);
    if (checkbox) checkbox.checked = false;

    // Check if all options are now unselected
    const checkboxes = document.querySelectorAll(`#${filterId}Options input:not(#${filterId}All)`);
    const allUnchecked = Array.from(checkboxes).every(cb => !cb.checked);

    if (allUnchecked && checkboxes.length > 0) {
        const allCheckbox = document.getElementById(`${filterId}All`);
        if (allCheckbox) allCheckbox.checked = false;
    }

    updateFilterDisplay(filterId, isChartFilter);

    if (isChartFilter) {
        updateDependentChartFilters(filterId);
    } else {
        filterData();
    }
}

// Filter data based on selected filters
function filterData() {
    filteredData = rawData.filter(d => {
        return (
            (selectedFilters.indicatorGroup.length === 0 || selectedFilters.indicatorGroup.includes(d['Indicator Group'])) &&
            (selectedFilters.indicator.length === 0 || selectedFilters.indicator.includes(d.indicator)) &&
            (selectedFilters.dataSource.length === 0 || selectedFilters.dataSource.includes(d['Data Source'])) &&
            (selectedFilters.scope.length === 0 || selectedFilters.scope.includes(d.Scope)) &&
            (selectedFilters.region.length === 0 || selectedFilters.region.includes(d.Region)) &&
            (selectedFilters.adminUnit.length === 0 || selectedFilters.adminUnit.includes(d['Administration Unit'])) &&
            (selectedFilters.facilityType.length === 0 || selectedFilters.facilityType.includes(d['Facility Type'])) &&
            (selectedFilters.dataSourceDetail.length === 0 || selectedFilters.dataSourceDetail.includes(d['Data Source Detail'])) &&
            (selectedFilters.periodType.length === 0 || selectedFilters.periodType.includes(d['Period Type'])) &&
            (selectedFilters.year.length === 0 || selectedFilters.year.includes(d.Year))
        );
    });

    // Update dependent filters based on current selections
    updateDependentFilters();

    // Re-render all charts with the new filtered data
    renderAllCharts();
}

// Update dependent filters based on current selections
function updateDependentFilters() {
    // Get current filtered data
    let currentData = rawData;

    // Apply non-dependent filters first
    currentData = currentData.filter(d => {
        return (
            (selectedFilters.region.length === 0 || selectedFilters.region.includes(d.Region)) &&
            (selectedFilters.adminUnit.length === 0 || selectedFilters.adminUnit.includes(d['Administration Unit'])) &&
            (selectedFilters.facilityType.length === 0 || selectedFilters.facilityType.includes(d['Facility Type'])) &&
            (selectedFilters.dataSourceDetail.length === 0 || selectedFilters.dataSourceDetail.includes(d['Data Source Detail'])) &&
            (selectedFilters.periodType.length === 0 || selectedFilters.periodType.includes(d['Period Type'])) &&
            (selectedFilters.year.length === 0 || selectedFilters.year.includes(d.Year))
        );
    });

    // Update indicator groups
    const indicatorGroups = [...new Set(currentData.map(d => d['Indicator Group']))].filter(Boolean);
    populateFilterOptions('indicatorGroup', indicatorGroups);

    // Update indicators based on selected indicator groups
    if (selectedFilters.indicatorGroup.length > 0) {
        currentData = currentData.filter(d => selectedFilters.indicatorGroup.includes(d['Indicator Group']));
    }

    const indicators = [...new Set(currentData.map(d => d.indicator))].filter(Boolean);
    populateFilterOptions('indicator', indicators);

    // Update data sources based on selected indicators
    if (selectedFilters.indicator.length > 0) {
        currentData = currentData.filter(d => selectedFilters.indicator.includes(d.indicator));
    }

    const dataSources = [...new Set(currentData.map(d => d['Data Source']))].filter(Boolean);
    populateFilterOptions('dataSource', dataSources);

    // Update scopes based on selected data sources
    if (selectedFilters.dataSource.length > 0) {
        currentData = currentData.filter(d => selectedFilters.dataSource.includes(d['Data Source']));
    }

    const scopes = [...new Set(currentData.map(d => d.Scope))].filter(Boolean);
    populateFilterOptions('scope', scopes);

    // Update years based on selected scopes
    if (selectedFilters.scope.length > 0) {
        currentData = currentData.filter(d => selectedFilters.scope.includes(d.Scope));
    }

    const years = [...new Set(currentData.map(d => d.Year))].filter(Boolean).sort();
    populateFilterOptions('year', years);
}

// Reset all filters
/*
function resetFilters() {
    Object.keys(selectedFilters).forEach(filterId => {
        selectedFilters[filterId] = [];
        const allCheckbox = document.getElementById(`${filterId}All`);
        const optionsContainer = document.getElementById(`${filterId}Options`);

        if (allCheckbox && optionsContainer) {
            allCheckbox.checked = true;
            const checkboxes = optionsContainer.querySelectorAll(`input:not(#${filterId}All)`);
            checkboxes.forEach(cb => cb.checked = false);
            updateFilterDisplay(filterId);
        }
    });

    filterData();
}
*/

function resetFilters() {
    Object.keys(selectedFilters).forEach(filterId => {
        selectedFilters[filterId] = [];
        const allCheckbox = document.getElementById(`${filterId}All`);
        const optionsContainer = document.getElementById(`${filterId}Options`);
        const tagsContainer = document.getElementById(`${filterId}Tags`);
        const displayElement = document.getElementById(`${filterId}Display`);

        if (allCheckbox) allCheckbox.checked = true;
        if (optionsContainer) {
            const checkboxes = optionsContainer.querySelectorAll(`input:not(#${filterId}All)`);
            checkboxes.forEach(cb => cb.checked = false);
        }
        if (tagsContainer) tagsContainer.innerHTML = '';
        if (displayElement) displayElement.textContent = 'All';
    });

    filterData();
}

// Reset entire dashboard
/*
function resetDashboard() {
    resetFilters();
    currentCharts = [];
    document.getElementById('dashboardContainer').innerHTML = '';
    dashboardSettings = {};
}


function resetDashboard() {
    resetFilters();
    currentCharts = [];
    document.getElementById('dashboardContainer').innerHTML = '';
    dashboardSettings = {};
    renderAllCharts(); // Ensure UI is updated after reset
}

function resetDashboard() {
    resetFilters();
    currentCharts = [];
    document.getElementById('dashboardContainer').innerHTML = `
        <div class="text-center text-muted" style="padding:2em;">
            No charts added. Click "Add Chart" to get started.
        </div>
    `;
    dashboardSettings = {};
}
*/

function resetDashboard() {
    resetFilters();
    currentCharts = [];
    dashboardSettings = {};
    const dashboardContainer = document.getElementById('dashboardContainer');
    if (dashboardContainer) {
        dashboardContainer.innerHTML = `
        <div class="empty-state" align="center">
            <p></p>
            <p></p>
                <i class="fa fa-bar-chart fa-5x" aria-hidden="true"></i>
                <h4>No charts added yet</h4>
                <p>Click "Add Chart" to start building your dashboard</p>
                <button class="btn btn-primary" onclick="openAddChartModal()">
                    <i class="bi bi-plus-circle"></i> Add Chart
                </button>
            </div>
        `;
    }
}


// Add this function for resizing charts
function initializeResizableCharts() {
    const charts = document.querySelectorAll('.chart-box');

    charts.forEach(chart => {
        // Remove existing resize handle if it exists
        const existingHandle = chart.querySelector('.resize-handle');
        if (existingHandle) {
            chart.removeChild(existingHandle);
        }

        // Create new resize handle in bottom right corner
        const resizeHandle = document.createElement('div');
        resizeHandle.className = 'resize-handle';
        resizeHandle.innerHTML = '<i class="fas fa-arrows-alt"></i>';
        chart.appendChild(resizeHandle);

        let isResizing = false;
        let startX, startY, startWidth, startHeight;

        resizeHandle.addEventListener('mousedown', function (e) {
            isResizing = true;
            startX = e.clientX;
            startY = e.clientY;
            startWidth = parseInt(document.defaultView.getComputedStyle(chart).width, 10);
            startHeight = parseInt(document.defaultView.getComputedStyle(chart).height, 10);
            e.preventDefault();
            e.stopPropagation();
        });

        document.addEventListener('mousemove', function (e) {
            if (!isResizing) return;

            const chartId = chart.id.replace('chart-', '');
            const chartConfig = currentCharts.find(c => c.id.toString() === chartId);
            if (!chartConfig) return;

            const width = startWidth + (e.clientX - startX);
            const height = startHeight + (e.clientY - startY);

            // Apply minimum and maximum sizes
            const newWidth = Math.max(300, Math.min(1200, width));
            const newHeight = Math.max(200, Math.min(800, height));

            chart.style.width = newWidth + 'px';
            chart.querySelector('.chart-container').style.height = newHeight + 'px';

            // Update chart config
            chartConfig.width = newWidth;
            chartConfig.height = newHeight;

            // Re-render chart with new dimensions
            renderChart(chartConfig);
        });

        document.addEventListener('mouseup', function () {
            isResizing = false;
            updateDashboardSettings();
        });
    });
}

// Render all charts in the dashboard
function renderAllCharts() {
    currentCharts.forEach(chartConfig => {
        renderChart(chartConfig);
    });
    initializeResizableCharts();
}

// Render a specific chart
function renderChart(chartConfig) {
    const chartContainer = document.getElementById(`chart-${chartConfig.id}`);
    if (!chartContainer) return;

    const chartElement = chartContainer.querySelector('.chart-container');
    if (!chartElement) return;

    // Destroy existing chart instance before rendering new one
    if (chartElement.highcharts) {
        chartElement.highcharts.destroy();
    }

    // Start with globally filtered data
    let chartData = filteredData;

    // Apply chart-specific filters on top of global filters
    if (chartConfig.filters) {
        chartData = chartData.filter(d => {
            return (
                (chartConfig.filters.indicatorGroup.length === 0 || chartConfig.filters.indicatorGroup.includes(d['Indicator Group'])) &&
                (chartConfig.filters.indicator.length === 0 || chartConfig.filters.indicator.includes(d.indicator)) &&
                (chartConfig.filters.dataSource.length === 0 || chartConfig.filters.dataSource.includes(d['Data Source'])) &&
                (chartConfig.filters.scope.length === 0 || chartConfig.filters.scope.includes(d.Scope))
            );
        });
    } else {
        chartData = filteredData;
    }

    if (!chartData.length) {
        chartElement.innerHTML = '<p>No data available for selected filters.</p>';
        return;
    }

    const xAxisField = chartConfig.xAxis || 'Year';
    const yAxisField = chartConfig.yAxis || 'value';
    const chartType = chartConfig.type || 'column';

    // Set chart container size
    if (chartConfig.width) {
        chartContainer.style.width = `${chartConfig.width}px`;
    }
    if (chartConfig.height) {
        chartElement.style.height = `${chartConfig.height}px`;
    }

    // Prepare data based on chart type
    let seriesData = [];
    let categories = [];

    if (chartType === 'pie') {
        seriesData = [{
            name: yAxisField,
            colorByPoint: true,
            data: chartData.map(d => ({
                name: d[xAxisField],
                y: Number(d[yAxisField])
            }))
        }];

        // Pie chart options with animation and data labels
        const chartOptions = {
            chart: {
                type: 'pie',
                height: chartConfig.height || 400,
                animation: {
                    duration: 1200,
                    easing: 'easeOutBounce'
                }
            },
            title: {
                text: chartConfig.title || 'Pie Chart'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    animation: {
                        duration: 1200,
                        easing: 'easeOutBounce'
                    },
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y:.2f}',
                        style: {
                            fontSize: '1.1em',
                            fontWeight: 'bold'
                        }
                    },
                    showInLegend: true
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:.2f}</b>'
            },
            series: seriesData,
            legend: {
                enabled: chartConfig.showLegend !== false
            }
        };

        Highcharts.chart(chartElement, chartOptions);
        return;
    }else if (chartType === 'gauge') {
        // Show first value as gauge
        const val = Number(chartData[0][yAxisField]);
        Highcharts.chart(chartElement, {
            chart: {
                type: 'solidgauge',
                height: chartConfig.height || 400
            },
            title: {
                text: chartConfig.title || chartData[0].indicator
            },
            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: chartData[0]['Data Representation'] || 'Value'
                },
                stops: [
                    [0.1, '#DF5353'],
                    [0.5, '#DDDF0D'],
                    [0.9, '#55BF3B']
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                labels: {
                    y: 16
                }
            },
            series: [{
                name: yAxisField,
                data: [val],
                dataLabels: {
                    format: `<div style="text-align:center"><span style="font-size:25px">{y}</span><br/>
                                     <span style="font-size:12px;opacity:0.4">${chartData[0]['Data Representation'] || 'Value'}</span></div>`
                }
            }]
        });
        return;
    } else if (chartType === 'radar') {
        // Radar chart
        const indicators = [...new Set(chartData.map(d => d[xAxisField]))];
        seriesData = [{
            name: yAxisField,
            data: indicators.map(ind => {
                const found = chartData.find(d => d[xAxisField] === ind);
                return found ? Number(found[yAxisField]) : 0;
            }),
            pointPlacement: 'on'
        }];

        Highcharts.chart(chartElement, {
            chart: {
                polar: true,
                type: 'line',
                height: chartConfig.height || 400
            },
            title: {
                text: chartConfig.title || 'Radar Chart'
            },
            xAxis: {
                categories: indicators,
                tickmarkPlacement: 'on',
                lineWidth: 0
            },
            yAxis: {
                gridLineInterpolation: 'polygon',
                min: 0
            },
            series: seriesData
        });
        return;
    } else if (chartType === 'singleValue') {
        // Show single value
        chartElement.innerHTML = `
                    <div style="font-size:3em;text-align:center;padding:2em;">${chartData[0][yAxisField]}</div>
                    <div style="text-align:center;">${chartConfig.title || chartData[0].indicator}</div>
                `;
        return;
        // In your renderChart function, update the geojson chart type case:
    } else if (chartType === 'geojson') {
        // Show loading state
        chartElement.innerHTML = '<div class="text-center p-4">Loading map data...</div>';
    
        // Helper function to standardize region names
        const standardizeRegionName = (name) => {
            if (!name) return null;
            const lowerName = name.toLowerCase().trim();
            return regionNameMapping[lowerName] || name;
        };
    
        // First load the GeoJSON data
        fetch('./global/ethiopia_regions.json')
            .then(response => {
                if (!response.ok) throw new Error('Failed to load map data');
                return response.json();
            })
            .then(geojson => {
                // Process the chart data to aggregate by region
                const regionDataMap = {};
    
                chartData.forEach(item => {
                    if (!item.Region) return;
    
                    const region = standardizeRegionName(item.Region);
                    if (!region) return;
    
                    const value = parseFloat(item[yAxisField]) || 0;
    
                    if (!regionDataMap[region]) {
                        regionDataMap[region] = {
                            sum: 0,
                            count: 0,
                            dataPoints: []
                        };
                    }
    
                    regionDataMap[region].sum += value;
                    regionDataMap[region].count++;
                    regionDataMap[region].dataPoints.push(item);
                });
    
                // Prepare the data for Highmaps
                const mapSeriesData = [];
                const allValues = [];
    
                Object.keys(regionDataMap).forEach(region => {
                    const avgValue = regionDataMap[region].sum / regionDataMap[region].count;
                    allValues.push(avgValue);
    
                    // Find the matching feature in GeoJSON
                    const feature = geojson.features.find(f =>
                        standardizeRegionName(f.properties.shapeName) === region
                    );
    
                    if (feature) {
                        mapSeriesData.push({
                            'hc-key': feature.properties.pcode.toLowerCase(),
                            'name': region,
                            'value': avgValue,
                            'dataPoints': regionDataMap[region].dataPoints
                        });
                    }
                });
    
                // Calculate min and max for color axis
                const minValue = Math.min(...allValues);
                const maxValue = Math.max(...allValues);
    
                // Color palettes
                const colorPalettes = {
                    "Viridis": ['#440154', '#482878', '#3e4989', '#31688e', '#26828e',
                        '#1f9e89', '#35b779', '#6ece58', '#b5de2b', '#fde725'],
                    "Plasma": ['#0d0887', '#46039f', '#7201a8', '#9c179e', '#bd3786',
                        '#d8576b', '#ed7953', '#fb9f3a', '#fdca26', '#f0f921'],
                    "Inferno": ['#000004', '#1b0c41', '#4a0c6b', '#781c6d', '#a52c60',
                        '#cf4446', '#ed6925', '#fb9b06', '#f7d13d', '#fcffa4'],
                    "Magma": ['#000004', '#180f3d', '#440f76', '#721f81', '#9e2f7f',
                        '#cd4071', '#f1605d', '#fd9668', '#feca8d', '#fcfdbf'],
                    "Cividis": ['#00204d', '#123570', '#3b496c', '#575d6d', '#707173',
                        '#8a8778', '#a69d75', '#c6b467', '#e5cb54', '#ffe945'],
                    "Rocket": ['#03051a', '#1a1a3a', '#3a225f', '#5e2a82', '#8b2f9a',
                        '#bb3b80', '#e05759', '#f7843d', '#fbbd3b', '#f6f5b7'],
                    "Mako": ['#0b0405', '#1b1934', '#222a5e', '#1d3e6e', '#145773',
                        '#1b726f', '#2d8c66', '#5da75e', '#a3c55b', '#f3e55c'],
                    "Turbo": ['#30123b', '#4145ab', '#4675ed', '#39a2fc', '#1bcfd4',
                        '#24eca6', '#61fc6c', '#a4fc3b', '#d1e834', '#faba39']
                };
    
                // Theme options
                const themeOptions = {
                    "Default": null,
                    "Dark Unica": Highcharts.themes && Highcharts.themes.darkunica,
                    "Grid Light": Highcharts.themes && Highcharts.themes.gridlight,
                    "Sand Signika": Highcharts.themes && Highcharts.themes.sandsignika,
                    "Hand Drawn": Highcharts.themes && Highcharts.themes.handdrawn,
                    "Chalk": Highcharts.themes && Highcharts.themes.chalk
                };
    
                // Create the map chart
                const createMap = (paletteName = "Viridis", themeName = "Default") => {
                    // Clear previous chart if exists
                    if (chartElement.highcharts) {
                        chartElement.highcharts.destroy();
                    }
    
                    // Clear previous controls if they exist
                    const existingControls = chartContainer.querySelector('.map-controls');
                    if (existingControls) {
                        existingControls.remove();
                    }
    
                    // Create controls container
                    const controlsContainer = document.createElement('div');
                    controlsContainer.className = 'map-controls';
    
                    // Create palette selector
                    const paletteSelect = document.createElement('select');
                    paletteSelect.className = 'form-control';
                    paletteSelect.style.width = '120px';
                    Object.keys(colorPalettes).forEach(palette => {
                        const option = document.createElement('option');
                        option.value = palette;
                        option.textContent = palette;
                        option.selected = palette === paletteName;
                        paletteSelect.appendChild(option);
                    });
    
                    // Create theme selector
                    const themeSelect = document.createElement('select');
                    themeSelect.className = 'form-control';
                    themeSelect.style.width = '150px';
                    Object.keys(themeOptions).forEach(theme => {
                        const option = document.createElement('option');
                        option.value = theme;
                        option.textContent = theme;
                        option.selected = theme === themeName;
                        themeSelect.appendChild(option);
                    });
    
                    controlsContainer.appendChild(paletteSelect);
                    controlsContainer.appendChild(themeSelect);
    
                    // Insert controls before the chart container
                    chartContainer.insertBefore(controlsContainer, chartElement);
    
                    // Apply selected palette
                    const selectedPalette = colorPalettes[paletteName] || colorPalettes["Viridis"];
    
                    // Create chart options
                    const chartOptions = {
                        chart: {
                            map: geojson,
                            height: chartConfig.height || 500,
                            backgroundColor: 'transparent',
                            events: {
                                load: function() {
                                    const chart = this;
                                    window.addEventListener('resize', function() {
                                        chart.reflow();
                                    });
                                }
                            }
                        },
                        title: {
                            text: chartConfig.title || 'Regional Data Visualization',
                            style: {
                                color: '#333',
                                fontSize: '16px'
                            }
                        },
                        mapNavigation: {
                            enabled: true,
                            enableDoubleClickZoomTo: true,
                            enableMouseWheelZoom: true,
                            buttonOptions: {
                                verticalAlign: 'bottom',
                                theme: {
                                    fill: 'white',
                                    stroke: '#ccc',
                                    'stroke-width': 1,
                                    r: 2,
                                    style: {
                                        color: '#333'
                                    },
                                    states: {
                                        hover: {
                                            fill: '#f0f0f0'
                                        },
                                        select: {
                                            fill: '#e0e0e0',
                                            stroke: '#bbb'
                                        }
                                    }
                                }
                            }
                        },
                        colorAxis: {
                            min: minValue,
                            max: maxValue,
                            type: 'linear',
                            stops: selectedPalette.map((color, i) => [i / (selectedPalette.length - 1), color]),
                            labels: {
                                style: {
                                    color: '#333'
                                }
                            }
                        },
                        legend: {
                            title: {
                                text: yAxisField,
                                style: {
                                    color: '#333'
                                }
                            },
                            backgroundColor: 'rgba(255, 255, 255, 0.8)',
                            borderColor: '#ccc',
                            borderWidth: 1,
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'middle',
                                                    verticalAlign: 'middle',
                            floating: true,
                            itemStyle: {
                                color: '#333'
                            },
                            itemHoverStyle: {
                                color: '#000'
                            }
                        },
                        tooltip: {
                            useHTML: true,
                            formatter: function () {
                                const regionName = this.point.name || this.point['hc-key'];
                                const value = this.point.value.toFixed(2);
                                let tooltip = `<div style="min-width:250px;padding:5px">`;
                                tooltip += `<b>${regionName}</b><br>`;
                                tooltip += `<b>Average ${yAxisField}:</b> ${value}<br><br>`;
    
                                if (this.point.dataPoints && this.point.dataPoints.length > 0) {
                                    tooltip += `<b>Data Points:</b><br>`;
                                    this.point.dataPoints.slice(0, 5).forEach(dp => {
                                        tooltip += `• ${dp.indicator}: ${dp[yAxisField]}<br>`;
                                    });
                                    if (this.point.dataPoints.length > 5) {
                                        tooltip += `...and ${this.point.dataPoints.length - 5} more`;
                                    }
                                }
    
                                tooltip += `</div>`;
                                return tooltip;
                            },
                            backgroundColor: 'rgba(255, 255, 255, 0.95)',
                            borderColor: '#ccc',
                            borderRadius: 5,
                            shadow: true,
                            style: {
                                color: '#333'
                            }
                        },
                        series: [{
                            name: yAxisField,
                            data: mapSeriesData,
                            joinBy: ['hc-key', 'hc-key'],
                            states: {
                                hover: {
                                    color: '#BADA55',
                                    borderColor: '#333',
                                    brightness: 0
                                }
                            },
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}',
                                style: {
                                    color: '#333',
                                    textOutline: 'none',
                                    fontWeight: 'bold'
                                }
                            },
                            borderWidth: 2,
                            borderColor: '#000',
                            nullColor: '#e0e0e0'  // Color for regions with no data
                        }],
                        credits: {
                            enabled: false
                        }
                    };
    
                    // Apply theme if selected and available
                    if (themeName !== "Default" && themeOptions[themeName]) {
                        Highcharts.setOptions(themeOptions[themeName]);
                    } else {
                        // Reset to default theme
                        Highcharts.setOptions({
                            colors: ['#7cb5ec', '#434348', '#90ed7d', '#f7a35c', '#8085e9',
                                '#f15c80', '#e4d354', '#2b908f', '#f45b5b', '#91e8e1'],
                            chart: {
                                backgroundColor: 'transparent'
                            },
                            title: {
                                style: {
                                    color: '#333',
                                    fontSize: '16px'
                                }
                            }
                        });
                    }
    
                    // Create the chart
                    const chart = Highcharts.mapChart(chartElement, chartOptions);
    
                    // Add event listeners for controls
                    paletteSelect.addEventListener('change', function () {
                        const newPalette = colorPalettes[this.value] || colorPalettes["Viridis"];
                        chart.update({
                            colorAxis: {
                                stops: newPalette.map((color, i) => [i / (newPalette.length - 1), color])
                            }
                        });
                    });
    
                    themeSelect.addEventListener('change', function () {
                        createMap(paletteSelect.value, this.value);
                    });
                };
    
                // Initialize with default palette and theme
                createMap("Viridis", "Default");
            })
            .catch(error => {
                console.error('Error loading map data:', error);
                chartElement.innerHTML = `
                    <div class="alert alert-danger">
                        Failed to load map: ${error.message}<br>
                        <small>Please check the GeoJSON file path and format</small>
                    </div>
                `;
            });
        return;
    }  else {
        // For column/line/bar/area/stackedColumn etc.
        categories = [...new Set(chartData.map(d => d[xAxisField]))].sort();

        // Group data by series (if needed)
        if (chartType === 'stackedColumn' || chartType === 'combination') {
            const seriesFields = [...new Set(chartData.map(d => d.indicator))];
            seriesData = seriesFields.map(field => ({
                name: field,
                data: categories.map(cat => {
                    const item = chartData.find(d => d[xAxisField] === cat && d.indicator === field);
                    return item ? Number(item[yAxisField]) : null;
                })
            }));
        } else {
            seriesData = [{
                name: yAxisField,
                data: categories.map(cat => {
                    const item = chartData.find(d => d[xAxisField] === cat);
                    return item ? Number(item[yAxisField]) : null;
                })
            }];
        }
    }

    // Stacked column options
    let plotOptions = {};
    if (chartType === 'stackedColumn') {
        plotOptions = {
            series: {
                stacking: 'normal'
            }
        };
    }

    // Combination chart options
    if (chartType === 'combination') {
        plotOptions = {
            series: {
                stacking: 'normal'
            }
        };

        // Make some series line type
        seriesData.forEach((series, i) => {
            if (i % 2 === 0) {
                series.type = 'line';
                series.marker = {
                    symbol: 'circle'
                };
            }
        });
    }

    // Create the chart
    const chartOptions = {
        chart: {
            type: chartType === 'stackedColumn' ? 'column' : chartType === 'combination' ? 'column' : chartType,
            height: chartConfig.height || 400
        },
        title: {
            text: chartConfig.title || 'Data Visualization'
        },
        xAxis: {
            categories: categories,
            title: {
                text: xAxisField
            }
        },
        yAxis: {
            title: {
                text: yAxisField
            }
        },
        plotOptions: plotOptions,
        series: seriesData,
        tooltip: {
            shared: true,
            useHTML: true,
            headerFormat: '<table><tr><th colspan="2">{point.key}</th></tr>',
            pointFormat: '<tr><td style="color: {series.color}">{series.name} ' +
                '</td>' +
                '<td style="text-align: right"><b> {point.y}</b></td></tr>',
                //'<td style="text-align: right"><b> : {point.y}</b></td></tr>',
            footerFormat: '</table>',
            valueDecimals: 2
        },
        legend: {
            enabled: chartConfig.showLegend !== false && seriesData.length > 1
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: chartConfig.showLabels !== false
                }
            }
        }
    };

    // For combination charts, add the series types
    if (chartType === 'combination') {
        chartOptions.plotOptions.series = {
            stacking: undefined
        };

        seriesData.forEach((series, i) => {
            if (i % 2 === 0) {
                chartOptions.series[i].type = 'line';
                chartOptions.series[i].yAxis = 0;
            } else {
                chartOptions.series[i].type = 'column';
                chartOptions.series[i].yAxis = 1;
            }
        });

        chartOptions.yAxis = [{
            title: {
                text: 'Line Series'
            }
        }, {
            title: {
                text: 'Column Series'
            },
            opposite: true
        }];
    }

    Highcharts.chart(chartElement, chartOptions);
}

// Helper function to generate tooltip content
function generateTooltipContent(data) {
    return `
        <div style="min-width: 250px">
            <b>${data[xAxisField] || data.Year || 'Data Point'}</b><br>
            <b>Value:</b> ${data.value}<br>
            ${generateTooltipDetails(data)}
        </div>
    `;
}

// Helper function to generate tooltip details
function generateTooltipDetails(data) {
    return `
        ${data['Indicator Group'] ? `<b>Indicator Group:</b> ${data['Indicator Group']}<br>` : ''}
        ${data.indicator ? `<b>Indicator:</b> ${data.indicator}<br>` : ''}
        ${data['Data Source'] ? `<b>Data Source:</b> ${data['Data Source']}<br>` : ''}
        ${data['Data Source Detail'] ? `<b>Data Source Detail:</b> ${data['Data Source Detail']}<br>` : ''}
        ${data.Scope ? `<b>Scope:</b> ${data.Scope}<br>` : ''}
        ${data.Region ? `<b>Region:</b> ${data.Region}<br>` : ''}
        ${data['Administration Unit'] ? `<b>Admin Unit:</b> ${data['Administration Unit']}<br>` : ''}
        ${data['Facility Type'] ? `<b>Facility Type:</b> ${data['Facility Type']}<br>` : ''}
        ${data['Period Type'] ? `<b>Period Type:</b> ${data['Period Type']}<br>` : ''}
        ${data.Year ? `<b>Year:</b> ${data.Year}<br>` : ''}
    `;
}


// Export chart
function exportChart(chartId, type) {
    const chart = Highcharts.charts.find(c => c && c.renderTo.id === `chart-${chartId}-container`);
    if (!chart) return;

    if (type === 'png') chart.exportChart({
        type: 'image/png'
    });
    else if (type === 'pdf') chart.exportChart({
        type: 'application/pdf'
    });
    else if (type === 'xlsx') chart.downloadXLS();
    else if (type === 'json') {
        const chartConfig = currentCharts.find(c => c.id.toString() === chartId);
        let chartData = rawData;

        if (chartConfig && chartConfig.filters) {
            chartData = rawData.filter(d => {
                return (
                    (!chartConfig.filters.indicatorGroup || chartConfig.filters.indicatorGroup.length === 0 ||
                        chartConfig.filters.indicatorGroup.includes(d['Indicator Group'])) &&
                    (!chartConfig.filters.indicator || chartConfig.filters.indicator.length === 0 ||
                        chartConfig.filters.indicator.includes(d.indicator)) &&
                    (!chartConfig.filters.dataSource || chartConfig.filters.dataSource.length === 0 ||
                        chartConfig.filters.dataSource.includes(d['Data Source'])) &&
                    (!chartConfig.filters.scope || chartConfig.filters.scope.length === 0 ||
                        chartConfig.filters.scope.includes(d.Scope))
                );
            });
        }

        const data = JSON.stringify(chartData, null, 2);
        const blob = new Blob([data], {
            type: "application/json"
        });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'chart_data.json';
        a.click();
        URL.revokeObjectURL(url);
    }
}

// File upload handler
document.getElementById('fileInput').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (!file) return;

    const ext = file.name.split('.').pop().toLowerCase();
    if (ext === 'csv') {
        Papa.parse(file, {
            header: true,
            complete: function (results) {
                rawData = results.data;
                filteredData = rawData;
                populateFilters();
                populateChartFilterOptions();
                renderAllCharts();
            }
        });
    } else if (ext === 'xlsx') {
        const reader = new FileReader();
        reader.onload = function (e) {
            const data = new Uint8Array(e.target.result);
            const workbook = XLSX.read(data, {
                type: 'array'
            });
            const sheet = workbook.Sheets[workbook.SheetNames[0]];
            rawData = XLSX.utils.sheet_to_json(sheet);
            filteredData = rawData;
            populateFilters();
            populateChartFilterOptions();
            renderAllCharts();
        };
        reader.readAsArrayBuffer(file);
    } else if (ext === 'json' || ext === 'geojson') {
        const reader = new FileReader();
        reader.onload = function (e) {
            rawData = JSON.parse(e.target.result);
            filteredData = rawData;
            populateFilters();
            populateChartFilterOptions();
            renderAllCharts();
        };
        reader.readAsText(file);
    }
});

// Modal functions
function openAddChartModal() {
    // Reset chart filters
    const chartFilterGroups = [
        'newChartIndicatorGroup', 'newChartIndicator',
        'newChartDataSource', 'newChartScope', 'newChartYear'
    ];

    chartFilterGroups.forEach(filterId => {
        chartFilters[filterId] = [];
        const allCheckbox = document.getElementById(`${filterId}All`);
        if (allCheckbox) allCheckbox.checked = true;

        const checkboxes = document.querySelectorAll(`#${filterId}Options input:not(#${filterId}All)`);
        checkboxes.forEach(cb => cb.checked = false);

        updateFilterDisplay(filterId, true);
    });

    // Reset form fields
    document.getElementById('newChartTitle').value = '';
    document.getElementById('newChartType').value = 'column';
    document.getElementById('newChartXAxis').value = 'Year';
    document.getElementById('newChartYAxis').value = 'value';
    document.getElementById('newChartWidth').value = '500';
    document.getElementById('newChartHeight').value = '400';
    document.getElementById('newChartShowLegend').checked = true;
    document.getElementById('newChartShowLabels').checked = true;
    document.getElementById('newChartShowTooltip').checked = true;

    document.getElementById('addChartModal').style.display = 'block';
}

function openEditChartModal(chartId) {
    const chartConfig = currentCharts.find(c => c.id.toString() === chartId);
    if (!chartConfig) return;

    // Set form fields
    document.getElementById('editChartId').value = chartId;
    document.getElementById('editChartTitle').value = chartConfig.title || '';
    document.getElementById('editChartType').value = chartConfig.type || 'column';
    document.getElementById('editChartXAxis').value = chartConfig.xAxis || 'Year';
    document.getElementById('editChartYAxis').value = chartConfig.yAxis || 'value';
    document.getElementById('editChartWidth').value = chartConfig.width || '500';
    document.getElementById('editChartHeight').value = chartConfig.height || '400';
    document.getElementById('editChartShowLegend').checked = chartConfig.showLegend !== false;
    document.getElementById('editChartShowLabels').checked = chartConfig.showLabels !== false;
    document.getElementById('editChartShowTooltip').checked = chartConfig.showTooltip !== false;

    // Set chart filters
    if (chartConfig.filters) {
        Object.keys(chartConfig.filters).forEach(filterKey => {
            const filterId = 'editChart' + filterKey.charAt(0).toUpperCase() + filterKey.slice(1);
            chartFilters[filterId] = chartConfig.filters[filterKey] || [];

            // Update checkboxes
            const allCheckbox = document.getElementById(`${filterId}All`);
            const checkboxes = document.querySelectorAll(`#${filterId}Options input:not(#${filterId}All)`);

            if (chartFilters[filterId].length === 0 || chartFilters[filterId].length === checkboxes.length) {
                if (allCheckbox) allCheckbox.checked = true;
                checkboxes.forEach(cb => cb.checked = false);
            } else {
                if (allCheckbox) allCheckbox.checked = false;
                checkboxes.forEach(cb => {
                    if (cb.value && chartFilters[filterId].includes(cb.value)) {
                        cb.checked = true;
                    }
                });
            }

            updateFilterDisplay(filterId, true);
        });

        // Update dependent filters without resetting selections
        updateDependentChartFilters('editChartIndicatorGroup', false);
        updateDependentChartFilters('editChartIndicator', false);
        updateDependentChartFilters('editChartDataSource', false);
        updateDependentChartFilters('editChartScope', false);

        // Validate existing selections against available options
        validateEditModalSelections(chartConfig);
    }

    document.getElementById('editChartModal').style.display = 'block';
}

// Helper function to validate selections in edit modal
function validateEditModalSelections(chartConfig) {
    // Validate indicators
    const indicatorOptions = [...document.querySelectorAll('#editChartIndicatorOptions input:not(#editChartIndicatorAll)')].map(opt => opt.value);
    chartFilters.editChartIndicator = chartConfig.filters.indicator.filter(ind => indicatorOptions.includes(ind));
    updateFilterDisplay('editChartIndicator', true);

    // Validate data sources
    const dataSourceOptions = [...document.querySelectorAll('#editChartDataSourceOptions input:not(#editChartDataSourceAll)')].map(opt => opt.value);
    chartFilters.editChartDataSource = chartConfig.filters.dataSource.filter(src => dataSourceOptions.includes(src));
    updateFilterDisplay('editChartDataSource', true);

    // Validate scopes
    const scopeOptions = [...document.querySelectorAll('#editChartScopeOptions input:not(#editChartScopeAll)')].map(opt => opt.value);
    chartFilters.editChartScope = chartConfig.filters.scope.filter(scope => scopeOptions.includes(scope));
    updateFilterDisplay('editChartScope', true);

    // Validate years
    const yearOptions = [...document.querySelectorAll('#editChartYearOptions input:not(#editChartYearAll)')].map(opt => opt.value);
    chartFilters.editChartYear = (chartConfig.filters.year || []).filter(year => yearOptions.includes(year));
    updateFilterDisplay('editChartYear', true);
}

function openSaveDashboardModal() {
    document.getElementById('saveDashboardModal').style.display = 'block';
    document.getElementById('dashboardName').value = `dashboard_${new Date().toISOString().slice(0, 10)}`;
}

function openLoadDashboardModal() {
    document.getElementById('loadDashboardModal').style.display = 'block';
    loadDashboardList();
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

// Add a new chart to the dashboard
function addNewChart() {
    const title = document.getElementById('newChartTitle').value || 'New Chart';
    const type = document.getElementById('newChartType').value;
    const xAxis = document.getElementById('newChartXAxis').value;
    const yAxis = document.getElementById('newChartYAxis').value;
    const width = parseInt(document.getElementById('newChartWidth').value) || 500;
    const height = parseInt(document.getElementById('newChartHeight').value) || 400;
    const showLegend = document.getElementById('newChartShowLegend').checked;
    const showLabels = document.getElementById('newChartShowLabels').checked;
    const showTooltip = document.getElementById('newChartShowTooltip').checked;

    const chartId = Date.now();
    const chartConfig = {
        id: chartId,
        title: title,
        type: type,
        xAxis: xAxis,
        yAxis: yAxis,
        width: width,
        height: height,
        showLegend: showLegend,
        showLabels: showLabels,
        showTooltip: showTooltip,
        filters: {
            indicatorGroup: chartFilters.newChartIndicatorGroup,
            indicator: chartFilters.newChartIndicator,
            dataSource: chartFilters.newChartDataSource,
            dataSourceDetail: chartFilters.newChartDataSourceDetail,
            scope: chartFilters.newChartScope,
            region: chartFilters.newChartRegion, 
            year: chartFilters.newChartYear
        }
    };

    currentCharts.push(chartConfig);

    // Create chart container
    const chartHtml = `
        <div class="chart-box sortable-chart" id="chart-${chartId}" style="width: ${width}px">
            <div class="chart-header">
                <div class="chart-title">${title}</div>
                <div class="chart-actions">
                    <button onclick="exportChart('${chartId}', 'png')" title="Export PNG">
                        <i class="fas fa-image"></i>
                    </button>
                    <button onclick="exportChart('${chartId}', 'pdf')" title="Export PDF">
                        <i class="fas fa-file-pdf"></i>
                    </button>
                    <button onclick="exportChart('${chartId}', 'xlsx')" title="Export XLSX">
                        <i class="fas fa-file-excel"></i>
                    </button>
                    <button onclick="openEditChartModal('${chartId}')" title="Edit Chart">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button onclick="removeChart('${chartId}')" title="Remove Chart">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="chart-container" id="chart-${chartId}-container" style="height: ${height}px"></div>
        </div>
    `;

    document.getElementById('dashboardContainer').insertAdjacentHTML('beforeend', chartHtml);
    renderChart(chartConfig);
    closeModal('addChartModal');

    // Update dashboard settings
    updateDashboardSettings();
}

// Update an existing chart
function updateChart() {
    const chartId = document.getElementById('editChartId').value;
    const title = document.getElementById('editChartTitle').value || 'Updated Chart';
    const type = document.getElementById('editChartType').value;
    const xAxis = document.getElementById('editChartXAxis').value;
    const yAxis = document.getElementById('editChartYAxis').value;
    const width = parseInt(document.getElementById('editChartWidth').value) || 500;
    const height = parseInt(document.getElementById('editChartHeight').value) || 400;
    const showLegend = document.getElementById('editChartShowLegend').checked;
    const showLabels = document.getElementById('editChartShowLabels').checked;
    const showTooltip = document.getElementById('editChartShowTooltip').checked;

    const chartIndex = currentCharts.findIndex(c => c.id.toString() === chartId);
    if (chartIndex === -1) return;

    currentCharts[chartIndex] = {
        ...currentCharts[chartIndex],
        title: title,
        type: type,
        xAxis: xAxis,
        yAxis: yAxis,
        width: width,
        height: height,
        showLegend: showLegend,
        showLabels: showLabels,
        showTooltip: showTooltip,
        filters: {
            indicatorGroup: chartFilters.newChartIndicatorGroup,
            indicator: chartFilters.newChartIndicator,
            dataSource: chartFilters.newChartDataSource,
            dataSourceDetail: chartFilters.newChartDataSourceDetail,
            scope: chartFilters.newChartScope,
            region: chartFilters.newChartRegion,
            year: chartFilters.newChartYear
        }
    };

    // Update chart container
    const chartContainer = document.getElementById(`chart-${chartId}`);
    if (chartContainer) {
        chartContainer.style.width = `${width}px`;
        const chartElement = chartContainer.querySelector('.chart-container');
        if (chartElement) {
            chartElement.style.height = `${height}px`;
        }

        // Update title
        const titleElement = chartContainer.querySelector('.chart-title');
        if (titleElement) {
            titleElement.textContent = title;
        }
    }

    // Re-render the chart
    renderChart(currentCharts[chartIndex]);
    closeModal('editChartModal');

    // Update dashboard settings
    updateDashboardSettings();
}

// Remove a chart from the dashboard
function removeChart(chartId) {
    const chartElement = document.getElementById(`chart-${chartId}`);
    if (chartElement) chartElement.remove();

    currentCharts = currentCharts.filter(chart => chart.id.toString() !== chartId);
    updateDashboardSettings();
}

// Save dashboard settings
function saveDashboard() {
    const dashboardName = document.getElementById('dashboardName').value.trim();
    if (!dashboardName) {
        alert('Please enter a dashboard name');
        return;
    }

    updateDashboardSettings();

    // Save to server
    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `action=save_dashboard&dashboard_name=${encodeURIComponent(dashboardName)}&settings=${encodeURIComponent(JSON.stringify(dashboardSettings))}`
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Dashboard saved successfully');
                closeModal('saveDashboardModal');
            } else {
                alert('Failed to save dashboard');
            }
        })
        .catch(error => {
            console.error('Error saving dashboard:', error);
            alert('Failed to save dashboard');
        });
}

// Update dashboard settings
function updateDashboardSettings() {
    dashboardSettings = {
        filters: selectedFilters,
        charts: currentCharts,
        chartOrder: Array.from(document.getElementById('dashboardContainer').children).map(el => el.id.replace('chart-', ''))
    };
}

// Load dashboard list
function loadDashboardList() {
    fetch('?getdashboards=1')
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            const dashboardList = document.getElementById('dashboardList');
            dashboardList.innerHTML = '';

            Object.keys(data).forEach(dashboardName => {
                const item = document.createElement('div');
                item.className = 'dashboard-item';
                item.textContent = dashboardName;
                item.onclick = function () {
                    document.querySelectorAll('.dashboard-item').forEach(el => {
                        el.classList.remove('active');
                    });
                    this.classList.add('active');
                };
                dashboardList.appendChild(item);
            });
        })
        .catch(error => {
            console.error('Error loading dashboard list:', error);
            document.getElementById('dashboardList').innerHTML =
                '<p class="text-danger">Error loading dashboards. Check console for details.</p>';
        });
}

// Load selected dashboard
function loadSelectedDashboard() {
    const selectedItem = document.querySelector('.dashboard-item.active');
    if (!selectedItem) {
        alert('Please select a dashboard to load');
        return;
    }

    const dashboardName = selectedItem.textContent;

    fetch('?getdashboards=1')
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            if (!data[dashboardName]) {
                throw new Error('Dashboard not found');
            }
            return data[dashboardName];
        })
        .then(settingsToLoad => {
            // First ensure data is loaded
            if (rawData.length === 0) {
                return fetchData().then(() => {
                    resetDashboard();
                    loadDashboardSettings(settingsToLoad);
                    closeModal('loadDashboardModal');
                });
            } else {
                resetDashboard();
                loadDashboardSettings(settingsToLoad);
                closeModal('loadDashboardModal');
                return Promise.resolve();
            }
        })
        .catch(error => {
            console.error('Dashboard load error:', error);
            alert(`Failed to load dashboard: ${error.message}`);
        });
}

// Load dashboard settings
function loadDashboardSettings(settings) {
    try {
        // Apply filters
        if (settings.filters) {
            // Overwrite only known filters, keep structure
            Object.keys(selectedFilters).forEach(filterId => {
                selectedFilters[filterId] = (Array.isArray(settings.filters[filterId]))
                    ? settings.filters[filterId]
                    : [];
            });

            Object.keys(selectedFilters).forEach(filterId => {
                const allCheckbox = document.getElementById(`${filterId}All`);
                const optionsContainer = document.getElementById(`${filterId}Options`);

                if (!allCheckbox || !optionsContainer) {
                    console.warn(`Filter elements missing for: ${filterId}`);
                    return;
                }

                const checkboxes = optionsContainer.querySelectorAll(`input:not(#${filterId}All)`);

                if (selectedFilters[filterId].length === 0 || selectedFilters[filterId].length === checkboxes.length) {
                    allCheckbox.checked = true;
                    checkboxes.forEach(cb => cb.checked = false);
                } else {
                    allCheckbox.checked = false;
                    checkboxes.forEach(cb => {
                        if (selectedFilters[filterId].includes(cb.value)) {
                            cb.checked = true;
                        } else {
                            cb.checked = false;
                        }
                    });
                }

                updateFilterDisplay(filterId);
            });

            filterData();
        }

        // Apply charts
        if (settings.charts) {
            currentCharts = JSON.parse(JSON.stringify(settings.charts));
            const container = document.getElementById('dashboardContainer');
            container.innerHTML = '';

            // Add charts in saved order
            const validChartOrder = settings.chartOrder.filter(chartId =>
                currentCharts.some(chart => chart.id.toString() === chartId)
            );

            validChartOrder.forEach(chartId => {
                const chartConfig = currentCharts.find(chart => chart.id.toString() === chartId);
                if (chartConfig) {
                    const chartHtml = `
                        <div class="chart-box sortable-chart" id="chart-${chartConfig.id}" style="width: ${chartConfig.width || 500}px">
                            <div class="chart-header">
                                <div class="chart-title">${chartConfig.title}</div>
                                <div class="chart-actions">
                                    <button onclick="exportChart('${chartConfig.id}', 'png')" title="Export PNG">
                                        <i class="fas fa-image"></i>
                                    </button>
                                    <button onclick="exportChart('${chartConfig.id}', 'pdf')" title="Export PDF">
                                        <i class="fas fa-file-pdf"></i>
                                    </button>
                                    <button onclick="exportChart('${chartConfig.id}', 'xlsx')" title="Export XLSX">
                                        <i class="fas fa-file-excel"></i>
                                    </button>
                                    <button onclick="openEditChartModal('${chartConfig.id}')" title="Edit Chart">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="removeChart('${chartConfig.id}')" title="Remove Chart">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chart-container" id="chart-${chartConfig.id}-container" style="height: ${chartConfig.height || 400}px"></div>
                        </div>
                    `;
                    container.insertAdjacentHTML('beforeend', chartHtml);
                }
            });

            // Render charts after short delay to ensure DOM stability
            setTimeout(() => {
                renderAllCharts();
                initializeResizableCharts();
            }, 100);
        }
    } catch (error) {
        console.error('Error loading dashboard settings:', error);
        alert('Error applying dashboard settings. Check console for details.');
    }
}

// Save dashboard settings to local file (for demo purposes)
function saveDashboardSettings() {
    // In a real application, this would be sent to the server
    console.log('Dashboard settings updated:', dashboardSettings);
}