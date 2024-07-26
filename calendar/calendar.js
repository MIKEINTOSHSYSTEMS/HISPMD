$(document).ready(function () {
    let currentYear, currentMonth;

    const ethiopianMonths = [
        'Meskerem', 'Tikimt', 'Hidar', 'Tahsas', 'Tir',
        'Yekatit', 'Megabit', 'Miyazya', 'Ginbot', 'Sene',
        'Hamle', 'Nehase', 'Pagumē'
    ];

    const ethiopianDaysInMonth = [30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 5];

    function generateCalendar(year, month) {
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
                    date++;
                }
                row.append(cell);
            }
            calendarBody.append(row);
        }
    }

    function initCalendar() {
        const now = new Date();
        currentYear = now.getFullYear();
        currentMonth = now.getMonth();
        generateCalendar(currentYear, currentMonth);
    }

    $('#prev-month').click(function () {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth);
    });

    $('#next-month').click(function () {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth);
    });

    initCalendar();
});
