<?php

echo "Todays dat is ".date("d/m/y")."<br>";  
echo "Todays date is ".date("d.m.y")."<br>";
echo "Todays date is ".date("d-m-y")."<br>";
echo "Today is ".date("l")."<br>";

date_default_timezone_set("Africa/Nairobi");
echo "The time is ".date("h:i:sa")."<br>"; //12hrs
echo "The time is ".date("H:i:s")."<br>"; //24hrs   
?>