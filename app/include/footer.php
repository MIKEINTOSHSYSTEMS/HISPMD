<!-- Linking necessary styles and scripts -->
<link rel="stylesheet" href="../calendar/eth/ethcal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
<link rel="stylesheet" href="../../calendar/eth/ethcal.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<!-- Calendar container with responsive styling -->
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

<!-- Footer content with responsive styling -->
<div align="center">
  <p>
    <u>Health Information Systems Performance Monitoring Dashboard</u>
    <b> [HISPMD]</b> | <b><i>Version 0.1</i></b> | <b>Ministry of Health Ethiopia.</b> © 
    <script>document.write(new Date().getFullYear())</script> 
    All Rights Reserved. | Designed & Developed By 
    <a href="https://merqconsultancy.org"><b>MERQ Consultancy</b></a>
  </p>    
</div>

<!-- Responsive styling to make the footer visible on all devices -->
<style>
  .calendar-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 10px;
  }

  .ethiopian-calendar, .gregorian-calendar {
    margin: 10px;
    padding: 10px;
    /*border: 1px solid #ddd;*/
    width: 100%;
    max-width: 400px;
  }

  /* Footer styles */
  p {
    font-size: 14px;
    line-height: 1.5;
    color: #333;
    margin: 0;
    padding: 10px;
  }

  a {
    color: #007bff;
    text-decoration: none;
  }

  /* Responsive footer */
  @media (max-width: 768px) {
    .calendar-container {
      flex-direction: column;
    }

    .ethiopian-calendar, .gregorian-calendar {
      width: 100%;
      max-width: 100%;
    }

    p {
      font-size: 12px;
    }
  }

  @media (max-width: 480px) {
    p {
      font-size: 11px;
    }
  }
</style>
