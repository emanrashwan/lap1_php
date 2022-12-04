<?php
//new line with using /n
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
echo "<br>***************************<br>";

echo "<pre>";
print_r($_SERVER)  ;
echo "</pre>";
echo "<br>***************************<br>";
$numbers = array( );
$numbers[1] = 45;
$numbers[0] = 12;
$numbers[3] = 25;
$numbers[2] = 10;
//comput sumation
$sum = array_sum($numbers);
echo "sumtion =  $sum ";
echo "<br>";
//comput average
$count =count($numbers);
$avg = $sum / $count;
echo "Average =  $avg ";
echo "<br>***************************<br>";
//sort array reverse
print_r(array_reverse($numbers));
echo "<br>***************************<br>";

//sort associative arrays in ascending order, according to the value
$age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
asort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//sort associative arrays in decending order, according to the value
echo "<br>***************************<br>";
arsort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//sort associative arrays in ascending order, according to the key
echo "<br>***************************<br>";
ksort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//sort associative arrays in decending order, according to the key
echo "<br>***************************<br>";
krsort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>