<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Dashboard</title>
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
            height: 777vh;
            position: relative;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <iframe
        id="metabase-iframe"
        src=""
        allowtransparency></iframe>
    <script>
        // Set dashboard ID dynamically
        var dashboardId = 13; // Replace with dynamic ID if needed

        // Make a request to the PHP server to generate the iframe URL for the selected dashboard ID
        fetch('./base.php?dashboardId=' + dashboardId)
            .then(response => response.text())
            .then(iframeUrl => {
                document.getElementById('metabase-iframe').src = iframeUrl;
            });
    </script>
</body>
        <!--If any Questions Please Contact https://github.com/MIKEINTOSHSYSTEMS -->

</html>
