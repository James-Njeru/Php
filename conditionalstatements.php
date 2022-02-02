<?php
$marks = 55;

if ($marks >=0 && $marks < 40) {
  	echo "You have failed the unit";
  }  
 elseif ($marks >= 40 && $marks < 50) {
 	echo "You scored D";
 }
 elseif ($marks >= 50 && $marks < 60){
 	echo "You scored C";
 }
 elseif ($marks >= 60 && $marks < 70) {
 	echo "You scored B";
 }
 elseif ($marks >= 70 && $marks <= 100) {
 	echo "You scored A";
 }
 else {
 	echo "Invalid score";
 }
?>