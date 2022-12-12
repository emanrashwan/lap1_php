<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php

$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];

echo "<table>";
echo "<h2> php class registration</h2>";
foreach($students as $key=>$row) {
    echo "<tr>";
    foreach($row as $key2=>$row2){
        if($students[$key]['status']=='Science'){

            echo "<td style=\"color:red\";>"  .  $row2  . "</td>";    
        }else{
            echo "<td >"  .  $row2  . "</td>";    
 
        }
       
       
    }
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>