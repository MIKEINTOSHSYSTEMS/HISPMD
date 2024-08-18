<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurveyCTO Fetch Data Ethiopia Prism DUP Project</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background: rgba(255, 255, 255, 0.8) url("loading01.gif") center no-repeat;
        }
        body {
            text-align: center;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .btn-custom {
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
        }
        .title {
            margin-bottom: 30px;
        }
        .additional-data {
            margin-top: 50px;
        }
        .note {
            margin-top: 30px;
            font-style: italic;
        }
        body.loading {
            overflow: hidden;
        }
        body.loading .overlay {
            display: block;
        }
    </style>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function fetchData(url) {
            $.ajax({
                url: url,
                method: 'GET',
                beforeSend: function() {
                    $("body").addClass("loading");
                },
                success: function(data) {
                    $("body").html(data);
                    $("body").removeClass("loading");
                },
                error: function() {
                    $("body").removeClass("loading");
                    alert("An error occurred while fetching the data.");
                }
            });
        }

        $(document).on("click", "button", function() {
            var url = $(this).attr("data-url");
            fetchData(url);
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="title">
            <h3>Prism DUP Project</h3>
            <h4>SurveyCTO Fetch and Refresh Data</h4>
        </div>
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        ?>
        <div>
            <button class="btn btn-primary btn-custom" data-url="./ethprism/rpdt_dist_lev.php">01 National PRISM Woreda Level Diagnostic</button>
            <button class="btn btn-primary btn-custom" data-url="./ethprism/facility_level_rhis_performance_diagnostic.php">02 Facility Level RHIS Performance Diagnostic</button>
            <button class="btn btn-primary btn-custom" data-url="./ethprism/modii_rpdt_hp_lev.php">03 Health Post Level RHIS Performance Diagnostic</button>
            <button class="btn btn-primary btn-custom" data-url="./ethprism/facility_office_checklist.php">04 Facility Office Checklist</button>
            <button class="btn btn-primary btn-custom" data-url="./ethprism/organizational_and_behavioral_assessment.php">05 Organizational and Behavioral Assessment</button>
        </div>
        <div class="additional-data">
            <h5>Additional Data</h5>
            <button class="btn btn-secondary btn-custom" data-url="./ethprism/additional_organizational_and_behavioral_assessment.php">Additional Organizational and Behavioral Assessment</button>
            <button class="btn btn-secondary btn-custom" data-url="./ethprism/cbmp.php">NULL CBMP Organizational and Behavioral Assessment</button>
        </div>
        <div class="note">
            <h5>NOTE:</h5>
            <p>Please click on the SurveyCTO data you want to fetch and refresh data for!</p>
        </div>
        <div class="overlay"></div>
    </div>
</body>
</html>
