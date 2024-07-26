$(document).ready(function () {
    var calendar = $.calendars.instance('ethiopian');
    var currentDate = calendar.newDate();
    var currentMonth = currentDate.month();
    var currentYear = currentDate.year();

    function renderCalendar(year, month) {
        var firstDay = calendar.newDate(year, month, 1).dayOfWeek();
        var daysInMonth = calendar.daysInMonth(year, month);
        var weeks = [];
        var week = [];

        // Fill initial empty days
        for (var i = 0; i < firstDay; i++) {
            week.push('');
        }

        // Fill the days of the month
        for (var day = 1; day <= daysInMonth; day++) {
            week.push(day);
            if ((day + firstDay) % 7 === 0 || day === daysInMonth) {
                weeks.push(week);
                week = [];
            }
        }

        var calendarBody = $('#calendar-body');
        calendarBody.empty();
        weeks.forEach(function (week) {
            var row = $('<tr></tr>');
            week.forEach(function (day) {
                var cell = $('<td></td>').text(day);
                if (day === currentDate.day() && month === currentDate.month() && year === currentDate.year()) {
                    cell.addClass('today');
                }
                row.append(cell);
            });
            calendarBody.append(row);
        });

        $('#month-year').text(calendar.local.monthNames[month - 1] + ' ' + year);
    }

    function updateCurrentTime() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var timeString = hours.toString().padStart(2, '0') + ':' +
            minutes.toString().padStart(2, '0') + ':' +
            seconds.toString().padStart(2, '0');

        var timeLabel;
        if (hours < 12) {
            timeLabel = 'Morning';
        } else if (hours < 15) {
            timeLabel = 'Noon';
        } else if (hours < 18) {
            timeLabel = 'Afternoon';
        } else {
            timeLabel = 'Night';
        }

        $('#current-time').text('Current Time: ' + timeString + ' (' + timeLabel + ')');
    }

    $('#prev-month').click(function () {
        if (currentMonth === 1) {
            currentMonth = 13;
            currentYear--;
        } else {
            currentMonth--;
        }
        renderCalendar(currentYear, currentMonth);
    });

    $('#next-month').click(function () {
        if (currentMonth === 13) {
            currentMonth = 1;
            currentYear++;
        } else {
            currentMonth++;
        }
        renderCalendar(currentYear, currentMonth);
    });

    renderCalendar(currentYear, currentMonth);
    setInterval(updateCurrentTime, 1000);
    updateCurrentTime();
});
