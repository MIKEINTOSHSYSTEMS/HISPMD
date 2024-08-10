<!--
<iframe src="./hispmd_menu.php" width="100%" height="700" frameborder="0"></iframe>
<iframe src="./hispmd_menu.php" width="100%" height="1200px" frameborder="0"></iframe>
<br>
-->
<link rel="stylesheet" href="../../calendar/eth/ethcal.css">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Orbitron'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Aldrich'><link rel="stylesheet" href="./calendar/eth/ethcal.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

አሁን ሰዓቱ
<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
  <script  src="../../calendar/eth/ethcal.js"></script>

Current Time
  <div id="GregClockDisplay" class="clock" onload="showTimeGreg()"></div>
  <script  src="../../calendar/eth/ethcalgreg.js"></script>

<!--
  <h4>ዛሬ | Today</h4>  
-->
<br>
<?php

require_once "../calendar/eth/ethcal.php";

// Use the following code to get the result below

$EC = new EthiopianCalendar(date("Y-m-d")); // set current GC date
//$EC = new EthiopianCalendar(date("YYYY-mm-dd")); // custom date format
//echo("Ethiopian Calendar");
echo("ዛሬ ቀኑ");
$EC->ECDrawCalendar(); // draw Ethiopian Calendar table
//echo("Gregorian Calendar");
echo("Today's Date");
$EC->GCDrawCalendar();
?>