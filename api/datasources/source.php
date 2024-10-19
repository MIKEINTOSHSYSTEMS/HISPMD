<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Data Sources and Descriptions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: start;
            align-items: center;
            flex-direction: column;
            min-height: 700vh;
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

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
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



    <div class="container">
        <?php
        // Array of cards data
        $cards = [
            [
                'icon' => 'fa fa-dna',
                'title' => 'Performance of Routine Information Management System in Ethiopia: A National Assessment (2024)',
                'description' => 'MERQ, in collaboration with the JSI Data Use Partnership project and MOH, conducted a national Performance of Routine Information System Management (PRISM) assessment. This initiative aimed to provide a more holistic evaluation of RHIS-strengthening interventions, potentially leading to more targeted and effective improvements in Ethiopia\'s health information system. A cross-sectional assessment of health facilities selected using the cluster sampling method was conducted between May 12 – June 3, 2024. The health facilities covered by this assessment include 90 health posts, 120 health centres, and eight primary hospitals from 35 woredas drawn from Addis Ababa City, Sidama, Oromia, Somali, and Gambella regions. Adapted PRISM tools, including diagnostic tools and facility/office checklists, were used to assess the situation of HIS in the health institutions. The Organizational and Behavioral Assessment Tool (OBAT) was also used to interview 507 staff from these facilities. Among the components of the PRISM assessment, this assessment did not use the Management Assessment Tool (MAT) and the Electronic RHIS Performance Assessment Tool.'
            ],
            [
                'icon' => 'fa fa-chart-line',
                'title' => 'Report on the Evaluation of Capacity Building and Mentorship Program (2022)',
                'description' => 'A team of experts from the Policy, Planning, Monitoring and Evaluation Directorate (PPMED) of the Ministry of Health and HIS stakeholders conducted this assessment in collaboration with the JSI Data Use Partnership. This evaluation aimed to provide comprehensive information comparable with the baseline data collected at the onset of the program. The assessment was primarily based on the PRISM framework, complemented by the OECD evaluation framework to guide the qualitative assessment. The study focused on four cluster sites that included 23 woredas, 118 health centers, and 23 hospitals.'
            ],
            [
                'icon' => 'fa fa-scale-balanced',
                'title' => 'Performance of Routine Information Management System In CBMP Woredas, Ethiopia: Prism Baseline Assessment Report (2018)',
                'description' => 'This assessment was conducted by universities serving as centers of excellence for the capacity building and mentorship program (CBMP) through technical support from the Ministry of Health and the Ethiopia Data Use Partnership (DUP). The assessment covered all nine regional states (Afar, Amhara, Tigray, Benishangul Gumuz, Gambella, Harari, Oromia, SNNP, and Somali) and two city administrations (Addis Ababa and Dire Dawa) of the CBMP woredas. A cross-sectional survey design was employed among all the Woreda/Sub-city Health Offices (38), health facilities (219 public and 24 private), and selected health posts (132) found in the 35 woredas and 3 sub-cities drawn from all the regions. The OBAT tool was applied for 623 staff of the WorHOs, health facilities, and health posts.'
            ],
            [
                'icon' => 'fa fa-code-compare',
                'title' => 'RDQA Comprehensive Assessment (2022)',
                'description' => 'This assessment was conducted to assess the level of HMIS performance in terms of data management processes, reporting, and information use practices, and to identify potential challenges to data quality and use. An institution-based cross-sectional survey design was employed in regional representative samples of the public health facilities and health administrative units using qualitative and quantitative methods. Data was collected through document review, observation, interview techniques, and key informant interviews at each level of the health system. The assessment covered nine regions (Afar, Amhara, Oromia, Somali, SNNP, Sidama, South West Ethiopia, Gambella, and Harari), two city administrations, and 90 woreda health offices, including 207 health facilities (157 health centers and 50 hospitals) and 97 health posts.'
            ],
            [
                'icon' => 'fa fa-code-compare',
                'title' => 'RDQA Comprehensive Assessment (2023)',
                'description' => 'Following the RDQA assessment conducted in 2022, this follow-up assessment aimed to evaluate improvements made in HMIS performance and address challenges identified during the previous assessment. The findings provide insights into the effectiveness of interventions implemented over the past year. Data collection methods included interviews, surveys, and reviews of health information systems at health facilities. The assessment focused on continuity in data quality, reporting frequency, and adherence to data management protocols.'
            ],
            [
                'icon' => 'fa fa-circle-info',
                'title' => 'Information Revolution Assessment',
                'description' => 'Encouraging results were registered during the first HSTP period (2016-2020) in terms of improving data quality, data use for evidence-based decision-making, digitalization of priority health information systems, and governance of HIS, primarily through the development and implementation of the Information Revolution (IR) Roadmap and IR model woreda strategy. Despite this progress, the IR agenda continues to be a major priority in HSTP-2 to foster cultural changes and accelerate data use within the health sector. The self-assessment report using the IR assessment tool covered 504 woreda health offices and 2,451 hospitals and health centers as of FY2016 quarter four.'
            ],
            [
                'icon' => 'fa fa-vector-square',
                'title' => 'DHIS2',
                'description' => 'DHIS2 is an open-source, web-based platform most commonly used as a health management information system (HMIS). It became the world\'s largest health information management system, used by 73 low- and middle-income countries in 2022. Ethiopia adopted DHIS2 as its nationwide health information system platform in 2016 and achieved national-scale implementation in 2019. Data quality indicators (reporting timeliness, completeness, and the proportion of health facilities conducting LQAs) were included by report type, period, and organizational unit.'
            ],
            [
                'icon' => 'fa fa-border-none',
                'title' => 'DQR',
                'description' => 'The 2018 Ethiopia Data Quality Review assessment was a cross-sectional study utilizing the World Health Organization’s Data Quality Review tool after customization to the local context. The sample size for the DQR was determined by a combination of census of hospitals and random samples of health centers and private clinics. A total of 629 health facilities, 365 Woreda/districts, 63 zones, nine regions, and two city administrative council health bureaus were included in the survey.'
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
    </script>
</body>
</html>
