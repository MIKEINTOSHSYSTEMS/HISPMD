<?php
// index.php - Minimal MVP for Dynamic Charting
// <!-- filepath: d:\MERQ_JSI_DUP\Deployment\DataVisualizer\index.php -->
// Serve as both HTML and API endpoint for demo
if (isset($_GET['api'])) {
    // Proxy the remote API for CORS and demo
    header('Content-Type: application/json');
    echo file_get_contents('https://hispmd.merqconsultancy.org/api/chart/public/data/hispm_data.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dynamic Charting</title>
    <link rel="stylesheet" href="css/dashboards.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f7f7f7;
        }

        .dashboard-header {
            background: #003366;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .dashboard-controls {
            background: #fff;
            padding: 1em;
            display: flex;
            flex-wrap: wrap;
            gap: 1em;
        }

        .dashboard-controls label {
            margin-right: 0.5em;
        }

        #chart-container {
            background: #fff;
            margin: 1em auto;
            padding: 1em;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0001;
            max-width: 1200px;
        }

        .export-btns {
            margin-top: 1em;
        }

        .export-btns button {
            margin-right: 0.5em;
        }

        .dashboard-footer {
            text-align: center;
            color: #888;
            margin: 2em 0 1em;
        }
    </style>
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
    
</head>

<body>
    <div class="dashboard-header">
        <h1>Dynamic Charting</h1>
        <p>Create, filter, and export interactive charts from multiple data sources</p>
    </div>
    <div class="dashboard-controls" id="controls">
        <label>Chart Type:
            <select id="chartType">
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
                <option value="geojson">Geo Map</option>
            </select>
        </label>
        <label>Indicator:
            <select id="indicatorFilter"></select>
        </label>
        <label>Year:
            <select id="yearFilter"></select>
        </label>
        <label>Region:
            <select id="regionFilter"></select>
        </label>
        <label>Upload Data:
            <input type="file" id="fileInput" accept=".csv,.xlsx,.json,.geojson">
        </label>
        <button onclick="resetFilters()">Reset Filters</button>
    </div>
    <div id="chart-container" style="min-height:700px"></div>
    <div class="export-btns">
        <button onclick="exportChart('png')">Export PNG</button>
        <button onclick="exportChart('pdf')">Export PDF</button>
        <button onclick="exportChart('xlsx')">Export XLSX</button>
        <button onclick="exportChart('json')">Export JSON</button>
    </div>
    <div class="dashboard-footer">
        &copy; <?= date('Y') ?> Dynamic Dashboard | Powered by Highcharts & PHP
    </div>
    <script>
        let rawData = [];
        let filteredData = [];
        let chart = null;

        // Fetch data from API
        async function fetchData() {
            const res = await fetch('?api=1');
            rawData = await res.json();
            filteredData = rawData;
            populateFilters();
            renderChart();
        }

        // Populate filter dropdowns
        function populateFilters() {
            const indicators = [...new Set(rawData.map(d => d.indicator))];
            const years = [...new Set(rawData.map(d => d.Year))];
            const regions = [...new Set(rawData.map(d => d.Region).filter(r => r))];

            const indicatorSel = document.getElementById('indicatorFilter');
            indicatorSel.innerHTML = '<option value="">All</option>' + indicators.map(i => `<option>${i}</option>`).join('');
            const yearSel = document.getElementById('yearFilter');
            yearSel.innerHTML = '<option value="">All</option>' + years.map(y => `<option>${y}</option>`).join('');
            const regionSel = document.getElementById('regionFilter');
            regionSel.innerHTML = '<option value="">All</option>' + regions.map(r => `<option>${r}</option>`).join('');
        }

        // Filter data based on controls
        function filterData() {
            const indicator = document.getElementById('indicatorFilter').value;
            const year = document.getElementById('yearFilter').value;
            const region = document.getElementById('regionFilter').value;
            filteredData = rawData.filter(d =>
                (!indicator || d.indicator === indicator) &&
                (!year || d.Year == year) &&
                (!region || d.Region === region)
            );
            renderChart();
        }

        // Reset filters
        function resetFilters() {
            document.getElementById('indicatorFilter').value = '';
            document.getElementById('yearFilter').value = '';
            document.getElementById('regionFilter').value = '';
            filterData();
        }

        // Chart rendering logic
        function renderChart() {
            const chartType = document.getElementById('chartType').value;
            if (!filteredData.length) {
                document.getElementById('chart-container').innerHTML = '<p>No data available for selected filters.</p>';
                return;
            }
            // Prepare data for chart
            let categories = [...new Set(filteredData.map(d => d.Year))].sort();
            let series = [];
            if (chartType === 'pie') {
                series = [{
                    name: 'Value',
                    colorByPoint: true,
                    data: filteredData.map(d => ({
                        name: d.indicator,
                        y: Number(d.value)
                    }))
                }];
            } else if (chartType === 'gauge') {
                // Show first value as gauge
                const val = Number(filteredData[0].value);
                Highcharts.chart('chart-container', {
                    chart: {
                        type: 'solidgauge'
                    },
                    title: {
                        text: filteredData[0].indicator
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
                            text: filteredData[0]['Data Representation']
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
                        name: 'Value',
                        data: [val],
                        dataLabels: {
                            format: '<div style="text-align:center"><span style="font-size:25px">{y}</span><br/><span style="font-size:12px;opacity:0.4">' + filteredData[0]['Data Representation'] + '</span></div>'
                        }
                    }]
                });
                return;
            } else if (chartType === 'radar') {
                // Radar chart
                const indicators = [...new Set(filteredData.map(d => d.indicator))];
                series = [{
                    name: 'Value',
                    data: indicators.map(ind => {
                        const found = filteredData.find(d => d.indicator === ind);
                        return found ? Number(found.value) : 0;
                    }),
                    pointPlacement: 'on'
                }];
                Highcharts.chart('chart-container', {
                    chart: {
                        polar: true,
                        type: 'line'
                    },
                    title: {
                        text: 'Radar Chart'
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
                    series: series
                });
                return;
            } else if (chartType === 'singleValue') {
                // Show single value
                document.getElementById('chart-container').innerHTML = `<div style="font-size:3em;text-align:center;padding:2em;">${filteredData[0].value}</div><div style="text-align:center;">${filteredData[0].indicator}</div>`;
                return;
            } else if (chartType === 'geojson') {
                // Demo: Ethiopia map with values by region (requires geojson)
                fetch('https://code.highcharts.com/mapdata/countries/et/et-all.geo.json')
                    .then(r => r.json())
                    .then(geojson => {
                        const data = filteredData.map(d => [d.Region.toLowerCase(), Number(d.value)]);
                        Highcharts.mapChart('chart-container', {
                            chart: {
                                map: geojson
                            },
                            title: {
                                text: 'Geo Map'
                            },
                            series: [{
                                data: data,
                                mapData: geojson,
                                joinBy: ['name', 0],
                                name: 'Value',
                                states: {
                                    hover: {
                                        color: '#BADA55'
                                    }
                                },
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.name}'
                                }
                            }]
                        });
                    });
                return;
            } else {
                // Default: column/line/bar/area/stackedColumn etc.
                const indicators = [...new Set(filteredData.map(d => d.indicator))];
                series = indicators.map(ind => ({
                    name: ind,
                    data: categories.map(y => {
                        const found = filteredData.find(d => d.indicator === ind && d.Year == y);
                        return found ? Number(found.value) : null;
                    })
                }));
            }
            // Stacked column
            let plotOptions = {};
            if (chartType === 'stackedColumn') {
                plotOptions = {
                    series: {
                        stacking: 'normal'
                    }
                };
            }
            Highcharts.chart('chart-container', {
                chart: {
                    type: chartType === 'stackedColumn' ? 'column' : chartType
                },
                title: {
                    text: 'Data Visualization'
                },
                xAxis: {
                    categories: categories,
                    title: {
                        text: 'Year'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Value'
                    }
                },
                plotOptions: plotOptions,
                series: series
            });
        }

        // Export chart
        function exportChart(type) {
            if (!chart) chart = Highcharts.charts.find(c => c && c.renderTo.id === 'chart-container');
            if (!chart) return;
            if (type === 'png') chart.exportChart({
                type: 'image/png'
            });
            else if (type === 'pdf') chart.exportChart({
                type: 'application/pdf'
            });
            else if (type === 'xlsx') chart.downloadXLS();
            else if (type === 'json') {
                const data = JSON.stringify(filteredData, null, 2);
                const blob = new Blob([data], {
                    type: "application/json"
                });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'data.json';
                a.click();
                URL.revokeObjectURL(url);
            }
        }

        // File upload handler (CSV/XLSX/JSON/GeoJSON)
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;
            const ext = file.name.split('.').pop().toLowerCase();
            if (ext === 'csv') {
                Papa.parse(file, {
                    header: true,
                    complete: function(results) {
                        rawData = results.data;
                        filteredData = rawData;
                        populateFilters();
                        renderChart();
                    }
                });
            } else if (ext === 'xlsx') {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const data = new Uint8Array(e.target.result);
                    const workbook = XLSX.read(data, {
                        type: 'array'
                    });
                    const sheet = workbook.Sheets[workbook.SheetNames[0]];
                    rawData = XLSX.utils.sheet_to_json(sheet);
                    filteredData = rawData;
                    populateFilters();
                    renderChart();
                };
                reader.readAsArrayBuffer(file);
            } else if (ext === 'json' || ext === 'geojson') {
                const reader = new FileReader();
                reader.onload = function(e) {
                    rawData = JSON.parse(e.target.result);
                    filteredData = rawData;
                    populateFilters();
                    renderChart();
                };
                reader.readAsText(file);
            }
        });

        // Event listeners
        document.getElementById('chartType').addEventListener('change', renderChart);
        document.getElementById('indicatorFilter').addEventListener('change', filterData);
        document.getElementById('yearFilter').addEventListener('change', filterData);
        document.getElementById('regionFilter').addEventListener('change', filterData);

        // Initial load
        fetchData();
    </script>
</body>

</html>