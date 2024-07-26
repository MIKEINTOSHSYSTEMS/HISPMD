<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethiopian Calendar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .highlight {
            background-color: yellow;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            // Function to convert Gregorian date to Ethiopian date
            function gregorianToEthiopian(year, month, day) {
                // Replace this function with actual conversion logic
                // Here we're using placeholders for demonstration purposes
                const ethiopianDate = {
                    day: day,
                    month: month,
                    year: year
                };
                return ethiopianDate;
            }

            // Function to generate the calendar HTML
            function generateCalendar(year, month, currentDay) {
                var daysInMonth = 30; // Adjust as needed
                var firstDayOfMonth = new Date(year, month - 1, 1).getDay(); // Day of week of 1st of the month

                var calendarHtml = '<table><thead><tr>';
                var dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                
                $.each(dayNames, function(index, day) {
                    calendarHtml += '<th>' + day + '</th>';
                });
                calendarHtml += '</tr></thead><tbody><tr>';
                
                for (var i = 0; i < firstDayOfMonth; i++) {
                    calendarHtml += '<td></td>';
                }
                
                for (var day = 1; day <= daysInMonth; day++) {
                    var className = (day === currentDay) ? 'highlight' : '';
                    calendarHtml += '<td class="' + className + '">' + day + '</td>';
                    if ((firstDayOfMonth + day) % 7 === 0) {
                        calendarHtml += '</tr><tr>';
                    }
                }
                
                for (var i = (firstDayOfMonth + daysInMonth) % 7; i < 7 && i !== 0; i++) {
                    calendarHtml += '<td></td>';
                }
                
                calendarHtml += '</tr></tbody></table>';
                return calendarHtml;
            }

            // Get today's date
            var today = new Date();
            var gregorianYear = today.getFullYear();
            var gregorianMonth = today.getMonth() + 1; // Months are 0-indexed
            var gregorianDay = today.getDate();

            // Convert Gregorian date to Ethiopian date
            var ethiopianDate = gregorianToEthiopian(gregorianYear, gregorianMonth, gregorianDay);

            // Use the converted Ethiopian date
            $('#calendar').html(generateCalendar(ethiopianDate.year, ethiopianDate.month, ethiopianDate.day));
        });
    </script>
</head>
<body>
    <h1>Ethiopian Calendar for <?php echo date('F Y'); ?></h1>
    <div id="calendar"></div>
</body>
</html>
