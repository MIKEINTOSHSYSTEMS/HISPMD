<?php
function listDirectory($path) {
    $dirs = [];
    $files = [];

    if ($handle = opendir($path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != ".." && $entry != "index.php") {
                if (is_dir($path . '/' . $entry)) {
                    $dirs[] = $entry;
                } else {
                    $files[] = $entry;
                }
            }
        }
        closedir($handle);
    } else {
        echo "Unable to open directory.";
        return;
    }

    // Sort directories and files by name
    sort($dirs);
    sort($files);

    echo "<table>";
    echo "<thead><tr><th>Name</th><th>Type</th></tr></thead>";
    echo "<tbody>";

    foreach ($dirs as $dir) {
        echo "<tr><td><a href=\"$dir/\">$dir</a></td><td>Directory</td></tr>";
    }

    foreach ($files as $file) {
        echo "<tr><td><a href=\"$file\">$file</a></td><td>File</td></tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SurveyCTO Ethiopia PRISM Data Collection Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>SurveyCTO Ethiopia PRISM Data Collection Printable Forms Index</h1>
    <?php listDirectory('.'); ?>
</body>
</html>
