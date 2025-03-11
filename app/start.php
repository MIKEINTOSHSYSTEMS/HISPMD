<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HISPMD - Health Information Systems Performance Management Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/dist/flipdown.min.css">
  <meta name="description" content="">
  <meta name="keywords" content="">

<!--
<LINK rel="shortcut icon" type="image/png" href="./assets/img/mohfavicon.png" />  
<link href="assets/img/mohfavicon.png" rel="icon">
<LINK rel="shortcut icon" type="image/png" href="mohfavicon.png" />
-->

  <!-- Favicons -->
  <link href="assets/img/mohfavicon.png" rel="icon">
 
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/internalmain.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//hispmd.merqconsultancy.org/analytics/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
<!--
                <div _ngcontent-kyh-c0=""><a _ngcontent-kyh-c0="" class="navbar-brand"><div _ngcontent-kyh-c0=""><h5 _ngcontent-kyh-c0="">ጤና ሚኒስቴር - ኢትዮጵያ</h5></div><div _ngcontent-kyh-c0=""><h5 _ngcontent-kyh-c0="">MINISTRY OF HEALTH - ETHIOPIA</h5></div></a></div>

-->
        <img src="./Moh_Logo.png" alt="Health Information System Performance Monitoring Dashboard (HISPMD)" width="" height="" class="mCS_img_loaded"><h1 class="sitename">HISPMD</h1>

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Home</a></li>
          <!--<li><a href="#about">About</a></li>-->
          <li><a href="#datasources">Data Sources</a></li>
          <li><a href="#dashboard">Dashboard</a></li>
          <li><a href="../docs/">Documentation</a></li>
          <!--<li><a href="#gallery">Support</a></li>
          <li><a href="./main_list.php">Knowledge Base</a></li>-->
          <!--<li><a href="#team">Documentation</a></li>-->
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown"><a href="./login.php"><span><b>Account<b></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
<!--
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
-->
          </li>
          <li>
            <!-- mibew button --><a id="mibew-agent-button" href="/app/chat/chat?locale=en&amp;style=default" target="_blank" onclick="Mibew.Objects.ChatPopups['66d612944de9fd8e'].open();return false;"><img src="/app/chat/b?i=simple&amp;lang=en" border="0" alt="" /></a><script type="text/javascript" src="/app/chat/js/compiled/chat_popup.js"></script><script type="text/javascript">Mibew.ChatPopup.init({"id":"66d612944de9fd8e","url":"\/app\/chat\/chat?locale=en&style=default","preferIFrame":true,"modSecurity":false,"forceSecure":false,"style":"default","height":480,"width":640,"resizable":true,"styleLoader":"\/app\/chat\/chat\/style\/popup\/default"});</script><div id="mibew-invitation"></div><script type="text/javascript" src="/app/chat/js/compiled/widget.js"></script><script type="text/javascript">Mibew.Widget.init({"inviteStyle":"\/app\/chat\/styles\/invitations\/default\/invite.css","requestTimeout":10000,"requestURL":"\/app\/chat\/widget","silentInvitation":true,"locale":"en","visitorCookieName":"MIBEW_VisitorID"})</script><script type="text/javascript">(function() {var img = document.getElementById("mibew-agent-button").getElementsByTagName("img")[0];var originalSrc = img.src;setInterval(function() {img.src = originalSrc + "&dummy=" + (new Date()).getTime();}, 3000);})();</script><!-- / mibew button -->
        </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        
      </nav>

    </div>
  </header>

  <main class="main">

  <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <!--
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            <img src="assets/img/mfr_hero.png" class="img-fluid animated" alt="">
            -->
            
            
            <img src="MOH_logo_text_white.png" class="img-fluid animated" alt="">
            <!--
            <img src="MOH_logo_text.png" class="img-fluid animated" alt="">
            <img src="assets/img/hispmd_landing_hero.png" class="img-fluid animated" alt="">
            -->
            
          </div>
<div>
<script>
//function getGreeting() {
  //  var now = new Date();
