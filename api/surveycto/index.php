<!DOCTYPE html>
<html>
<head>
    <title>SurveyCTO Fetch Data Ethiopia Prism DUP Project</title>
</head>
<body>
<br>
<h3>Prism DUP Project</h3>
<h4>SurveyCTO Fetch and Refresh Data</h4>



<?php
session_start();
if (isset($_SESSION['message'])) {
    echo '<div style="color: green; font-weight: bold;">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']);
}
?>
<br>

<button onclick="window.location.href='./ethprism/rpdt_dist_lev.php'"><b>01 National PRISM Woreda level Diagnostic<b> </button>
<button onclick="window.location.href='./ethprism/facility_level_rhis_performance_diagnostic.php'"><b> 02 Facility Level RHIS Performance Diagnostic<b> </button>
<button onclick="window.location.href='./ethprism/modii_rpdt_hp_lev.php'"><b> 03 Health Post Level RHIS Performance Diagnostic<b> </button>
<button onclick="window.location.href='./ethprism/facility_office_checklist.php'"><b> 04 Facility Office Checklist<b> </button>
<button onclick="window.location.href='./ethprism/organizational_and_behavioral_assessment.php'"><b>05 Organizational and Behavioral Assessment<b> </button>
<br>
<br>
<br>
<p> Additional Data</p>
<button onclick="window.location.href='./ethprism/additional_organizational_and_behavioral_assessment.php'">Additional Organizational and Behavioral Assessment</button>
<button onclick="window.location.href='./ethprism/cbmp.php'">NULL CBMP Organizational and Behavioral Assessment</button>

<br><br>
<h5>NOTE:<i> Please Click on the SurveyCTO data you want to Fetch and Refresh Data For!</i></h5>

</body>
</html>
