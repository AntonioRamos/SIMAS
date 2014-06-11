<?php

  header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

  include("connection.php");

  $db2 = "login";

  $myusername = $_POST['user'];
  $mypassword = $_POST['pwd'];

  $myusername = stripslashes($myusername);
  $mypassword = stripslashes($mypassword);
  $myusername = mysql_real_escape_string($myusername);
  $mypassword = mysql_real_escape_string($mypassword);

  $mypassword = md5($mypassword); // this is an encrypting the password

  $sql = "SELECT * FROM $db2 WHERE username='$myusername' and password='$mypassword'";
  $result = mysql_query($sql);

  $count = mysql_num_rows($result);

  if ($count == 1) {
     echo "true";
  } else {
      echo "false";
  }
?>