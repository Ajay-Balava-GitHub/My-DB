<?php
echo date('d-M-Y')."<br/>";
$timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone;
?>