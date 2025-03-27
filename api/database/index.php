<?php
// Superuser password
$superuser_password = "mikeintoshsystems";

// Check if the password is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_password = $_POST['password'];
    if ($entered_password === $superuser_password) {
        $authenticated = true;
    } else {
        $error = "Incorrect password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD System Backup</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }

        .password-dialog {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .password-dialog input {
            padding: 0.5rem;
            margin-top: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        .password-dialog button {
            padding: 0.5rem 1rem;
            margin-top: 1rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .password-dialog button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 1rem;
        }

        .content {
            display: none;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .grid-item {
            background: white;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .grid-item:hover {
            transform: translateY(-5px);
        }

        iframe {
            width: 100%;
            border: none;
            border-radius: 10px;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <?php if (!isset($authenticated)): ?>
        <div class="password-dialog">
            <h1>HISPMD System Backup</h1>
            <h4>Superuser Access Required</h4>
            <form method="POST">
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Submit</button>
            </form>
            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="content">
            <div class="grid">
                <div class="grid-item" onclick="loadIframe('main.php')">Main</div>
                <div class="grid-item" onclick="loadIframe('mb.php')">MB</div>
                <div class="grid-item" onclick="loadIframe('../sql/analytics.php')">Analytics</div>
                <div class="grid-item" onclick="loadIframe('../sgb/sgb.php')">SGB</div>
            </div>
            <iframe id="iframe" src=""></iframe>
        </div>
    <?php endif; ?>

    <script>
        function loadIframe(page) {
            const iframe = document.getElementById('iframe');
            iframe.src = page;

            // Reset iframe height before loading new content
            iframe.style.height = "0";

            // Adjust iframe height after the content is loaded
            iframe.onload = function() {
                const iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
                const iframeBody = iframeDocument.body;
                const iframeHeight = iframeBody.scrollHeight;

                // Set the iframe height to match its content
                iframe.style.height = iframeHeight + "px";
            };
        }

        <?php if (isset($authenticated)): ?>
            document.querySelector('.content').style.display = 'block';
        <?php endif; ?>
    </script>
</body>

</html>