function showTimeGreg() {
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";

    if (h == 0) {
        h = 12;
    }

    if (h > 12) {
        h = h - 12;
        session = "PM";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("GregClockDisplay").innerText = time;
    document.getElementById("GregClockDisplay").textContent = time;

    setTimeout(showTimeGreg, 1000);

}

showTimeGreg();


/*
function getGreeting() {
    var now = new Date();
    var hour = now.getHours();

    if (hour < 12) {
        return "Good Morning!";
    } else if (hour < 18) {
        return "Good Day!";
    } else if (hour < 22) {
        return "Good Evening!";
    } else {
        return "Good Night!";
    }
}

document.write(getGreeting());

*/