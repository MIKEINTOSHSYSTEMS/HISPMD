<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethiopian Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #calendar-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        #calendar {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        #calendar th, #calendar td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #calendar th {
            background-color: #f4f4f4;
        }
        #calendar td {
            text-align: center;
        }
        #calendar .current-day {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        #calendar-header {
            margin-bottom: 10px;
        }
        #calendar-header button {
            margin: 0 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
        #current-time {
            margin-top: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Mapping Gregorian months to Ethiopian months
            const gregorianToEthiopianMonth = {
                1: 5,  2: 6,  3: 7,  4: 8,  5: 9,  6: 10,
                7: 11, 8: 12, 9: 1, 10: 2, 11: 3, 12: 4
            };

            //const gregorianToEthiopianMonth = {
            //    1: 4,  2: 5,  3: 6,  4: 7,  5: 8,  6: 9,
            //    7: 10, 8: 11, 9: 12, 10: 1, 11: 2, 12: 3
            //};

            const monthNames = ['መስከረም', 'ጥቅምት', 'ኅዳር', 'ታኅሣሥ', 'ጥር', 'የካቲት', 'መጋቢት', 'ሚያዝያ', 'ግንቦት', 'ሰኔ', 'ሐምሌ', 'ነሐሴ', 'ጳጉሜ'];
            const daysOfWeek = ['እሑድ', 'ሰኞ', 'ማክሰኞ', 'ረቡዕ', 'ሓሙስ', 'ዓርብ', 'ቅዳሜ'];

            function getEthiopianYear(gregorianYear) {
                return gregorianYear - 8;
            }

            function generateCalendar(year, month, day) {
                $('#calendar-body').empty();
                const daysInMonth = month === 13 ? (isLeapYear(year) ? 6 : 5) : 30;
                const firstDayOfMonth = new Date(year + 8, month - 1, 1).getDay(); // Adjust for first day of month
                const totalDays = daysInMonth + firstDayOfMonth;
                const rows = Math.ceil(totalDays / 7);

                $('#month-year').text(monthNames[month - 1] + ' ' + year);

                for (let i = 0; i < rows; i++) {
                    const row = $('<tr></tr>');
                    for (let j = 0; j < 7; j++) {
                        //const dayOfMonth = i * 7 + j - firstDayOfMonth + 1;
                        const dayOfMonth = i * 7 + j - firstDayOfMonth + 1;
                        if (dayOfMonth > 0 && dayOfMonth <= daysInMonth) {
                            const cell = $('<td></td>').text(dayOfMonth);
                            if (dayOfMonth === day) {
                                cell.addClass('current-day');
                            }
                            row.append(cell);
                        } else {
                            row.append('<td></td>');
                        }
                    }
                    $('#calendar-body').append(row);
                }
            }

            function isLeapYear(year) {
                return (year % 4 === 3 || year % 4 === -1);
            }

            function updateTime() {
                const now = new Date();
                $('#current-time').text('Current time: ' + now.toLocaleTimeString());
            }

            $('#prev-month').click(function() {
                currentMonth--;
                if (currentMonth < 1) {
                    currentMonth = 13;
                    currentYear--;
                }
                generateCalendar(currentYear, currentMonth, currentDay);
            });

            $('#next-month').click(function() {
                currentMonth++;
                if (currentMonth > 13) {
                    currentMonth = 1;
                    currentYear++;
                }
                generateCalendar(currentYear, currentMonth, currentDay);
            });

            // Initialize with current Ethiopian month and year
            let currentYear = getEthiopianYear(new Date().getFullYear());
            let currentMonth = gregorianToEthiopianMonth[new Date().getMonth() + 1];
            let currentDay = new Date().getDate();
            generateCalendar(currentYear, currentMonth, currentDay);
            setInterval(updateTime, 1000);
        });
    </script>
</head>
<body>
    <div id="calendar-container">
        <div id="calendar-header">
            <button id="prev-month">ያለፈው ወር</button>
            <span id="month-year"></span>
            <button id="next-month">የሚቀጥለው ወር</button>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>እሑድ</th>
                    <th>ሰኞ</th>
                    <th>ማክሰኞ</th>
                    <th>ረቡዕ</th>
                    <th>ሓሙስ</th>
                    <th>ዓርብ</th>
                    <th>ቅዳሜ</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Calendar will be generated here -->
            </tbody>
        </table>
        <div id="current-time"></div>
    </div>
</body>
</html>
