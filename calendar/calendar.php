<!DOCTYPE html>
<html lang="am">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>የኢትዮጵያ ካሌንደር</title>
    <style>
        #calendar-container {
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        #calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        #calendar {
            width: 100%;
            border-collapse: collapse;
        }

        #calendar th, #calendar td {
            border: 1px solid #ddd;
            padding: 8px;
            width: 14.28%;
        }

        #calendar th {
            background-color: #f2f2f2;
        }

        #calendar td {
            height: 50px;
        }

        .highlight {
            background-color: yellow;
        }

        #current-time {
            margin-top: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        (function($) {
            'use strict';
            $.calendars = $.calendars || {};
            $.calendars.calendars = $.calendars.calendars || {};
            $.calendars.calendars.ethiopian = function() {
                this.regionalOptions = {
                    'am': {
                        name: 'የኢትዮጵያ ዘመን አቆጣጠር',
                        epochs: ['BEE', 'EE'],
                        monthNames: ['መስከረም', 'ጥቅምት', 'ኅዳር', 'ታህሣሥ', 'ጥር', 'የካቲት',
                        'መጋቢት', 'ሚያዝያ', 'ግንቦት', 'ሰኔ', 'ሐምሌ', 'ነሐሴ', 'ጳጉሜ'],
                        monthNamesShort: ['መስከ', 'ጥቅም', 'ኅዳር', 'ታህሣ', 'ጥር', 'የካቲ',
                        'መጋቢ', 'ሚያዝ', 'ግንቦ', 'ሰኔ', 'ሐምሌ', 'ነሐሴ', 'ጳጉሜ'],
                        dayNames: ['እሑድ', 'ሰኞ', 'ማክሰኞ', 'ረቡዕ', 'ሓሙስ', 'ዓርብ', 'ቅዳሜ'],
                        dayNamesShort: ['እሑድ', 'ሰኞ', 'ማክሰ', 'ረቡዕ', 'ሓሙስ', 'ዓርብ', 'ቅዳሜ'],
                        dayNamesMin: ['እሑ', 'ሰኞ', 'ማክ', 'ረቡ', 'ሐሙ', 'ዓር', 'ቅዳ'],
                        digits: null,
                        dateFormat: 'dd/mm/yyyy',
                        firstDay: 0,
                        isRTL: false
                    }
                };
                this.local = this.regionalOptions['am'];
            };
        })(jQuery);

        function isLeapYear(year) {
            return (year % 4 === 3);
        }

        function gregorianToEthiopian(gregorianDate) {
            const gregorianYear = gregorianDate.getFullYear();
            const gregorianMonth = gregorianDate.getMonth() + 1;
            const gregorianDay = gregorianDate.getDate();

            const gregorianLeap = ((gregorianYear % 4 === 0 && gregorianYear % 100 !== 0) || (gregorianYear % 400 === 0));
            const ethiopianLeap = isLeapYear(gregorianYear - 8);

            let yearDifference = gregorianYear - 8;
            if (gregorianLeap && !ethiopianLeap) {
                yearDifference += 1;
            } else if (!gregorianLeap && ethiopianLeap) {
                yearDifference -= 1;
            }

            const daysInGregorianMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            if (gregorianLeap) {
                daysInGregorianMonth[1] = 29;
            }

            const totalDays = daysInGregorianMonth.slice(0, gregorianMonth - 1).reduce((a, b) => a + b, 0) + gregorianDay;
            const ethiopianMonth = Math.floor((totalDays - 2) / 30) + 1;
            const ethiopianDay = (totalDays - 2) % 30 + 1;

            let ethiopianYear = gregorianYear - 8;
            if (ethiopianMonth < 1) {
                ethiopianYear--;
            }

            return { year: ethiopianYear, month: (ethiopianMonth + 12) % 13, day: ethiopianDay };
        }

        function getTimePeriod(hour) {
            if (hour < 6) return 'Night';
            if (hour < 12) return 'Morning';
            if (hour < 18) return 'Afternoon';
            return 'Night';
        }

        $(document).ready(function() {
            let currentYear, currentMonth, currentDay;

            const ethiopianMonths = [
                'መስከረም', 'ጥቅምት', 'ኅዳር', 'ታህሣሥ', 'ጥር', 
                'የካቲት', 'መጋቢት', 'ሚያዝያ', 'ግንቦት', 'ሰኔ', 
                'ሐምሌ', 'ነሐሴ', 'ጳጉሜ'
            ];

            const ethiopianDaysInMonth = [30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 5];

            function generateCalendar(year, month, day) {
                const calendarBody = $('#calendar-body');
                calendarBody.empty();
                $('#month-year').text(`${ethiopianMonths[month]} ${year}`);

                const firstDayOfMonth = new Date(year, month, 1).getDay();
                const daysInMonth = ethiopianDaysInMonth[month];

                let date = 1;
                for (let i = 0; i < 6; i++) {
                    const row = $('<tr>');
                    for (let j = 0; j < 7; j++) {
                        const cell = $('<td>');
                        if (i === 0 && j < firstDayOfMonth) {
                            cell.text('');
                        } else if (date > daysInMonth) {
                            break;
                        } else {
                            cell.text(date);
                            if (date === day) {
                                cell.addClass('highlight');
                            }
                            date++;
                        }
                        row.append(cell);
                    }
                    calendarBody.append(row);
                }
            }

            function initCalendar() {
                const now = new Date();
                const ethiopianDate = gregorianToEthiopian(now);
                currentYear = ethiopianDate.year;
                currentMonth = ethiopianDate.month;
                currentDay = ethiopianDate.day;
                generateCalendar(currentYear, currentMonth, currentDay);
                updateTime();
            }

            function updateTime() {
                const now = new Date();
                const hours = now.getHours();
                const minutes = now.getMinutes().toString().padStart(2, '0');
                const seconds = now.getSeconds().toString().padStart(2, '0');
                const timePeriod = getTimePeriod(hours);
                $('#current-time').text(`Current time: ${hours}:${minutes}:${seconds} (${timePeriod})`);
            }

            $('#prev-month').click(function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                generateCalendar(currentYear, currentMonth, currentDay);
            });

            $('#next-month').click(function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                generateCalendar(currentYear, currentMonth, currentDay);
            });

            initCalendar();
            setInterval(updateTime, 1000); // Update time every second
        });
    </script>
</head>
<body>
    <div id="calendar-container">
        <div id="calendar-header">
            <button id="prev-month">‹</button>
            <span id="month-year"></span>
            <button id="next-month">›</button>
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
