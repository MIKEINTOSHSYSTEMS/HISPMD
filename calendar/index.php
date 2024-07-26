<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethiopian Calendar</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="calendar.js" defer></script>
</head>
<body>
    <div id="calendar-container">
        <div id="calendar-header">
            <button id="prev-month">Prev</button>
            <span id="month-year"></span>
            <button id="next-month">Next</button>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Calendar days will be dynamically generated here -->
            </tbody>
        </table>
    </div>
</body>
</html>
