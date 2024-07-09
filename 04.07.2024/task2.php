<!-- PHP Logical Statements and Operators -->


<!-- Q1 -->
<?php
$year = 2013;
if($year%4==0){
    echo "This year is a leap year";
}
else{
    echo "This year is not a leap year";
}
echo "<br>";
?>

<!-- Q2 -->
<?php
$temperature = 27;
if ($temperature<20) {
    echo "we are in winter";
}
else{
    echo "it is summer time";
}
echo "<br>";
?>

<!-- Q3 -->
<?php
$number1 = 5;
$number2 = 10 ;
if ($number1 === $number2) {
    $sum = $number1 + $number2 ; 
echo $sum * 3 ;
}
else {
    echo "It is different values";
}
echo "<br>" ;
?>

<!-- Q4 -->
<?php
$number1 = 10 ;
$number2 = 10 ;
$sum = $number1 + $number2;
if ($sum === 30) {
    echo "true";
}
else{
    echo "false";
}
echo "<br>" ;
?>

<!-- Q5 -->
<?php
$number = 20 ;
if ($number % 3 == 0 ) {
    echo "true";
}
else{
    echo "false";
}
echo "<br>";
?>


<!-- Q6 -->
<?php
$number = 50;
if($number>19 && $number<51){
    echo "true";
}
else{
    echo "false";
}
echo "<br>";
 ?>

<!-- Q7 -->
<?php
$number1 = 1;
$number2 = 5;
$number3 = 9;

if ($number1>$number2 && $number1>$number3) {
    echo $number1;
}
else if($number2>$number1 && $number2>$number3) {
    echo $number2;
}
else{
    echo $number3;
}
echo "<br>"
?>

<!-- Q8 -->
<?php
$units = 70;
if ($units>0 && $units<51) {
    echo $units*2.5 . "JOD";
}
elseif($units>50 && $units<151){
    echo $units*5 . "JOD";
}
elseif($units>150 && $units<251){
    echo $units*6.2 . "JOD";
}
elseif($units>250){
    echo $units*7.5 . "JOD";
}
echo "<br>"
?>

<!-- Q9 -->
<?php
$number1 
?>

<!-- Q10 -->
<?php
$age = 22;
if($age>17){
    echo "is aligible to vote";
}
else{
   echo "is not aligible to vote";
} 
echo "<br>";
?>

<!-- Q11 -->
<?php
$number = 10;
if ($number>0) {
    echo "Positive";
}
elseif ($number<0) {
    echo "Negative";
}
elseif ($number == 0){
    echo "Zero";
}
echo "<br>";
?>

<!-- Q12 -->
<?php
$scores = [60 , 84 , 95 , 63 , 55 , 74 , 79 , 62 , 50];
$sum = array_sum($scores);
$avg = $sum/9;
if ($avg>90 && $avg <100) {
    echo "A";
}
elseif ($avg>80 && $avg<91){
    echo "B";
}
elseif ($avg>70 && $avg<81){
    echo "C";
}
elseif($avg>60 && $avg<71){
    echo "D";
}
else{
    echo "F";
}
echo "<br>";
?>




