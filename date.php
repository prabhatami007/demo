<?php
date_default_timezone_set("Asia/Kolkata");
/*$offset = '-5:00';

// Calculate seconds from offset
list($hours, $minutes) = explode(':', $offset);
$seconds = $hours * 60 * 60 + $minutes * 60;
// Get timezone name from seconds
$tz = timezone_name_from_abbr('', $seconds, 1);
// Workaround for bug #44780
if($tz === false) $tz = timezone_name_from_abbr('', $seconds, 0);
// Set timezone
date_default_timezone_set($tz);*/
$curdate=date("2016-10-04 12:16:58");
$dt = new DateTime($curdate);
//$timezoneName = timezone_name_from_abbr("", 5*3600, false);
$firstpayment=$dt->getTimestamp();
echo $dt->format('Y-m-d H:i:s');
//echo "<br>";
$first_payment_day_of_week=date('l', strtotime( $curdate));
$dt->modify('+3 mins');
$from_date=$dt->format('Y-m-d H:i:s');
//echo $from_date."--".$dt->getTimestamp();
//echo "<br>";
if ($first_payment_day_of_week === 'Tuesday' && ( $firstpayment < strtotime($from_date) ) )
	{
	echo "<br>";
echo $first_payment_day_of_week;
echo "<br>";
}
$dt->modify('+7 day');
$dt->setTime(8, 00, 00);
echo $dt->format('Y-m-d H:i:s');
//echo "<br>";

/*$oldDay = $dt->format("d");
$dt->add(new DateInterval("P1M")); // 2016-03-02
$newDay = $dt->format("d");

if($oldDay != $newDay) {
    // Check if the day is changed, if so we skipped to the next month.
    // Substract days to go back to the last day of previous month.
    $dt->sub(new DateInterval("P" . $newDay . "D"));
}

echo $dt->format("Y-m-d"); // 2016-02-29*/
?>