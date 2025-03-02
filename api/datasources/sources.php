<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Data Sources and Descriptions</title>
    <!--<link rel="stylesheet" href="./style/all.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            display: flex;
            justify-content: start;
            align-items: center;
            flex-direction: column;
            
            height: 100%;
            width: auto;
            /*padding: 20px;*/
            padding: 20px;
        }

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
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
            cursor: pointer;
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
            width: 80%; /* Could be more or less, depending on screen size */
            border-radius: 12px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
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

    </style>
</head>
<body>
<!--
    <div class="intro">
        <img src="../../app/images/MOH_logo_text_250.png" width="100" height="100" alt="MOH Logo">
        <h2>Welcome to Our Interactive Health Information Systems Performance Monitoring Dashboard!</h2>
        <br>
        <p>Below you will find a set of data source cards that represent key sources used in the making and development of this dashboard. <br>Click on each title to reveal more details about the source.</p>
        <h6>For better user experience we recommend using a computer or desktop view!</h6>
    </div>
    -->
<style>
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

<div class="intro">
    <h2>Welcome to</h2>
    <h1>The Ethiopian Health Information System (HIS) Performance Monitoring Dashboard</h1>
</div>

<script>
</script>

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
        <a href="https://moh.gov.et" target="_blank" style="text-decoration: none; color: inherit;">The Ministry of Health – Ethiopia</a></span> developed this dashboard to routinely monitor the performance of the Ethiopian Health Information System. This dashboard illustrates the HIS performance in terms of data quality, data use, digital health, HIS governance, and information revolution pathways. The indicators used in the dashboard were selected and prioritized through a collaborative co-design process involving relevant stakeholders. It utilizes diverse data sources from the routine health information system, surveys, and review reports. To assist in interpreting the indicator values, a brief description of the data sources is provided.</p>
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
            ]
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
</body>
</html>
