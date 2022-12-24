<?php

   session_start();

   if( isset( $_SESSION['counter'] ) ) {

      $_SESSION['counter'] += 1;

   }else {

      $_SESSION['counter'] = 1;

   }

   $my_Msg = "This page is visited ".  $_SESSION['counter'];

   $my_Msg .= " time during this session.";
   $_SESSION['country'] = 'egypt';

   
?>

<html>

   <head>

      <title>Starting a PHP session</title>

   </head>

   <body>

      <?php  echo ( $my_Msg );
      echo "<br>";
      print_r($_SESSION);
      echo "<br>";
      if( $_SESSION['counter']>10 ){
        echo "thank you for visit my web site";
       }

      setcookie("PHPSESSID", "", time() - 10,"/");
      session_regenerate_id();


       ?>

   </body>

</html>