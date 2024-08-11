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


/*


function getGreeting() {
    var now = new Date();
    var hour = now.getHours();

    if (hour < 12) {
        return "እንደምን አደሩ!";
    } else if (hour < 18) {
        return "እንደምን ዋሉ!";
    } else if (hour < 22) {
        return "አንደምን አመሹ!";
    } else {
        return "ደህና እደሩ!";
    }
}

document.write(getGreeting());


function getGreeting() {
  var now = new Date();
  var hour = now.getHours();

  if (hour < 12) {
    return "Good morning!";
  } else if (hour < 18) {
    return "Good day!";
  } else if (hour < 22) {
    return "Good evening!";
  } else {
    return "Good night!";
  }
}

document.write(getGreeting());

*/




/*
function showTime() {
    var date = new Date();
    var h = date.getHours() + 6; // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "ከጠዋቱ";

    // Adjust for different time zones if needed
    // h += timezoneOffset;
    // ከሌሊት ከጠዋቱ ከቀኑ ከምሽቱ
    if (h >= 0 && h < 6) {
        h = h - 12;
        session = "ከሌሊት"; // Assuming "ከሌሊት" for the period from midnight to 6 AM
    } else if (h >= 6 && h < 12) {
        h = h - 12;
        session = "ከጠዋቱ";
    } else if (h >= 12 && h < 18) {
        h = h - 12;
        session = "ከቀኑ";
    } else {
        h = h - 12;
        session = "ከምሽቱ";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = session + " " + h + ":" + m + ":" + s;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);
}

showTime();

*/