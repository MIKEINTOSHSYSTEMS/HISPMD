<?php
// Function to determine if a year is a leap year
function is_leap_year($year) {
    return ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
}

// Function to convert Gregorian date to Ethiopian date
function gregorian_to_ethiopian($gregorian_year, $gregorian_month, $gregorian_day) {
    $days_in_month = [30, 31, 30, 31, 31, 28, 31, 30, 31, 30, 31, 31];
    //$days_in_month = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    //$days_in_month = [30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30];
    if (is_leap_year($gregorian_year)) {
        $days_in_month[1] = 29;
    }

    $total_days = array_sum(array_slice($days_in_month, 0, $gregorian_month - 1)) + $gregorian_day;

    $ethiopian_year = $gregorian_year - 7;
    if (is_leap_year($gregorian_year) && !is_leap_year($ethiopian_year)) {
        $ethiopian_year++;
    } elseif (!is_leap_year($gregorian_year) && is_leap_year($ethiopian_year)) {
        $ethiopian_year--;
    }

    $ethiopian_month = intval($total_days / 30) + 1;
    $ethiopian_day = $total_days % 30;
    if ($ethiopian_day == 0) {
        $ethiopian_month--;
        $ethiopian_day = 30;
    }

    return array($ethiopian_year, $ethiopian_month, $ethiopian_day);
}

// Get current Gregorian date and time
$now = new DateTime();
$gregorian_year = $now->format('Y');
$gregorian_month = $now->format('n');
$gregorian_day = $now->format('j');
$time = $now->format('H:i:s');

// Convert to Ethiopian date
list($ethiopian_year, $ethiopian_month, $ethiopian_day) = gregorian_to_ethiopian($gregorian_year, $gregorian_month, $gregorian_day);

// Ethiopian month names
//$ethiopian_months = ['መስከረም', 'ጥቅምት', 'ኅዳር', 'ታኅሣሥ', 'ገንቦ', 'የካቲት', 'መጋቢት', 'ሚያዝያ', 'ግንቦት', 'ሰኔ', 'ሐምሌ', 'ነሐሴ', 'ጳጉሜ'];
$ethiopian_months = ['ሰኔ', 'ሐምሌ', 'ነሐሴ', 'ጳጉሜ', 'መስከረም', 'ጥቅምት', 'ኅዳር', 'ታኅሣሥ', 'ገንቦ', 'የካቲት', 'መጋቢት', 'ሚያዝያ', 'ግንቦት'];

// Display Ethiopian calendar
echo "<h1>Ethiopian Calendar</h1>";
echo "<h2>Date: {$ethiopian_day} {$ethiopian_months[$ethiopian_month - 1]} {$ethiopian_year}</h2>";
echo "<h2>Time: {$time}</h2>";
?>
