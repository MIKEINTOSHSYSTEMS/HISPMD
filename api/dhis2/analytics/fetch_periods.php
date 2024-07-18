<?php
function fetchPeriods() {
    return [
        'THIS_WEEK' => 'This Week',
        'LAST_WEEK' => 'Last Week',
        'LAST_4_WEEKS' => 'Last 4 Weeks',
        'LAST_12_WEEKS' => 'Last 12 Weeks',
        'LAST_52_WEEKS' => 'Last 52 Weeks',
        'THIS_MONTH' => 'This Month',
        'LAST_MONTH' => 'Last Month',
        'THIS_BIMONTH' => 'This Bimonth',
        'LAST_BIMONTH' => 'Last Bimonth',
        'THIS_QUARTER' => 'This Quarter',
        'LAST_QUARTER' => 'Last Quarter',
        'THIS_SIX_MONTH' => 'This Six Months',
        'LAST_SIX_MONTH' => 'Last Six Months',
        'MONTHS_THIS_YEAR' => 'Months This Year',
        'QUARTERS_THIS_YEAR' => 'Quarters This Year',
        'THIS_YEAR' => 'This Year',
        'MONTHS_LAST_YEAR' => 'Months Last Year',
        'QUARTERS_LAST_YEAR' => 'Quarters Last Year',
        'LAST_YEAR' => 'Last Year',
        'LAST_5_YEARS' => 'Last 5 Years',
        'LAST_12_MONTHS' => 'Last 12 Months',
        'LAST_3_MONTHS' => 'Last 3 Months',
        'LAST_6_BIMONTHS' => 'Last 6 Bimonths',
        'LAST_4_QUARTERS' => 'Last 4 Quarters',
        'LAST_2_SIXMONTHS' => 'Last 2 Six Months',
        'THIS_FINANCIAL_YEAR' => 'This Financial Year',
        'LAST_FINANCIAL_YEAR' => 'Last Financial Year',
        'LAST_5_FINANCIAL_YEARS' => 'Last 5 Financial Years',
    ];
}

header('Content-Type: application/json');
echo json_encode(fetchPeriods());
?>
