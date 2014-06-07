<?php

  include("connection.php");

  $tableName = "results";

  $resultNumber = $_POST['result'];
  $userID = $_POST['userID'];
  $table = $_POST['table'];

  $tableName2 = $tableName . $table;

  $resultNumber = stripslashes($resultNumber);
  $userID = stripslashes($userID);
  $tableName2 = stripslashes($tableName2);

  $resultNumber = mysql_real_escape_string($resultNumber);
  $userID = mysql_real_escape_string($userID);
  $tableName2 = mysql_real_escape_string($tableName2);

  $sql = "INSERT INTO $tableName2 (userID,amount) VALUES ('$userID','$resultNumber')";
  $result = mysql_query($sql);

  $sql2 = "UPDATE usertable SET tableName='$table' WHERE id = $userID";
  $result2 = mysql_query($sql2);

  if($result && $result2){
    echo "true";
  }else{
    echo "false";
  }

?>