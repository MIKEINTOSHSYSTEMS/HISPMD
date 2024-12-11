<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Chart & Visualization Builder</title>
    <script src="../script/anychart-ui.min.js"></script>  
    <script src="../script/visualization_bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../style/anychart-ui.min.css">


  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./main.css">

    <!--
    
    <link rel="stylesheet" type="text/css" href="./public/style/anychart-font.min.css"/>
    -->
    
    <!--
    <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.13.0/css/anychart-ui.min.css">
    -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.anychart.com/releases/8.13.0/fonts/css/anychart-font.min.css"/>


</head>
<body>
<!-- partial:index.partial.html -->

<div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img src="/app/moh_white.png" alt="Health Information System Performance Monitoring Dashboard (HISPMD)" width="50%" class="">
        <!--
<a href="#"><i class="fa fa-home"></i>Home</a>
        <h5>HISPMD Data Visualizer & Chart Builder</h5>
-->
    </div>

<br>
<br>
        
      <li class="active">
            <div class="filters">


                <label for="indicatorGroup">Indicator Group:</label>
                <select id="indicatorGroup" onchange="applyFilters()"><option value="">All</option><option value="Data Quality">Data Quality</option><option value="HIS Governance">HIS Governance</option><option value="Others">Others</option><option value="Data Use">Data Use</option><option value="Digital Health">Digital Health</option><option value="IR Pathway">IR Pathway</option></select>

                <label for="indicator">Indicator(s): Multi Select</label>
                <select id="indicator" onchange="applyFilters()" multiple=""><option value="">All</option><option value="Percentage of health facilities with a VF within acceptable range -SBA">Percentage of health facilities with a VF within acceptable range -SBA</option><option value="Proportion of health facilities which reported out of stock selected registers by health facility and by type of register">Proportion of health facilities which reported out of stock selected registers by health facility and by type of register</option><option value="Proportion of health facilities which conduct LQAS - Service Report">Proportion of health facilities which conduct LQAS - Service Report</option><option value="Proportion of deaths notified by health facility">Proportion of deaths notified by health facility</option><option value="Proportion of health facilities (Hospitals and health centers) which have standardized medical record unit (MRU)">Proportion of health facilities (Hospitals and health centers) which have standardized medical record unit (MRU)</option><option value="Reporting timeliness - Service Report">Reporting timeliness - Service Report</option><option value="Ratio of HMIS versus EDHS data - SBA">Ratio of HMIS versus EDHS data - SBA</option><option value="Proportion of health facilities with Adequate shelves by health facility">Proportion of health facilities with Adequate shelves by health facility</option><option value="Reporting completeness - Representative - Service">Reporting completeness - Representative - Service</option><option value="Information use index (average Information Use score)">Information use index (average Information Use score)</option><option value="Proportion of health administration units that conducted Routine Data quality assessments (RDQA)">Proportion of health administration units that conducted Routine Data quality assessments (RDQA)</option><option value="Percentage of health facilities with a VF within acceptable range -PENTA -3">Percentage of health facilities with a VF within acceptable range -PENTA -3</option><option value="Proportion of sites that have a functioning computer dedicated for DHIS2/eHMIS">Proportion of sites that have a functioning computer dedicated for DHIS2/eHMIS</option><option value="Proportion of woredas by IR status">Proportion of woredas by IR status</option><option value="Proportion of health institutions with an active and functional Performance Monitoring Team (PMT)">Proportion of health institutions with an active and functional Performance Monitoring Team (PMT)</option><option value="Reporting completeness - Content">Reporting completeness - Content</option><option value="Number of health institutions that disseminated publications/ best practices/ analytic reports to the stakeholders/ public (Newsletters, bulletins, brochure, etc.)">Number of health institutions that disseminated publications/ best practices/ analytic reports to the stakeholders/ public (Newsletters, bulletins, brochure, etc.)</option><option value="Proportion of health institutions by IR status">Proportion of health institutions by IR status</option><option value="Proportion of birth notified by health facility">Proportion of birth notified by health facility</option><option value="HIS workforce core competency index">HIS workforce core competency index</option></select>

                <br>

                <label for="dataSource">Data Source:</label>
                <select id="dataSource" onchange="applyFilters()"><option value="">All</option><option value="DQR">DQR</option><option value="PRISM Assessment">PRISM Assessment</option><option value="RDQA - comprehensive">RDQA - comprehensive</option><option value="Admin Report">Admin Report</option><option value="IR Assessment">IR Assessment</option></select>

                <label for="dataSourceDetail">Data Source Detail:</label>
                <select id="dataSourceDetail" onchange="applyFilters()"><option value="">All</option><option value="Emerging">Emerging</option><option value="Candidate - low">Candidate - low</option><option value="Model">Model</option><option value="Candidate - High">Candidate - High</option></select>

                <label for="scope">Scope:</label>
                <select id="scope" onchange="applyFilters()"><option value="">All</option><option value="National">National</option><option value="Regional">Regional</option></select>

                <label for="region">Region:</label>
                <select id="region" onchange="applyFilters()"><option value="">All</option><option value="Amhara">Amhara</option><option value="Dire Dawa">Dire Dawa</option><option value="Addis Ababa">Addis Ababa</option><option value="Benishangul-Gumuz">Benishangul-Gumuz</option><option value="South West Ethiopia">South West Ethiopia</option><option value="Harari">Harari</option><option value="Somali">Somali</option><option value="Afar">Afar</option><option value="Gambella">Gambella</option><option value="Sidama">Sidama</option><option value="Tigray">Tigray</option><option value="South Ethiopia">South Ethiopia</option><option value="Oromia">Oromia</option><option value="National Average">National Average</option></select>

                <label for="administrationUnit">Administration Unit:</label>
                <select id="administrationUnit" onchange="applyFilters()"><option value="">All</option><option value="WorHO">WorHO</option></select>

                <label for="facilityType">Facility Type:</label>
                <select id="facilityType" onchange="applyFilters()"><option value="">All</option><option value="Hospital">Hospital</option><option value="Health Center">Health Center</option><option value="Public HF">Public HF</option><option value="Health Post">Health Post</option><option value="Non-Public Health Facilities">Non-Public Health Facilities</option></select>

                <label for="year">Year:</label>
                <select id="year" onchange="applyFilters()"><option value="">All</option><option value="2018">2018</option><option value="2022">2022</option><option value="2023">2023</option><option value="2021">2021</option><option value="2024">2024</option><option value="2016">2016</option><option value="2019">2019</option></select>


                <br>

                <label for="xAxis">Group By:</label>
                <select id="xAxis" onchange="applyFilters()">
                    <option value="year">Year</option>
                    <option value="indicator">Indicator</option>
                    <option value="region">Region</option>
                    <option value="dataSource">Data Source</option>
                    <option value="dataSourceDetail">Data Source Detail</option>
                    <option value="facilityType">Facility Type</option>
                    <option value="administrationUnit">Administration Unit</option>
                </select>
                <br>
                <br>
                <label for="chartType">Select Chart Type</label>
                <select id="chartType" onchange="applyFilters()">
                    <option value="column">Column</option>
                    <option value="bar">Bar</option>
                    <option value="line">Line</option>
                    <option value="area">Area</option>
                    <option value="pie">Pie</option>
                </select>
                <br>

            </div>

                    <br>
        <br>
        
        <ul>
            <li><a href="#filtered-chart" onclick="showSection('filtered-chart')">HISPMD Data Visualizer</a></li>
            <li><a href="#settings" onclick="showSection('settings')">Settings</a></li>
            <li><a href="#about" onclick="showSection('about')">About</a></li>
        </ul>

