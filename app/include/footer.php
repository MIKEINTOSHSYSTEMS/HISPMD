<br>
<br>
<link rel="stylesheet" href="../calendar/eth/ethcal.css">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Orbitron'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Aldrich'><link rel="stylesheet" href="../../calendar/eth/ethcal.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<br>
<!---->

<div class="calendar-container" align="center">
  <div class="ethiopian-calendar">
    <h4>ዛሬ ቀኑ</h4>
    <?php
    require_once "../calendar/eth/ethcal.php";
    $EC = new EthiopianCalendar(date("Y-m-d"));
    $EC->ECDrawCalendar();
    ?>
  </div>


  <div class="gregorian-calendar">
    <h4>Today's Date</h4>
    <?php
    $EC->GCDrawCalendar();
    ?>
  </div>
</div>


<!---->


<br>
<br>
<div align="center">
<p><u>Health Information Systems Performance Monitoring Dashboard</u><b> [HISPMD]</b> | <b><i>Version 0.1</i></b> | <b>Ministry of Health Ethiopia.</b> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved. | Designed & Developed By <a href="https://merqconsultancy.org"><b><i>MERQ Consultancy</i></b></a> </p>    
</div>