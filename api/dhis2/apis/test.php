<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update DHIS2 Reporting Rates</title>

    <!-- Include Bootstrap CSS for modern look -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .progress-container {
            margin-top: 20px;
        }

        .log-container {
            margin-top: 20px;
            max-height: 300px;
            overflow-y: auto;
            background: #f8f9fa;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .log-container pre {
            margin: 0;
            font-size: 14px;
            color: #495057;
            white-space: pre-wrap;
        }

        .btn-lg {
            font-size: 1rem;
            padding: 10px 20px;
        }

        .progress-bar {
            transition: width 0.4s ease;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .data-preview {
            margin-top: 20px;
            max-height: 100%;
            overflow-y: auto;
        }

        .data-preview table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-preview th,
        .data-preview td {
            padding: 8px;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        .data-preview th {
            background-color: #f8f9fa;
            cursor: pointer;
        }

        .pagination-controls {
            margin-top: 20px;
        }

        .pagination-controls .pagination {
            justify-content: center;
        }

        .rows-per-page {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div align="center">
            <svg width="64px" height="64px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.05655 23.9708L6.86383 24.7067C5.64458 25.4589 5.58843 27.2115 6.75703 28.0402L22.8484 39.4515C23.5388 39.9411 24.4626 39.9431 25.1551 39.4565L41.3962 28.0456C42.5744 27.2178 42.5181 25.4536 41.2895 24.7026L39.8479 23.8215L38.0784 25.0839L40.2464 26.4091L24.0054 37.8201L7.91396 26.4088L9.84309 25.2186L8.05655 23.9708ZM33.4418 22.2498L24.0049 16.4814L14.4796 22.3581L12.693 21.1103L22.9547 14.7793C23.596 14.3837 24.4051 14.382 25.0479 14.775L35.2113 20.9873L33.4418 22.2498Z" fill="#3276c3"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0048 9.48139L7.91391 19.4087L24.0053 30.82L40.2464 19.4091L24.0048 9.48139ZM6.86378 17.7066C5.64453 18.4588 5.58838 20.2114 6.75698 21.0401L22.8484 32.4514C23.5388 32.941 24.4626 32.943 25.1551 32.4565L41.3961 21.0455C42.5744 20.2177 42.518 18.4536 41.2894 17.7026L25.0479 7.77494C24.4051 7.38199 23.5959 7.38367 22.9547 7.77927L6.86378 17.7066Z" fill="#3276c3"></path>
                </g>
            </svg>
        </div>
        <h2 class="text-center mb-4">Update <u>DHIS2</u> Reporting Rates</h2>

        <div class="text-center">
            <button id="startUpdate" class="btn btn-primary btn-lg">START Updating Reporting Rates</button>
            <br>
            <br>
            <button id="previewData" class="btn btn-info btn-lg">Preview Data</button>
            <button id="removeAllRows" class="btn btn-danger btn-lg">Remove All Rows</button>
            <button id="removeNonNullData" class="btn btn-warning btn-lg">Remove Non-Null Data</button>
        </div>

        <div class="progress-container">
            <div class="progress">
                <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
        </div>

        <div class="log-container mt-4">
            <h5 class="mb-3">Logs:</h5>
            <pre id="log">Click the START button to start the update process...</pre>
        </div>

        <div class="data-preview mt-4">
            <h5 class="mb-3">Data Preview:</h5>

            <!-- Add a search panel and export button -->
            <div class="search-panel mt-4">
                <input type="text" id="searchInput" placeholder="Search..." class="form-control mb-3">
                <button id="exportToExcel" class="btn btn-success btn-lg">Export to Excel</button>
            </div>

            <!-- Add rows per page dropdown -->
            <div class="rows-per-page">
                <label for="rowsPerPage">Rows per page:</label>
                <select id="rowsPerPage" class="form-select">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <!-- Add pagination controls -->
            <div class="pagination-controls mt-4">
                <nav>
                    <ul class="pagination" id="pagination">
                        <!-- Pagination links will be dynamically added here -->
                    </ul>
                </nav>
                <div class="text-center mt-2">
                    <span id="pageInfo"></span>
                </div>
            </div>

            <div id="dataPreviewContent"></div>
        </div>

        <footer>
            <!--
ALTER TABLE dhis2_reporting_rates
ADD CONSTRAINT unique_reporting_rates
UNIQUE (organisationunit_id, dataset_id, facility_type, report_period, ownership_type_id, indicator_id);

To remove 

ALTER TABLE dhis2_reporting_rates DROP CONSTRAINT unique_reporting_rate;

    -->
            <!-- Built with ❤️ by <a href="https://merqconsultancy.org" target="_blank">MERQ Consultancy PLC LLC</a>-->
        </footer>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

    <script>
$(document).ready(function () {
    // Function to update progress and logs
    function updateProgressAndLogs(xhr, progressBar, log, button) {
        xhr.onprogress = function (e) {
            if (e.lengthComputable) {
                const progress = Math.floor((e.loaded / e.total) * 100);
                progressBar.css('width', progress + '%').attr('aria-valuenow', progress).text(progress + '%');
            }

            const newLog = xhr.responseText;
            log.html(newLog);  // Update log div with new log data
        };

        xhr.onload = function () {
            if (xhr.status === 200) {
                progressBar.css('width', '100%').attr('aria-valuenow', 100).text('100%');
                button.prop('disabled', false).text(button.data('original-text'));
                log.append('<pre>Operation completed successfully!</pre>');
            } else {
                log.append(`<pre>Error: ${xhr.statusText}</pre>`);
                button.prop('disabled', false).text(button.data('original-text'));
            }
        };

        xhr.onerror = function () {
            log.append('<pre>An error occurred during the operation.</pre>');
            button.prop('disabled', false).text(button.data('original-text'));
        };
    }

    // Start Update Button
    $('#startUpdate').on('click', function () {
        const button = $(this);
        const progressBar = $('#progressBar');
        const log = $('#log');

        // Reset progress bar and log
        progressBar.css('width', '0%').attr('aria-valuenow', 0).text('0%');
        log.html('Click the button to start the update process...');
        button.prop('disabled', true).text('Updating...').data('original-text', 'START Updating Reporting Rates');

        // Start the update process
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'update_reportingrates.php', true);
        //xhr.open('GET', '../api/dhis2/apis/update_reportingrates.php', true);
        updateProgressAndLogs(xhr, progressBar, log, button);
        xhr.send();
    });



    // Remove All Rows Button
    $('#removeAllRows').on('click', function () {
        const button = $(this);
        const log = $('#log');

        button.prop('disabled', true).text('Removing...').data('original-text', 'Remove All Rows');

        // Send request to remove all rows
        $.ajax({
            url: 'remove_all_rows.php', // Create this file to remove all rows
            //url: '../api/dhis2/apis/remove_all_rows.php', // Create this file to remove all rows
            method: 'GET',
            success: function (response) {
                log.append('<pre>All rows removed successfully.</pre>');
            },
            error: function (xhr, status, error) {
                log.append(`<pre>Error removing rows: ${error}</pre>`);
            },
            complete: function () {
                button.prop('disabled', false).text(button.data('original-text'));
            }
        });
    });

    // Remove Non-Null Data Button
    $('#removeNonNullData').on('click', function () {
        const button = $(this);
        const log = $('#log');

        button.prop('disabled', true).text('Removing...').data('original-text', 'Remove Non-Null Data');

        // Send request to remove non-null data
        $.ajax({
            url: 'remove_non_null_data.php', // Create this file to remove non-null data
            //url: '../api/dhis2/apis/remove_non_null_data.php', // Create this file to remove non-null data
            method: 'GET',
            success: function (response) {
                log.append('<pre>Non-null data removed successfully.</pre>');
            },
            error: function (xhr, status, error) {
                log.append(`<pre>Error removing non-null data: ${error}</pre>`);
            },
            complete: function () {
                button.prop('disabled', false).text(button.data('original-text'));
            }
        });
    });
});

$(document).ready(function () {
    let currentPage = 1;
    let itemsPerPage = 10; // Default rows per page
    let allData = []; // Store all data for pagination and search
    let sortColumn = null; // Track the current sort column
    let sortDirection = 1; // 1 for ascending, -1 for descending

    // Function to render the table with paginated data
    function renderTable(data, page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const paginatedData = data.slice(start, end);

        let table = '<table class="table table-bordered">';
        table += '<thead><tr>';
        for (let key in paginatedData[0]) {
            table += `<th>${key}</th>`;
        }
        table += '</tr></thead><tbody>';
        paginatedData.forEach(row => {
            table += '<tr>';
            for (let key in row) {
                table += `<td>${row[key]}</td>`;
            }
            table += '</tr>';
        });
        table += '</tbody></table>';
        $('#dataPreviewContent').html(table);

        // Add sorting functionality to table headers
        $('#dataPreviewContent th').on('click', function () {
            const column = $(this).text();
            if (sortColumn === column) {
                sortDirection *= -1; // Toggle sort direction
            } else {
                sortColumn = column;
                sortDirection = 1; // Default to ascending
            }
            sortData(column, sortDirection);
            renderTable(allData, currentPage);
        });
    }

    // Function to sort data
    function sortData(column, direction) {
        allData.sort((a, b) => {
            if (a[column] < b[column]) return -1 * direction;
            if (a[column] > b[column]) return 1 * direction;
            return 0;
        });
    }

function updatePaginationControls(data, page) {
    const totalPages = Math.ceil(data.length / itemsPerPage);
    const pagination = $('#pagination');
    pagination.empty();
    const range = 3; // Number of pages to show before/after current page

    // Add "First" and "Previous" buttons
    pagination.append(`
        <li class="page-item ${page === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="1">First</a>
        </li>
        <li class="page-item ${page === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="${page - 1}">Previous</a>
        </li>
    `);

    // Show first few pages
    if (page > range + 1) {
        pagination.append(`<li class="page-item"><a class="page-link" href="#" data-page="1">1</a></li>`);
        pagination.append(`<li class="page-item disabled"><span class="page-link">...</span></li>`);
    }

    // Show pages within range
    for (let i = Math.max(1, page - range); i <= Math.min(totalPages, page + range); i++) {
        pagination.append(`
            <li class="page-item ${i === page ? 'active' : ''}">
                <a class="page-link" href="#" data-page="${i}">${i}</a>
            </li>
        `);
    }

    // Show last few pages
    if (page < totalPages - range) {
        pagination.append(`<li class="page-item disabled"><span class="page-link">...</span></li>`);
        pagination.append(`<li class="page-item"><a class="page-link" href="#" data-page="${totalPages}">${totalPages}</a></li>`);
    }

    // Add "Next" and "Last" buttons
    pagination.append(`
        <li class="page-item ${page === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="${page + 1}">Next</a>
        </li>
        <li class="page-item ${page === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="${totalPages}">Last</a>
        </li>
    `);

    // Update page info
    $('#pageInfo').text(`Page ${page} of ${totalPages} | ${data.length} rows`);
}

    // Preview Data Button
    $('#previewData').on('click', function () {
        const button = $(this);
        const log = $('#log');
        const dataPreviewContent = $('#dataPreviewContent');

        button.prop('disabled', true).text('Loading...').data('original-text', 'Preview Data');

        // Fetch data from the database
        $.ajax({
            url: 'fetch_data.php',
            //url: '../api/dhis2/apis/fetch_data.php',
            method: 'GET',
            success: function (response) {
                try {
                    if (response.error) {
                        log.append(`<pre>Error: ${response.error}</pre>`);
                    } else if (response.message) {
                        log.append(`<pre>${response.message}</pre>`);
                    } else if (response.data) {
                        allData = response.data;
                        renderTable(allData, currentPage);
                        updatePaginationControls(allData, currentPage);
                        log.append('<pre>Data preview loaded successfully.</pre>');
                    }
                } catch (e) {
                    log.append(`<pre>Error parsing response: ${e.message}</pre>`);
                }
            },
            error: function (xhr, status, error) {
                log.append(`<pre>Error fetching data: ${error}</pre>`);
            },
            complete: function () {
                button.prop('disabled', false).text(button.data('original-text'));
            }
        });
    });

    // Pagination controls
    $(document).on('click', '.page-link', function (e) {
        e.preventDefault();
        const page = parseInt($(this).data('page'));
        if (!isNaN(page)) {
            currentPage = page;
            renderTable(allData, currentPage);
            updatePaginationControls(allData, currentPage);
        }
    });

    // Search functionality
    /*
    $('#searchInput').on('input', function () {
        const searchTerm = $(this).val().toLowerCase();
        const filteredData = allData.filter(row => {
            return Object.values(row).some(value => 
                value.toString().toLowerCase().includes(searchTerm)
            );
        });
        renderTable(filteredData, 1);
        updatePaginationControls(filteredData, 1);
    });
*/

$(document).ready(function () {
    // Live search functionality
    $("#searchInput").on("keyup", function () {
        let value = $(this).val().toLowerCase();
        
        $("#dataPreviewContent table tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
        //renderTable(filteredData, 1);
        //updatePaginationControls(filteredData, 1);

    });
});



    // Rows per page dropdown
    $('#rowsPerPage').on('change', function () {
        itemsPerPage = parseInt($(this).val());
        renderTable(allData, 1);
        updatePaginationControls(allData, 1);
    });

    // Export to Excel functionality
    $('#exportToExcel').on('click', function () {
        const button = $(this);
        button.prop('disabled', true).text('Exporting...').data('original-text', 'Export to Excel');

        // Convert data to Excel format
        const ws = XLSX.utils.json_to_sheet(allData);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "Data");

        // Generate file name with current date and time
        const currentDate = new Date().toISOString().slice(0, 19).replace(/[-T:/]/g, '');
        const fileName = `DHIS2_Reporting_Rates_Data_Fetched_${currentDate}.xlsx`;

        XLSX.writeFile(wb, fileName);

        button.prop('disabled', false).text(button.data('original-text'));
    });
});
    </script>
</body>

</html>

