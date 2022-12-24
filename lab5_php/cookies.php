<?php

setcookie("name", "eman rashwan", time() + (8), "/"); 
?>
<html>
<body>

<?php
if(!isset($_COOKIE["name"])) {
  echo "' is not set!";
} else {
  echo " Hello " . $_COOKIE["name"] ;
 
}
echo "<br";
setcookie("name", "", time() - 10);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>