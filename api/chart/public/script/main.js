// Main script
const $button = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
    e.preventDefault();
    $wrapper.classList.toggle('toggled');
});

let rawData = []; // Store fetched data
let filteredData = []; // Store filtered data

// Fetch data from API
fetch("https://hispmd.merqconsultancy.org/api/chart/public/data/hispm_data.php")
    .then((response) => response.json())
    .then((data) => {
        rawData = data;
        populateFilters(); // Populate filters dynamically
    })
    .catch((error) => console.error("Error fetching data:", error));

// Populate filter dropdowns dynamically
function populateFilters() {
    populateDropdown("indicatorGroup", [...new Set(rawData.map((item) => item["Indicator Group"]))]);
    populateDropdown("indicator", [...new Set(rawData.map((item) => item["indicator"]))]);
    populateDropdown("dataSource", [...new Set(rawData.map((item) => item["Data Source"]))]);
    populateDropdown("dataSourceDetail", [...new Set(rawData.map((item) => item["Data Source Detail"]))]);
    populateDropdown("scope", [...new Set(rawData.map((item) => item["Scope"]))]);
    populateDropdown("region", [...new Set(rawData.map((item) => item["Region"]))]);
    populateDropdown("periodType", [...new Set(rawData.map((item) => item["Period Type"]))]);
    populateDropdown("facilityType", [...new Set(rawData.map((item) => item["Facility Type"]))]);
    populateDropdown("period", [...new Set(rawData.map((item) => item["Period"]))].sort((a, b) => a - b));
    populateDropdown("year", [...new Set(rawData.map((item) => item["Year"]))].sort((a, b) => a - b));
    populateDropdown("administrationUnit", [...new Set(rawData.map((item) => item["Administration Unit"]))]);
}

// Populate individual dropdown
function populateDropdown(id, options) {
    const dropdown = document.getElementById(id);
    dropdown.innerHTML = `<option value="">All</option>`; // Add "All" option
    options
        .filter((option) => option !== "") // Exclude empty values
        .forEach((option) => {
            dropdown.innerHTML += `<option value="${option}">${option}</option>`;
        });
}

// Apply filters to the data
let selectedIndicators = []; // To track selected indicators persistently

// Apply filters to the data
function applyFilters() {
    const chartType = document.getElementById("chartType").value;
    const indicatorGroup = document.getElementById("indicatorGroup").value;
    const currentSelectedIndicators = Array.from(
        document.getElementById("indicator").selectedOptions,
    ).map((option) => option.value);

    // Update the selected indicators only if they are explicitly changed
    if (currentSelectedIndicators.length > 0) {
        selectedIndicators = currentSelectedIndicators;
    }

    const dataSource = document.getElementById("dataSource").value;
    const dataSourceDetail = document.getElementById("dataSourceDetail").value;
    const scope = document.getElementById("scope").value;
    const region = document.getElementById("region").value;
    const periodType = document.getElementById("periodType").value;
    const facilityType = document.getElementById("facilityType").value;
    const year = document.getElementById("year").value;
    const period = document.getElementById("period").value;
    const administrationUnit = document.getElementById("administrationUnit").value;
    const xAxis = document.getElementById("xAxis").value;

    // Filter data based on selected values
    filteredData = rawData.filter(
        (item) =>
            (indicatorGroup === "" || item["Indicator Group"] === indicatorGroup) &&
            (selectedIndicators.length === 0 || selectedIndicators.includes(item["indicator"])) &&
            (dataSource === "" || item["Data Source"] === dataSource) &&
            (dataSourceDetail === "" || item["Data Source Detail"] === dataSourceDetail) &&
            (scope === "" || item["Scope"] === scope) &&
            (region === "" || item["Region"] === region) &&
            (periodType === "" || item["Period Type"] === periodType) &&
            (facilityType === "" || item["Facility Type"] === facilityType) &&
            (year === "" || item["Year"] === year) &&
            (period === "" || item["Period"] === period) &&
            (administrationUnit === "" || item["Administration Unit"] === administrationUnit),
    );

    // Draw the chart with filtered data
    
    updateIndicatorsBasedOnGroup(indicatorGroup);
    drawChart(chartType, selectedIndicators, xAxis); // Update chart with filtered data
}

// Update the indicator dropdown based on the selected indicator group
function updateIndicatorsBasedOnGroup(indicatorGroup) {
    const indicators = rawData
        .filter((item) => indicatorGroup === "" || item["Indicator Group"] === indicatorGroup)
        .map((item) => item["indicator"]);
    populateDropdown("indicator", [...new Set(indicators)]);
}

