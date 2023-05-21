<?php
//Date Function
// date(), date('m:d:y'), time()

//echo date('d:m:y');
//echo time();

//Adding one date to current date
//$d = date('d:m:y', strtotime('+ 1 day'));



//Adding one day to current date
//$s = strtotime('+ 1 day');
//$d = date('m:d:y', $s);

// OR

//Adding one day to current date
//$s = date('m:d:y', time() + 24 * 60 * 60);
//OR
//$s = date('m:d:y', time() + 1 * 24 * 60 * 60);


//Adding one year to current date Or date after one year
//$s = date('m:d:y', time() + 365 * 24 * 60 * 60);


//Adding 2 years to current date OR Date after 2 years
//$s = date('m:d:y', time() + 2 * 365 * 24 * 60 * 60);


//Current Time
$timestamp = time();
// determine the selected month, day, and year
$selected_month = date('n', $timestamp);
$selected_day = date('j', $timestamp);
$selected_year = date('Y', $timestamp);

//echo $selected_year;


// now, create the drop-down for months
$month_html = '<select name="date_mo">';
for ($x = 1; $x < 13; $x++) {
    $month_html .= '<option value='.$x.($selected_month == $x ? ' selected=true' : '' ).'>'.date("F", mktime(0, 0, 0, $x, 1, $selected_year)).'</option>';
}
$month_html .= '</select>';
// output
print $month_html;


?>