//    var hour = now.getHours();

   // if (hour < 12) {
   //     return "እንደምን አደሩ!";
   // } else if (hour < 18) {
    //    return "እንደምን ዋሉ!";
   // } else if (hour < 22) {
    //    return "አንደምን አመሹ!";
   // } else {
    //    return "ደህና እደሩ!";
  //  }
//}

document.write(getGreeting());
  </script>
<br>
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
</script>
</div>
          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Welcome to <span>HISPMD</span></h1>
            <p>Health Information Systems Performance Monitoring Dashboard</p>
            
            <div class="d-flex">
              <a href="index.htm" class="btn-get-started">Get Started</a>
            <!--
              <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Login</span></a>  
            -->
            
            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>

        <g class="">
          
        </g>
      </svg>

    </section><!-- /Hero Section -->
<!--
        <div align=center>
      

<h1>Countdown</h1>
        <div id="flipdown" class="flipdown"></div>
        <br>
        <h2>Time remaining until the Launch 🚀</h2>
        <div class="buttons">
            <p id="ver"></p>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/src/flipdown.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get the current date and time
            const now = new Date();

            // Calculate the target date
            const targetDate = new Date(now.getFullYear(), now.getMonth() + 3, now.getDate() + 7, now.getHours() + 24);

            // Convert target date to Unix timestamp (in seconds)
            const targetTimestamp = Math.floor(targetDate.getTime() / 1000);

            // Set up FlipDown
            const flipdown = new FlipDown(targetTimestamp)
                // Start the countdown
                .start()
                // Do something when the countdown ends
                .ifEnded(() => {
                    console.log('Development Almost Finished, BETA System Will Launch Soon!');
                });

            // Toggle theme
            setInterval(() => {
                let body = document.body;
                body.classList.toggle('light-theme');
                body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark'); //body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
                body.querySelector('#flipdown').classList.toggle('flipdown__theme-light'); //body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
            }, 50000); //5000

            // Display FlipDown version
            //const ver = document.getElementById('ver');
            //ver.innerHTML = flipdown.version;
        });
    </script>
-->
<!--HISPMD_COUNTDOWN-->

        <div align=center>
<style>
  @layer demo, countdown;

@layer countdown{
  .countdown {
    width: fit-content;
    display: inline-grid;
    grid-auto-flow: column;
    grid-auto-columns: 1fr;
    gap: 1rem;
  }
  .countdown > .part {
    display: grid;
    gap: 0.5rem;
  }
  .countdown > .part > .number {
    aspect-ratio: 1;
    display: grid;
    place-items: center;
    border-radius: 50%;
    border: 1px solid hsl(0 0% 50% / .5);
    font-size: 1.5rem;
    position: relative
  }
  .countdown > .part.days { --num: 365 }
  .countdown > .part.hours { --num: 24 }
  .countdown > .part:where(.minutes, .seconds) { --num: 60 }
  .countdown > .part > .number::after{
    content: "";
    position: absolute;
    inset: calc(var(--border-size) * -0.5);
    border-radius: inherit;

    --degree: calc(360deg / var(--num) * (var(--num) - var(--value,0)));
    background-image: conic-gradient(var(--accent) var(--degree), transparent calc(var(--degree) + 0.1deg));

    --border-size: 4px;  
    --mask-image: radial-gradient(100% 100%, transparent calc(50% - var(--border-size)), black calc(50% - var(--border-size) + 1px));
    -webkit-mask-image: var(--mask-image);
    mask-image: var(--mask-image);
  }
  .countdown > .part > .text {
    text-align: center;
    opacity: 0.75
  }
}
@layer demo {
  * { box-sizing: border-box }
  body {
    background-color: #060D1F;
    color: #FEFEFE;
    font-family: system-ui, sans-serif;
    text-align: center;
  }
  h2 {
    margin-top: 4rem;
  }
}
  </style>

  <!--

-->




<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            /*background-color: #f5f5f5; /*Light Grey */
            background-color: transparent; /* Transparent */
            display: contents;
            justify-content: start;
            align-items: center;
            flex-direction: column;
            
            height: 100%;
            width: 100%;
            /*width: auto;
            padding: 20px;*/
            padding: 20px;
        }
