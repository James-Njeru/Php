<?php
$num1 = 30;
$num2 = 50;

//arrithmetic operators
echo "arrithmetic operators <br>";
echo $num1 + $num2 ."<br>"; //addition 
echo $num1 - $num2 ."<br>"; //subtraction
echo $num1 / $num2 ."<br>"; //division
echo $num1 * $num2 ."<br>"; //multiplication
echo $num1 % $num2 ."<br>"; //modulus
echo $num1 ** $num2 ."<br>"; //exponential   

//assignment operators
echo "assignment operators <br>";
$num2 += $num1;
echo $num2."<br>";
$num2 -= $num1;
echo $num2."<br>";
$num2 /= $num1;
echo $num2."<br>";
$num2 *= $num1;
echo $num2."<br>";
$num2 %= $num1;
echo $num2."<br>";

//comparison operators
echo "comparison operators <br>";
echo var_dump($num1 == $num2) ."<br>"; //equal
echo var_dump($num1 === $num2) ."<br>"; //identical
echo var_dump($num1 != $num2) ."<br>"; //not equal
echo var_dump($num1 !== $num2) ."<br>"; //not identical
echo var_dump($num1 > $num2) ."<br>"; //greater than
echo var_dump($num1 < $num2) ."<br>"; //less than
echo var_dump($num1 >= $num2) ."<br>"; //greater than or equal to
echo var_dump($num1 <= $num2) ."<br>"; //less than or equal to

//increment/decrement operators
echo "arrithmetic operators<br>";
echo ++$num1 ."<br>"; //pre-increment
echo $num1++ ."<br>"; //post-increment
echo --$num1 ."<br>"; //pre-decrement
echo $num1-- ."<br>"; //post-decrement
?>