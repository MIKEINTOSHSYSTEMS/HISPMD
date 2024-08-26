<!--START-CALENDAR-->

<link rel="stylesheet" href="./ethcal.css">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Orbitron'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Aldrich'><link rel="stylesheet" href="./ethcal.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<br>
<br>
<div class="calendar-container">
  <div class="ethiopian-calendar">
    አሁን ሰዓቱ
<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
  <script  src="./ethcal.js"></script>
    <h4>ዛሬ ቀኑ</h4>
    <?php
    require_once "./ethcal.php";
    $EC = new EthiopianCalendar(date("Y-m-d"));
    $EC->ECDrawCalendar();
    ?>
  </div>


  <div class="gregorian-calendar">
    Current Time
  <div id="GregClockDisplay" class="clock" onload="showTimeGreg()"></div>
  <script  src="./ethcalgreg.js"></script>
    <h4>Today's Date</h4>
    <?php
    $EC->GCDrawCalendar();
    ?>
  </div>
</div>
<!--END-CALENDAR-->