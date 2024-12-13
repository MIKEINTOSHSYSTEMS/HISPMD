<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Chart and Visualizations Builder</title>
    <style>
        /* Reset default browser margins and paddings for consistency */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        iframe {
            border: none;
            width: 100%;
            height: 111vh; /* Default for large screens */
        }

        /* Adjust iframe height for smaller screens */
        @media (max-width: 768px) {
            iframe {
                height: 110vh; /* For tablets or smaller screens */
            }
        }

        @media (max-width: 480px) {
            iframe {
                height: 100vh; /* For mobile devices */
            }
        }
    </style>
</head>
<body>
    <!--
src="../api/chart/index.php"
src="index.php"
    -->
    <iframe
        id="hispmd-iframe"
        src="../api/chart/index.php"
        allowtransparency
        title="HISPMD Indicator Chart"
        loading="lazy">
    </iframe>


    <noscript>
        Your browser does not support JavaScript, which is required to load this chart.
    </noscript>
    <!-- If you have any questions, please contact: https://github.com/MIKEINTOSHSYSTEMS -->
</body>
</html>
