<html><head></head><body><html>

<link rel="stylesheet" href="../../calendar/eth/ethcal.css">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Orbitron'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Aldrich'><link rel="stylesheet" href="./calendar/eth/ethcal.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<head>
    <link href="assets/img/mohfavicon.png" rel="icon">
    <style>
            body {

             /* 
            background-color: #00274c;
            margin: 0;
            padding: 0;
             Optional: Sets default text color to white for better readability color: #FFFFFF; */

        }
    </style>
</head>
<body>
  <div class="">
      <div style="display: flex; justify-content: space-between; background-color: #00274c;">
    <div style="text-align: left; color: white;"> <br /> <strong> 👋 <script>
function getGreeting() {
    var now = new Date();
    var hour = now.getHours();

    if (hour < 12) {
        return " እንደምን አደሩ! ";
    } else if (hour < 18) {
        return " እንደምን ዋሉ! ";
    } else if (hour < 22) {
        return " አንደምን አመሹ! ";
    } else {
        return " ደህና እደሩ! ";
    }
}

document.write(getGreeting());
  </script>
 </br> 
<script>
function getGreeting() {
  var now = new Date();
  var hour = now.getHours();

  if (hour < 12) {
    return "Good Morning!";
  } else if (hour < 18) {
    return "Good Day!";
  } else if (hour < 22) {
    return "Good Evening!";
  } else {
    return "Good Night!";
  }
}

document.write(getGreeting());
</script></strong></div>
    <div style="text-align: center;"></br><img src="./images/Moh_Logo.png" width="25px" height="25px" /> <span style="color: #FFFFFF;"> <font size="5px"> <strong> ጤና ጥበቃ ሚኒስቴር - ኢትዮጵያ </strong> |  Ministry Of Health - Ethiopia </font> <br />Health Information Systems Performance Monitoring Dashboard (HISPMD)</span></div>
    <div style="text-align: right; color: #FFF;">

<div id="MyClockDisplay" class="headerclock" onload="showTime()"></div>
  <script  src="../../calendar/eth/ethcal.js"></script>
  <div id="GregClockDisplay" class="headerclock" onload="showTimeGreg()"></div>
  <script  src="../../calendar/eth/ethcalgreg.js"></script>
  <div id="date"></div>

  <script>
    // Get the current date
    var today = new Date();

    // Format the date as you prefer (YYYY-MM-DD)
    var formattedDate = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();

    // Display the date in the HTML element
    document.getElementById("date").innerHTML = formattedDate;
  </script>

    </div>
  </div>
      </div>
<h4 style="background-color: #00274c;" align="center"></h4>
<span style="color: #3a79db;"></span>


</body>

<!--
<br>
<div align=center>
<p><img src="moh_white.png" alt="Health Information System Performance Monitoring Dashboard (HISPMD)" width="147" height="47" class="mCS_img_loaded" /></p>
<h4><p>Health Information Systems Performance Monitoring Dashboard (HISPMD)</p></h4>
</div>
<br>
-->
</html>

    


</body></html>