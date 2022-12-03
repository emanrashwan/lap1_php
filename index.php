<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title >Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
phpinfo();

define("webPageName", "my page!");
echo webPageName;
echo "<br>";
echo $_SERVER['PHP_SELF']; //file_name
echo "<br>";
echo $_SERVER['SERVER_NAME'];//SERVER_NAME
echo "<br>";
echo $_SERVER['SERVER_ADDR']; //SERVER_address
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//path of the current script
echo "<br>";
echo $_SERVER['SERVER_PORT'];//server_port
echo "<br>";
echo$_SERVER['SCRIPT_FILENAME'];//path
echo "<br>";



// //******************************/  
// //for loop

$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;

}
echo "a=.$a","<br>", "b=.$b";
echo "<br>";

// //At the end of the loop a = ?? and b = ??
// // a=50 , b=25
  
// //******************************/
// //while loop
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
echo "i=.$i","<br>", "num=.$num";
echo "<br>";
// //Loop stopped at i = ?? and num = ??
// // hint -->i =10 , num =40

// //******************************/
// //do...while
$i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
echo "i=.$i", "<br>";
// //Loop stopped at i = ?? 
// //hint  i=10
// //******************************/
// //foreach
$arr = array( 1, 2, 3, 4, 5);
// $arr = [ 1, 2, 3, 4, 5];      
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}
// /* Output ?? */
// //******************************/
// //break
$i = 0;
         
         while( $i < 10) {
            $i++;
            if( $i == 3 )break;
         }
         echo "i=.$i", "<br>";


// //Loop stopped at i = ?? 
// //hint -->i=3

// //******************************/
// //continue
$array = array( 1, 2, 3, 4, 5);
   echo  $array[2],"<br>"; 

foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}

// Output ?? 1,2,4,5
//******************************/

$age = 10;

switch ($age )
 {
  case $age<5:
    echo "stay at home";
    break;
  case $age=5:
    echo "kinder garden ";
    break;
  case $age>6 && $age<12:
    echo "go to grade:xxxxxx";
    break;
  default:
    echo "old boy";
}

?>

</body>
</html>

