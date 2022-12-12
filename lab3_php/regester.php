
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- <script src='main.js'></script> -->
</head>
<body>
    <header>
        <ul>
            <li>  <a href="index.html">Home</a> </li>
            <li><a href="RoadMap.html">Road Map</a></li>
            <li><a href="regester.html">Registiration Form</a></li>
            <li><a href="https://www.iti.gov.eg/">Contact</a></li>
            <li style="float: right; padding: 2px;padding-bottom: 0px;"><img   src="images\ITI_logo.png" alt="iti logo"  height="60px"></li>
        </ul>
    </header>
    <section >

    <?php

// define variables and set to empty values
$fnameerr = $emailerr = $gendererr = $Grouperr  =$agreeerr= $checkedeer="";
$fname = $email = $gender = $Group = $comment =$agree=$checked1[]= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameerr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameerr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format";
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $gendererr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["Group"])) {
    $Grouperr = "Group is required";
  } else {
    $Group = test_input($_POST["Group"]);
  }
  if (empty($_POST["agree"])) {
    $agreeerr = "select is required";
  } else {
    $agree = test_input($_POST["agree"]);
  }
}
if(isset($_POST['submit'])){
  if(!empty($_POST['select'])){
    foreach($_POST['select'] as $checked){
      $checked1[]=  $checked ;
    }
  } else {
    $checkedeer = "Checkbox is not selected!";
  }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $fname = test_input($_POST["fname"]);
//   $email = test_input($_POST["email"]);
//   $Group= test_input($_POST["Group"]);
//   $comment=test_input($_POST["comment"]);
//   $gender = test_input($_POST["gender"]);
//   // $select= test_input($_POST["select"]);
//   $agree = test_input($_POST["agree"]);
// }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h1>AAST_BIS Class Registiration</h1>
            <p>Field marked with <span style="color: red;">*</span> are compulsory fields</p>
            <table style="width:100% ;">
                <tr>
                  <td> <label for="fname"> <span style="color: red;">*</span>Your Name</label></td>
                  <td> <input type="text" id="fname" name="fname" <?php echo $fname;?>>
                        <span class="error"  style="color: red;"> <?php echo $fnameerr;?></span></td>
                </tr>
                <tr>
                  <td><label for="email"><span style="color: red;">*</span>E-mail  </label></td>
                  <td><input type="email" id="email" name="email"size="30px"<?php echo $email;?>>
                      <span class="error"  style="color: red;"> <?php echo $emailerr;?></span></td>
                </tr>
                <tr>
                  <td> <label for="Group" ><span style="color: red;">*</span>Group# </label></td>
                  <td><input type="text" id="Group" name="Group" size="30px"<?php echo $Group;?>>
                      <span class="error" style="color: red;"> <?php echo $Grouperr;?></span></td>
                </tr>
                <tr>
                  <td>Comment:</textarea></td>
                  <td><textarea name="comment" rows="5" cols="40"></textarea>
                      </td>
                </tr>
                <tr>
                  <td> <label for="gender"><span style="color: red;">*</span>gender</label><br></td>
                  <td>
                     <input type="radio" id="Male" name="gender" value="Male">
                     <label for="Male">Male</label><br>
                     <input type="radio" id="Female" name="gender" value="Female">
                     <label for="Female">Female <?php echo $gender;?>
                           <span class="error" style="color: red;"> <?php echo $gendererr;?></span></label><br>
                  </td>
                <tr>
                  <td>
                    <label for="" > <span style="color: red;">*</span>Select Courses</label><br>
                  </td>
                    <td> <label for="php"> php 
                      <input type="checkbox" id="php" name="select[]" value="php"  >
                         </label>
                         <label for="Mysql"> Mysql
                      <input type="checkbox" id="Mysql" name="select[]" value="Mysql" >
                      </label><br>
                      <label for="HTML"> HTML
                      <input type="checkbox" id="HTML" name="select[]" value="HTML" >
                     </label>
                     <label for="Java"> Java Script
                      <input type="checkbox" id="Java" name="select[]" value="Java" >
                           <span class="error" style="color: red;"> <?php echo $checkedeer;?>
                     </label><br><br> 
                    </td>
                  <tr>
                    
                    <td colspan="2" style="    text-align: center;  ">
                        <label for="agree"><span style="color: red;">*</span> agree  </label>
                        <input type="checkbox" id="agree" name="agree"  <?php echo $agree;?>>
                           <span class="error" style="color: red;"> <?php echo $agreeerr;?></span>
                      </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="    text-align: center;  ">
                        <input type="submit" value="submit" name="submit">
                    </td>
                  </tr>
              </table>
        </form>
        
<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $email;
echo "<br>";
echo $Group;
echo "<br>";
echo $comment ;
echo "<br>";
echo $gender;
echo "<br>";
foreach($checked1 as $key => $value)
{
  echo  $value.'<br>';
}
echo "<br>";
echo  $agree;




?>
    </section>
    <footer>
        <hr>
        <p style="text-align: center; color: blue;" >Copyright 2021 by Eman Rashwan &reg;.All Rights Reserved.</p> 
    </footer>
    
</body>
</html>