/*
        body { font-family: 'Arial', sans-serif; background-color: transparent; display: contents; justify-content: start; align-items: center; flex-direction: column; height: 100%; width: 100%; padding: 20px; }
*/
        .intro {
            max-width: 800px;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }

        .intro p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }

        .sources_container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            width: 70%;
            max-width: 1200px;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.5s ease, box-shadow 0.3s ease;
            position: relative;
            transform: perspective(500px) rotateX(0) rotateY(0);
        }

        .card:hover {
            transform: scale(1.05) rotateX(5deg) rotateY(5deg);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .icon {
            font-size: 40px;
            color: #337ab7;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .content h3 {
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 10px;
            cursor: help;
            transition: color 0.3s ease;
        }

        .content p {
            font-size: 1rem;
            color: #666;
            display: none; /* Initially hide the description */
        }

        .card:hover .icon {
            color: #007dff;
        }

        /* Modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.5); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 40%; /* Could be more or less, depending on screen size */
            border-radius: 12px;
            text-align: justify;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            text-align: right;
        }

        .close:hover,
        .close:focus {
            color: #ff0000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Stylish buttons */
        .buttons-container {
            margin-top: 30px;
            text-align: center;
        }

        .button {
            background-color: #337ab9;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin: 0 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .button:active {
            transform: scale(1);
        }

        .intro {
            text-align: center;
            margin-bottom: 40px;
            opacity: 0; /* Initially hidden */
            transform: translateY(-20px); /* Start slightly above its final position */
            transition: opacity 1s ease-out, transform 1s ease-out; /* Smooth transition */
        }

        .intro.loaded { /* Class added by JavaScript when loaded */
            opacity: 1;
            transform: translateY(0); /* Move to final position */
        }

        .intro h2 {
            font-family: 'Open Sans', sans-serif;
            color: #2980b9;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .intro h1 {
            font-family: 'Open Sans', sans-serif;
            color: #2980b9;
            font-weight: 700;
            font-size: 2.5em;
            line-height: 1.2;
        }
        

    </style>
<section id="datasources">
<!--
<div class="intro">
    <h2>Welcome to</h2>
    <h3>The Ethiopian Health Information System (HIS) Performance Monitoring Dashboard</h3>
</div>
-->
<div style="font-family: 'Open Sans', sans-serif;
            line-height: 1.7;
            color: #333;
            text-align: justify;
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">

    <p><span style="font-weight: 600; color: #2980b9;">
        <a href="https://moh.gov.et" target="_blank" style="text-decoration: none; color: inherit;">The Ministry of Health – Ethiopia</a></span> developed this dashboard to routinely monitor the performance of the Ethiopian Health Information System. This dashboard illustrates the HIS performance in terms of data quality, data use, digital health, HIS governance, information revolution pathways, structure and resource as well as other data sources. The indicators used in the dashboard were selected and prioritized through a collaborative co-design process involving relevant stakeholders. It utilizes diverse data sources from the routine health information system, surveys, and review reports. To assist in interpreting the indicator values, a brief description of the data sources is provided.</p>
</div>

<div  style="text-align: center; margin: 40px 0; /* Increased margin for better spacing */">
    <h4 style="font-family: 'Open Sans', sans-serif; /* Modern font */
               color: #2980b9;
               font-weight: 600; /* Slightly bolder */
               margin-bottom: 10px;">Key Data Sources</h4>

    <h6 style="font-family: 'Open Sans', sans-serif;
               color: #7f8c8d;
               font-weight: 400; /* Normal weight */
               margin-bottom: 5px; /* Reduced margin */
               font-size: 0.9em; /* Slightly smaller font size */">Click on each title to reveal more details about the source.</h6>

    <h6 style="font-family: 'Open Sans', sans-serif;
               color: #7f8c8d;
               font-weight: 400;
               font-size: 0.9em;">For a better user experience, we recommend using a computer or desktop view!</h6>
</div>

    <div class="sources_container">
        <?php
        // Array of cards data
        $cards = [
            [
                'icon' => 'fa fa-dna',
                'title' => 'PRISM',
                'description' => '
                Performance of Routine Information Management System in Ethiopia: A National Assessment (2024)
                MERQ, in collaboration with the JSI Data Use Partnership project and MOH, conducted a national Performance of Routine Information System Management (PRISM) assessment. This initiative aimed to provide a more holistic evaluation of RHIS-strengthening interventions, potentially leading to more targeted and effective improvements in Ethiopia\'s health information system. A cross-sectional assessment of health facilities selected using the cluster sampling method was conducted between May 12 – June 3, 2024. The health facilities covered by this assessment include 90 health posts, 120 health centres, and eight primary hospitals from 35 woredas drawn from Addis Ababa City, Sidama, Oromia, Somali, and Gambella regions. Adapted PRISM tools, including diagnostic tools and facility/office checklists, were used to assess the situation of HIS in the health institutions. The Organizational and Behavioral Assessment Tool (OBAT) was also used to interview 507 staff from these facilities. Among the components of the PRISM assessment, this assessment did not use the Management Assessment Tool (MAT) and the Electronic RHIS Performance Assessment Tool.
                
                Report on the Evaluation of Capacity Building and Mentorship Program (2022)
                A team of experts from the Policy, Planning, Monitoring and Evaluation Directorate (PPMED) of the Ministry of Health and HIS stakeholders conducted this assessment in collaboration with the JSI Data Use Partnership. This evaluation aimed to provide comprehensive information comparable with the baseline data collected at the onset of the program. The assessment was primarily based on the PRISM framework, complemented by the OECD evaluation framework to guide the qualitative assessment. The study focused on four cluster sites that included 23 woredas, 118 health centers, and 23 hospitals.
                
                Performance of Routine Information Management System In CBMP Woredas, Ethiopia: Prism Baseline Assessment Report (2018)
                This assessment was conducted by universities serving as centers of excellence for the capacity building and mentorship program (CBMP) through technical support from the Ministry of Health and the Ethiopia Data Use Partnership (DUP). The assessment covered all nine regional states (Afar, Amhara, Tigray, Benishangul Gumuz, Gambella, Harari, Oromia, SNNP, and Somali) and two city administrations (Addis Ababa and Dire Dawa) of the CBMP woredas. A cross-sectional survey design was employed among all the Woreda/Sub-city Health Offices (38), health facilities (219 public and 24 private), and selected health posts (132) found in the 35 woredas and 3 sub-cities drawn from all the regions. The OBAT tool was applied for 623 staff of the WorHOs, health facilities, and health posts.
                '
            ],
            /*            [
                'icon' => 'fa fa-chart-line',
                'title' => '',
                'description' => ''
            ],
            [
                'icon' => 'fa fa-scale-balanced',
                'title' => '',
                'description' => ''
            ],*/
            [
                'icon' => 'fa fa-code-compare',
                'title' => 'RDQA',
                'description' => '

                RDQA Comprehensive Assessment (2022)
                This assessment was conducted to assess the level of HMIS performance in terms of data management processes, reporting, and information use practices, and to identify potential challenges to data quality and use. An institution-based cross-sectional survey design was employed in regional representative samples of the public health facilities and health administrative units using qualitative and quantitative methods. Data was collected through document review, observation, interview techniques, and key informant interviews at each level of the health system. The assessment covered nine regions (Afar, Amhara, Oromia, Somali, SNNP, Sidama, South West Ethiopia, Gambella, and Harari), two city administrations, and 90 woreda health offices, including 207 health facilities (157 health centers and 50 hospitals) and 97 health posts.
                
                RDQA Comprehensive Assessment (2023)
                Following the RDQA assessment conducted in 2022, this follow-up assessment aimed to evaluate improvements made in HMIS performance and address challenges identified during the previous assessment. The findings provide insights into the effectiveness of interventions implemented over the past year. Data collection methods included interviews, surveys, and reviews of health information systems at health facilities. The assessment focused on continuity in data quality, reporting frequency, and adherence to data management protocols.
                '
            ],
            /*
            [
                'icon' => 'fa fa-code-compare',
                'title' => '',
                'description' => ''
            ],
            [
                'icon' => '',
                'title' => '',
                'description' => ''
            ],            
            */
            [
                'icon' => 'fa fa-circle-info',
                'title' => 'IR Assessment',
                'description' => '
                Information Revolution Assessment

                Encouraging results were registered during the first HSTP period (2016-2020) in terms of improving data quality, data use for evidence-based decision-making, digitalization of priority health information systems, and governance of HIS, primarily through the development and implementation of the Information Revolution (IR) Roadmap and IR model woreda strategy. Despite this progress, the IR agenda continues to be a major priority in HSTP-2 to foster cultural changes and accelerate data use within the health sector. The self-assessment report using the IR assessment tool covered 504 woreda health offices and 2,451 hospitals and health centers as of FY2016 quarter four.

                Emerging: 
                A health unit that performed low in HIS performance
                Criteria: <65% of the assessment criteria

                Low Candidate: 
                Medium performing health unit	
                Criteria: 65-80% of the assessment criteria
                
                High Candidate:
                Criteria: 81-90% of the assessment criteria

                Model:	
                High performing health unit with a score of more than 90%	
                Criteria: >90% of the assessment criteria

                End state or fully digitized model stage:
                High HIS performing health unit and implementing electronic patient level and aggregate level data management systems	
                Criteria: >90% and criteria for end state

                Demonstration Woreda:	
                Exceptionally high level of health system performance	
                Criteria: A digital woreda which:<br>
                - Conducted extensive documentation of best practices in data collection, data quality assurance, and data use practices<br>
                - Have adequate materials and preparations for demonstration of practices that include a facility to demonstrate experiences to visitors, with a person who is assigned to explain to visitors, and has produced a brochure capitulating its successes<br>
                - Conducted at least one experience sharing visit to other woredas within the last six months

                '
            ],
            [
                'icon' => 'fa fa-vector-square',
                'title' => 'DHIS2',
                'description' => '
                DHIS2 is an open-source, web-based platform most commonly used as a health management information system (HMIS). It became the world\'s largest health information management system, used by 73 low- and middle-income countries in 2022. Ethiopia adopted DHIS2 as its nationwide health information system platform in 2016 and achieved national-scale implementation in 2019. Data quality indicators (reporting timeliness, completeness, and the proportion of health facilities conducting LQAs) were included by report type, period, and organizational unit.'
            ],
            [
                'icon' => 'fa fa-border-none',
                'title' => 'DQR',
                'description' => '
                The 2018 Ethiopia Data Quality Review assessment was a cross-sectional study utilizing the World Health Organization’s Data Quality Review tool after customization to the local context. The sample size for the DQR was determined by a combination of census of hospitals and random samples of health centers and private clinics. A total of 629 health facilities, 365 Woreda/districts, 63 zones, nine regions, and two city administrative council health bureaus were included in the survey.'
            ],
            [
                'icon' => 'fab fa-scribd',
                'title' => 'SOCI',
                'description' => '
                Stages of Continuous Improvement assessment conducted on a Health Information System (HIS) to determine the current and goal status. It is a comprehensive evaluation to identify strengths, weaknesses, and areas for improvement within the HIS, using a structured framework to guide the assessment process and prioritize interventions for strengthening the system. Ethiopia has been utilizing SOCI as one of HIS performance measurement and HIS maturity index, DHIS2 maturity index and eCHIS maturity index related indicators received from SOCI assessment conducted in 2020 and 2023. '
            ],
            [
                'icon' => 'fas fa-receipt',
                'title' => 'Annual Performance Report',
                'description' => '
                Annual Performance Report 	Annual performance report (APR) is the health sector’s comprehensive report that indicates the performance and progress of the sector on yearly bases and also highlights progress over the past three to five years. It mainly describes performance against the targets and includes description of 
                the major achievements, initiatives, activities, challenges and way forwards of all programs and health system investments or inputs. Annual performance report from 2012 to 2014 included as data source for report timelines, completeness, CRVS related indicators, eMRU, eCHIS, DHIS2 coverage.'
            ]/*,
            [
                'icon' => 'fa fa-building',
                'title' => 'CRVS',
                'description' => '
                CRVS is a system that registers and certifies vital events such as births, deaths, marriages, and divorces. The system is essential for the production of vital statistics, which are used to monitor population dynamics, health, and development indicators. The CRVS system in Ethiopia is decentralized, with the Federal Vital Events Registration Agency (FVERA) overseeing the system\'s implementation. The system is composed of the civil registration system, the vital events registration system, and the vital statistics system.'
            ]  */          
        ];

        // Generate card elements
        foreach ($cards as $card) {
            echo '<div class="card">';
            echo '<div class="icon"><i class="' . $card['icon'] . '"></i></div>';
            echo '<div class="content">';
            echo '<h3>' . $card['title'] . '</h3>';
            echo '<p style="display:none;">' . $card['description'] . '</p>'; // Keep the description for modal
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
            <br>
            <br>
            <br>
            
    <!-- Modal Structure -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 id="modalTitle"></h3>
            <p id="modalDescription"></p>
        </div>
    </div>
<!--
    <div class="buttons-container">
        <a href="../app/menu.php">
            <button class="button"><i class="fa-solid fa-house"> </i> Go to Main Menu</button>
        </a>
        <a href="../app/hispmd_moh_indicators_dashboard_dashboard.php?page=hispmd_dashboard&menuItemId=1">
            <button class="button"><i class="fa-solid fa-gauge"> </i> Go to Dashboard</button>
        </a>
    </div>
    -->
    <script>
        const cardTitles = document.querySelectorAll('.content h3');
        const modal = document.getElementById("myModal");
        const modalTitle = document.getElementById("modalTitle");
        const modalDescription = document.getElementById("modalDescription");
        const span = document.getElementsByClassName("close")[0];

        cardTitles.forEach((title) => {
            title.addEventListener('click', function() {
                const description = this.nextElementSibling;
                modalTitle.innerText = this.innerText;
                modalDescription.innerText = description.innerText;
                modal.style.display = "block"; // Show the modal
            });
        });

        span.onclick = function() {
            modal.style.display = "none"; // Close the modal
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none"; // Close the modal if clicked outside
            }
        }


        window.addEventListener('load', (event) => {
        const introElement = document.querySelector('.intro');
        introElement.classList.add('loaded');
        });

        // Optional: Add a delay
        // window.addEventListener('load', (event) => {
        //     setTimeout(() => {
        //         const introElement = document.querySelector('.intro');
        //         introElement.classList.add('loaded');
        //     }, 500); // 500ms delay
        // });

    </script>
    </section>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        iframe {
            border: none;
            width: 100%;
            height: 444vh; /*height: 777vh;*/
            position: relative;
            top: 0;
            left: 0;
        }
    </style>

<section id="dashboard">
    <iframe
        id="metabase-iframe"
        src=""
        allowtransparency></iframe>

      </section>

    <script>
        // Set dashboard ID dynamically
        var dashboardId = 13; // Replace with dynamic ID if needed

        // Make a request to the PHP server to generate the iframe URL for the selected dashboard ID
        fetch('../api/meta/base.php?dashboardId=' + dashboardId)
            .then(response => response.text())
            .then(iframeUrl => {
                document.getElementById('metabase-iframe').src = iframeUrl;
            });
    </script>
<br>
<br>
<br>




    <style>
h1, h2, h3, h4, h5, h6 {
    color: #72e9ff;
    font-family: var(--heading-font);
}      
        h2{
    margin: 0;     
    color: #FFFFFF;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background: #00274ce9; /* #00274c;    */
    text-align: center;
    height: 300px !important;
}
.scrolled .header {
    --background-color: #00274ce9;
}
.carousel{
    margin-top: 20px;
}
.bs-example{
	margin: 0px; /*20px or 2px */
}
        </style>
<!-- partial:index.partial.html -->
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <h2>Data visualization</h2>
                <div class="carousel-caption">
                  <h3>Real-time</h3>
                  <p>Interactive dashboards with key performance indicators (KPIs).</p>
                  <p>

                  Customizable views for different user roles.
                  </p>
                </div>
            </div>
            <div class="item">
                <h2>Data quality</h2>
                <div class="carousel-caption">
                  <h3>Tools for identifying and addressing data quality issues.</h3>
                  <p>Data validation rules and alerts.</p>
                  <p></p>
                </div>
            </div>
            <div class="item">
                <h2>Reporting and analytics</h2>
                <div class="carousel-caption">
                  <h3>Advanced analytics capabilities for trend analysis and data visualization builder.</h3>
                  <p>Generates customized reports for different stakeholders.</p>
                  <p></p>
                </div>
            </div>
            <div class="item">
                <h2>Better decision-making</h2>
                <div class="carousel-caption">
                  <h3>Interoperable handleling Multiple data sources</h3>
                  <p>Data-driven insights to inform resource allocation and program planning.</p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>





<!--

<iframe src="start_slider.php" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="600px" allowfullscreen></iframe><div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;"></div>
   </div><style>.boxes2{height:212px;width:316px;} #new img{max-width:none!important;background:none!important}#iframe{max-height:none!important;max-width:none!important;background:none!important}</style></div>

          -->

 <!-- 
   <br>
  <br> 
 <p>Currently Undergoing System Testing</p>
  <br>
-->
        <!-- partial:index.partial.html -->

        <!--
        <h1>📅</h1> 
        <h1>Days Remaing Until... </h1>
        <h2>🧪Testing Day</h2>
<time class="countdown" date-time="2024-09-27 00:00:00" style="--accent: #3a89db"></time>
<br>
<br>
-->

<!--<h2>🚀System Launch Day</h2>
<time class="countdown" date-time="2024-12-12 00:00:00" style="--accent: green"></time>
-->
<!-- partial -->
 <!-- <script  src="../../calendar/countdown/script.js"></script>

</div>
<br>
 -->



<!--HISPMD_COUNTDOWN-->
    <!-- Page Title -->
     <!--
    <div class="page-title dark-background" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>HISPMD is Currently Under Development</h1>
              <p class="mb-0">If you have any questions or support</p>
              <p>Information Center: <a href="mailto:info@merqconsultancy.org">info@merqconsultancy.org</a></p>
              <p>Tech Support: <a href="mailto:support@merqconsultancy.org">support@merqconsultancy.org</a></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../../">Home</a></li>
            <li class="current"></li>
          </ol>
        </div>
      </nav>
    </div>
-->
    <!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Support & Information Section</h2>
        <!--<div><span>Check Our</span> <span class="description-title">Log Changes Section</span></div>-->
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

            <!--  <h1>HISPMD is Currently Under Development</h1>-->
             <!-- <p class="mb-0">If you have any questions or support</p>-->
              <p>Information Center: <a href="mailto:info@moh.gov">info@moh.gov</a></p>
              <p>Developer & Tech Support: <a href="mailto:support@merqconsultancy.org">support@merqconsultancy.org</a></p>


        <!--
        <p>HISPMD Ver0.1 [Curernt] </p>
        <p>HISPMD Ver1.0.0 Coming Soon...!</p>
      </div>
        -->

    </section><!-- /Starter Section Section -->

  </main>
  <!--
          <span class="sitename">HISPMD </span>          
          <p><b>Health Information Systems Performance Management Dashboard</b></p>
          <p><b>HISPMD</b></p>
          
            <br>
            

                      <p><b>HISPMD</b></p>
                                <br>
            <br>
            <br>
            <br>
            <br>
            <br>
-->  

<style>

/* General footer styles */
.footer {
  background-color: #00274c/* #1e1e1e;*/
  color: #fff;
  font-family: Arial, sans-serif;
}

/* Footer Top Section */
.footer-top {
  padding-bottom: 50px;
}

.footer-about h4, .footer-about h5 {
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  color: #f1f1f1;
}

.footer-contact p {
  margin: 0;
  color: #ccc;
}

.footer-contact h1.sitename {
  font-size: 22px;
  font-weight: 700;
  color: #1acc7d;
}

.footer-links h4, .footer-newsletter h4 {
  font-size: 18px;
  font-weight: 600;
  color: #1acc7d;
}

.footer-links ul {
  list-style: none;
  padding-left: 0;
}

.footer-links ul li {
  margin-bottom: 10px;
}

.footer-links a {
  color: #ccc;
  text-decoration: none;
}

.footer-links a:hover {
  color: #1acc9d;
  text-decoration: underline;
}

.social-links {
  margin-top: 20px;
}

.social-links .social-icon {
  margin-right: 20px;
  font-size: 24px;
  color: #ccc;
  transition: color 0.3s ease;
}

.social-links .social-icon:hover {
  color: #1acc9d;
}

/* Footer Bottom Section */
.footer-bottom p {
  font-size: 14px;
  color: #ccc;
  margin: 0;
}

.footer-bottom a {
  color: #1acc9d;
  text-decoration: none;
}

.footer-bottom a:hover {
  text-decoration: underline;
}

.footer-bottom img {
  vertical-align: middle;
  margin-left: 5px;
  margin-right: 5px;
}

/* Media Queries for responsiveness */
@media (max-width: 767px) {
  .footer-about, .footer-links, .footer-newsletter {
    text-align: center;
    margin-bottom: 30px;
  }

  .social-links {
    justify-content: center;
  }

  .row>* {
    flex-shrink: 0;
    width: 12%;
    max-width: 50%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
}
}

  </style>

<footer id="footer" class="footer dark-background py-5">
  <div class="container footer-top">
    <div class="row gy-4">
      <!-- About Section -->
       
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="start.php" class="logo d-flex align-items-center mb-4">
          <img src="./MOH_logo_text_white.png" alt="Health Information System Performance Monitoring Dashboard (HISPMD)" height="100%">
          <br>  
          HISPMD
            <div>

            
            <!--
              <h4>HISPMD</h4>
            <h5>Health Information Systems Performance Monitoring Dashboard</h5>
          

            <img src="./Moh_Logo.png" alt="Health Information System Performance Monitoring Dashboard (HISPMD)" height="50px">
                       <h4>ጤና ሚኒስቴር - ኢትዮጵያ</h4>
            <h5>MINISTRY OF HEALTH - ETHIOPIA</h5>
            -->
            

          </div>
        </a>
<!--
        <div class="social-links d-flex mt-4">
          <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
        </div>
-->
      </div>

      <!-- Useful Links Section -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4 class="footer-title">Useful Links</h4>
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#datasources">Data Sources</a></li>
          <li><a href="#dashboard">Dashboard</a></li>
          <li><a href="../docs/index.php">Documentation</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>

      <!-- Newsletter Section -->
      <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4 class="footer-title">Contact</h4>
          <p>1234 Sudan Street, Addis Ababa, Ethiopia</p>
          <p><strong>Phone:</strong> +251 115 517 011</p>
          <p><strong>Email:</strong> info@moh.gov.et</p>
        
      </div>
    </div>
  </div>

  <!-- Footer Bottom Section -->
  <div class="container text-center mt-5 footer-bottom">
    <p>
      Health Information Systems Performance Monitoring Dashboard <b>[HISPMD V-1.3 BUILD-Ver.2324]</b><br>
      &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved. 
      <img src="./assets/img/mohfavicon.png" alt="Ministry of Health Ethiopia" height="25px">
      <a href="https://moh.gov.et"><b>Ministry of Health Ethiopia</b></a>
      <br>Designed & Developed by <a href="https://ethiopiadup.jsi.com/">JSI DUP</a> in collaboration with 
      <a href="https://merqconsultancy.org" target="_blank"><b>MERQ Consultancy</b></a>
    </p>
  </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>