// Draw the chart
function drawChart(chartType, selectedIndicators, xAxis) {
    let seriesData = {};
    let chartData = [];

    // Group data by series (categories) and xAxis
    filteredData.forEach((item) => {
        const seriesKey = getChartSeriesKey(item, selectedIndicators);
        const xAxisKey = getChartKey(xAxis, item);

        if (!seriesData[seriesKey]) {
            seriesData[seriesKey] = {};
        }
        if (!seriesData[seriesKey][xAxisKey]) {
            seriesData[seriesKey][xAxisKey] = {
                total: 0,
                count: 0,
            };
        }

        seriesData[seriesKey][xAxisKey].total += item["value"];
        seriesData[seriesKey][xAxisKey].count += 1;
    });

    const chartSeries = Object.entries(seriesData).map(([seriesKey, data]) => {
        if (chartType === "pie") {
            // For pie chart, we only need one data array with x and value pairs
            return {
                name: seriesKey,
                data: Object.entries(data).map(([xKey, { total, count }]) => ({
                    x: xKey,
                    value: total / count,
                })),
            };
        }

        return {
            name: seriesKey,
            data: Object.entries(data).map(([xKey, { total, count }]) => [xKey, total / count]),
        };
    });

    // Clear the previous chart
    document.getElementById("container").innerHTML = "";

    // Initialize the chart
    const chart = getChartInstance(chartType);

    // Add series to the chart
    chartSeries.forEach(({ name, data }) => {
        if (chartType === "pie") {
            chart.data(data); // Apply pie chart data
        } else {
            const series = chart[chartType || "column"](data);
            chart.xAxis().title(xAxis);
            chart.yAxis(0).title("Data Values");
            //chart.yAxis(1).title("Target Data Values").orientation("right");

            series.name(name);
        }
    });

        // enable tooltip for all series
        chart.tooltip(true);
        // enable HTML for tooltips
        chart.tooltip().useHtml(true);

        // tooltip settings
        var tooltip = chart.tooltip();
        //tooltip.positionMode("point");
        //tooltip.format("Year: <b>{%x}</b>\nData Value: <b>{%value}</b>");
        //tooltip.format("Year: <b>{%x}</b>\nData Value: <b>{%value}</b>");

    
        
    // Turn on chart animation
    chart.animation(true);

    // Configure chart
        chart.legend().enabled(true);

    // Enable the drag-and-drop mode of the legend
    chart.legend().drag(true);

    // Set labels settings
    chart
        .labels()
        .enabled(true)
        .fontColor('#60727b')
        .position('center-top')
        .anchor('center-bottom')
        .format('{%Value}{decimalsCount:1}');
    chart.hovered().labels(true);

    // Configure chart settings
    const chartTitle = selectedIndicators.length > 0
        ? `Chart for ${selectedIndicators.join(", ")}`
        : "HISPMD Indicators Chart";
    chart.title(chartTitle);
        chart.container("container");
    chart.draw();
}

// Get the chart instance based on the selected type
function getChartInstance(chartType) {
    switch (chartType) {
        case "line":
            return anychart.line();
        case "bar":
            return anychart.bar();
        case "area":
            return anychart.area();
        case "pie":
            return anychart.pie();
        default:
            return anychart.cartesian();
    }
}

// Get the chart series key for multi-series charts
function getChartSeriesKey(item, selectedIndicators) {
    if (selectedIndicators.length > 0) {
        return selectedIndicators.includes(item["indicator"]) ? item["indicator"] : "Other";
    } else if (item["indicator"] !== "") {
        return item["indicator"];
    } else if (item["Data Source"] !== "") {
        return item["Data Source"];        
    } else if (item["Region"] !== "") {
        return item["Region"];
    } else if (item["Period"] !== "") {
        return item["Period"];
    }
    return "Other";
}

// Get the chart key based on the selected x-axis
function getChartKey(xAxis, item) {
    switch (xAxis) {
        case "year":
            return item["Year"];
        case "period":
            return item["Period"];
        case "indicator":
            return item["indicator"];
        case "region":
            return item["Region"];
        case "dataSource":
            return item["Data Source"];
        case "dataSourceDetail":
            return item["Data Source Detail"];
        case "periodType":
            return item["Period Type"];
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
    const sections = document.querySelectorAll(".section");
    sections.forEach((section) => (section.style.display = "none"));
    document.getElementById(sectionId).style.display = "block";
}

// Initialize the view
showSection("filtered-chart");

// Toggle sidebar on mobile
const toggleMenuButton = document.getElementById("toggle-menu");
const sidebar = document.getElementById("sidebar");

toggleMenuButton.addEventListener("click", () => {
    sidebar.classList.toggle("show");
});

// Reset all filters
function resetFilters() {
    document.querySelectorAll("select").forEach((dropdown) => {
        dropdown.value = ""; // Reset all dropdowns
    });
    selectedIndicators = []; // Clear the selected indicators
    filteredData = rawData; // Reset the filtered data
    drawChart("column", [], "year"); // Redraw the default chart
}
