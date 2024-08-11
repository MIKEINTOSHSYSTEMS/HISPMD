function showTime() {
    const date = new Date();
    let h = date.getHours() + 6;
    const m = String(date.getMinutes()).padStart(2, '0');
    const s = String(date.getSeconds()).padStart(2, '0');
    let session = "ከጠዋቱ";

    // Determine the time period
    if (h >= 0 && h < 6) {
        session = "ከሌሊቱ";
    } else if (h >= 6 && h < 12) {
        session = "ከጠዋቱ";
    } else if (h >= 12 && h < 18) {
        session = "ከቀኑ";
    } else {
        session = "ከምሽቱ";
    }

    // Convert to 12-hour format if needed
    h = h % 12 || 12;

    const time = session + " " + h + ":" + m + ":" + s;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);
}

showTime();