<!-- 
        <div id="sidebar">
</div>
            
    <ul class="sidebar-nav">            
      </li>
      <li>
        <a href="#"><i class="fa fa-plug"></i>Plugins</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-user"></i>Users</a>
      </li>
    </ul>

-->
  </aside>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle"> <i class="fa fa-bars"> HISPMD Data Visualizer & Chart Builder </i>  </a>
        </div>
      </div>
    </nav>
  </div>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Filtered Chart Section -->
        <div id="filtered-chart" class="section">
            <!--<h2>HISPMD Chart & Visualization Builder</h2>-->
            
            <!--

                <label for="chartType">Chart Type:</label>
                <select id="chartType" onchange="applyFilters()">
                    <option value="column">Column</option>
                    <option value="bar">Bar</option>
                    <option value="line">Line</option>
                    <option value="area">Area</option>
                    <option value="pie">Pie</option>
                </select>
                <br>
                -->
                
            <!-- Chart Container -->
            <div id="container"></div>
        </div>

        <!-- Settings Section -->
        <div id="settings" class="section" style="display:none;">
            <h2>Settings</h2>
            <p>Adjust your chart settings and data preferences here.</p>
        </div>

        <!-- About Section -->
        <div id="about" class="section" style="display:none;">
            <h2>About</h2>
            <p>This is a data visualization tool that allows you to filter and display various types of charts using the data from the API.</p>
        </div>


<!--
  <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="content-title">Test</h2>
          <p>Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...Lorem ipsum...</p>
        
          
        
        
        </div>
      </div>
  </section>

-->


  
</div>
<!-- partial -->
  <script  src="./main.js"></script>

</body>
</html>
