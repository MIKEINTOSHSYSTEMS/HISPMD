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
    applyFilters(); // Initialize chart with data
  })
  .catch((error) => console.error("Error fetching data:", error));

// Populate filter dropdowns dynamically
function populateFilters() {
  populateDropdown("indicatorGroup", [
    ...new Set(rawData.map((item) => item["Indicator Group"])),
  ]);
  populateDropdown("indicator", [
    ...new Set(rawData.map((item) => item["indicator"])),
  ]);
  populateDropdown("dataSource", [
    ...new Set(rawData.map((item) => item["Data Source"])),
  ]);
  populateDropdown("dataSourceDetail", [
    ...new Set(rawData.map((item) => item["Data Source Detail"])),
  ]);
  populateDropdown("scope", [...new Set(rawData.map((item) => item["Scope"]))]);
  populateDropdown("region", [
    ...new Set(rawData.map((item) => item["Region"])),
  ]);
  populateDropdown("facilityType", [
    ...new Set(rawData.map((item) => item["Facility Type"])),
  ]);
  //populateDropdown("year", [...new Set(rawData.map((item) => item["Year"]))]);

  // Year filter sorted in ascending order
  populateDropdown("year", [...new Set(rawData.map((item) => item["Year"]))].sort((a, b) => a - b));
  

  populateDropdown("administrationUnit", [
    ...new Set(rawData.map((item) => item["Administration Unit"])),
  ]);
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
function applyFilters() {
  const chartType = document.getElementById("chartType").value;
  const indicatorGroup = document.getElementById("indicatorGroup").value;
  const selectedIndicators = Array.from(
    document.getElementById("indicator").selectedOptions,
  ).map((option) => option.value);
  const dataSource = document.getElementById("dataSource").value;
  const dataSourceDetail = document.getElementById("dataSourceDetail").value;
  const scope = document.getElementById("scope").value;
  const region = document.getElementById("region").value;
  const facilityType = document.getElementById("facilityType").value;
  const year = document.getElementById("year").value;
  const administrationUnit =
    document.getElementById("administrationUnit").value;
  const xAxis = document.getElementById("xAxis").value;

  // Filter data based on selected values
  filteredData = rawData.filter(
    (item) =>
      (indicatorGroup === "" || item["Indicator Group"] === indicatorGroup) &&
      (selectedIndicators.length === 0 ||
        selectedIndicators.includes(item["indicator"])) &&
      (dataSource === "" || item["Data Source"] === dataSource) &&
      (dataSourceDetail === "" ||
        item["Data Source Detail"] === dataSourceDetail) &&
      (scope === "" || item["Scope"] === scope) &&
      (region === "" || item["Region"] === region) &&
      (facilityType === "" || item["Facility Type"] === facilityType) &&
      (year === "" || item["Year"] === year) &&
      (administrationUnit === "" ||
        item["Administration Unit"] === administrationUnit),
  );

  updateIndicatorsBasedOnGroup(indicatorGroup);
  drawChart(chartType, selectedIndicators, xAxis); // Update chart with filtered data
}

// Update the indicator dropdown based on the selected indicator group
function updateIndicatorsBasedOnGroup(indicatorGroup) {
  const indicators = rawData
    .filter(
      (item) =>
        indicatorGroup === "" || item["Indicator Group"] === indicatorGroup,
    )
    .map((item) => item["indicator"]);
  populateDropdown("indicator", [...new Set(indicators)]);
}

// Draw the chart
function drawChart(chartType, selectedIndicators, xAxis) {
  // Prepare chart data (average value instead of sum)
  let chartData = {};

  // Group data by selected xAxis option
  filteredData.forEach((item) => {
    const key = getChartKey(xAxis, item);
    if (!chartData[key]) {
      chartData[key] = { total: 0, count: 0 };
    }
    chartData[key].total += item["value"];
    chartData[key].count += 1;
  });

  // Calculate the average values
  const chartDataArray = Object.entries(chartData).map(
    ([key, { total, count }]) => [key, total / count]
  );

  // Clear the previous chart
  document.getElementById("container").innerHTML = "";

  // Create a chart instance based on the selected chart type
  let chart;
  if (chartType === "pie") {
    chart = anychart.pie3d();
    chart.innerRadius("30%");
      // font labels font settings
  chart.labels().fontFamily("Menlo");
  chart.labels().fontSize(18);
  //chart.labels().fontDecoration("underline");
  chart.labels().fontWeight(900);
  chart.labels().background().enabled(true);
  chart.labels().background().fill("White 0.4");
  

  } else if (chartType === "bar") {
    chart = anychart.bar();
  } else if (chartType === "line") {
    chart = anychart.line();
  } else if (chartType === "area") {
    chart = anychart.area();
  } else {
//    chart = anychart.column3d(); // Default to column chart
    chart = anychart.column(); // Default to column chart
  }

  
  // Add data to the chart
  chart.data(chartDataArray);

  // Turn on chart animation
  chart.animation(true);

  // Set chart title dynamically
  const chartTitle =
    selectedIndicators.length > 0
      ? `Chart for ${selectedIndicators.join(", ")}`
      : "HISPMD Indicators Chart";
  chart.title(chartTitle);

  // Set axis titles for non-pie charts
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

  // Show legends and data labels
  chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);
  chart.legend().positionMode("outside");
  chart.legend().useHtml(true);

  // Automatically assign legend items based on the chart data
  chart.legend().itemsSourceMode("categories");

  // Enable the drag-and-drop mode of the legend
  chart.legend().drag(true);

  // Set labels settings
  chart
    .labels()
    .enabled(true)
    .fontColor('#60727b')
    .position('center-top')
    .anchor('center-bottom')
    //.format('{%Value}{groupsSeparator: }');
    //.format('{%Value}{decimalsCount:1}');
    .format('{%Value}{decimalsCount:1}');
  chart.hovered().labels(true);

  // Set interactivity settings
  chart.interactivity().hoverMode('single');

  // Set tooltip settings
  chart
    .tooltip()
    //.positionMode('point')
    .position('center-top')
    .anchor('center-bottom')
    .offsetX(0)
    .offsetY(5)
    //.format('Value: {%Value}{groupsSeparator: }');
    //.format('{%Value}{decimalsCount:1}');
    .format('Value: {%Value}{decimalsCount:1}');

  // Draw the chart
  chart.container("container");
  chart.draw();
}

// Get the chart key based on the selected x-axis
function getChartKey(xAxis, item) {
  switch (xAxis) {
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