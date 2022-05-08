<?php
echo "Today is ".date("Y/m/d")."<br><br>";
echo "Today is ".date("Y.m.d")."<br><br>";
echo "Today is ".date("Y-m-d")."<br><br>";
echo "Today is ".date("l")."<br><br>";
echo "The time is ".date("h:i:sa")."<br><br>";

date_default_timezone_set("India");
echo "The time is ".date("h:i:sa")."<br><br>";
?>