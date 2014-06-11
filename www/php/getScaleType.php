<?php

  header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

  include("connection.php");

  $table = "usertable";

  $userID = $_POST['userID'];
  $userID = stripslashes($userID);

  $userID = mysql_real_escape_string($userID);

  $sql = "select tableName from $table where id = $userID";
  $result = mysql_query($sql);

  $result2 = mysql_result($result,0);

  echo $result2;
?>