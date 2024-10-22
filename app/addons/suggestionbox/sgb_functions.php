<?php
/*
function sortKBArticles($param_a,$param_b)
{
    #region pass-by-value parameters
    $a = $param_a;
    $b = $param_b;
    #endregion

    if ($a["word_matches"] == $b["word_matches"])
    {
        return 0;
    }
    if ($a["word_matches"] < $b["word_matches"])
    {
        return -1;
    }
    return 1;
}*/
function getHowAgo($date) {
    $time_ago = strtotime($date);
    if(empty($time_ago)) return "--";
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed;
    $minutes    = round($time_elapsed / 60);
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400);
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640);
    $years      = round($time_elapsed / 31207680);
    // Seconds
    if ($seconds <= 60) {
        return GetCustomLabel("just_now");
    }
    //Minutes
    else if ($minutes <= 60) {
        if ($minutes == 1) {
            return GetCustomLabel("one_minute_ago");
        } else {
            return str_replace("%minutes%",$minutes,GetCustomLabel("count_minutes_ago"));
        }
    }
    //Hours
    else if ($hours <= 24) {
        if ($hours == 1) {
            return GetCustomLabel("an_hour_ago");
        } else {
            return str_replace("%hours%",$hours,GetCustomLabel("count_hours_ago"));
        }
    }
    //Days
    else if ($days <= 7) {
        if ($days == 1) {
            return GetCustomLabel("yesterday");
        } else {
            return str_replace("%days%",$days,GetCustomLabel("count_days_ago"));
        }
    }
    //Weeks
    else if ($weeks <= 4.3) {
        if ($weeks == 1) {
            return GetCustomLabel("a_week_ago");
        } else {
            return str_replace("%weeks%",$weeks,GetCustomLabel("count_week_ago"));
        }
    }
    //Months
    else if ($months <= 12) {
        if ($months == 1) {
            return GetCustomLabel("a_month_ago");
        } else {
            return str_replace("%months%",$months,GetCustomLabel("count_month_ago"));
        }
    }
    //Years
    else {
        if ($years == 1) {
            return GetCustomLabel("one_year_ago");
        } else {
            return str_replace("%years%",$years,GetCustomLabel("count_years_ago"));
        }
    }
}



?>