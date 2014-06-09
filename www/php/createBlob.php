<?php

  include("connection.php");

  $tableName = "results";

  $resultBlob = $_POST['resultBlob'];
  $userID = $_POST['userID'];
  $table = $_POST['table'];

  $tableName2 = $tableName . $table;

  $userID = stripslashes($userID);
  $tableName2 = stripslashes($tableName2);

  $userID = mysql_real_escape_string($userID);
  $tableName2 = mysql_real_escape_string($tableName2);
  $mime = 'audio/vnd.wav';

  $sql = "INSERT INTO $tableName2 (mime,data) VALUES('$mime','$resultBlob')";
  $result = mysql_query($sql);

  $sql2 = "UPDATE usertable SET tableName='$table' WHERE id = $userID";
  $result2 = mysql_query($sql2);

  if($result && $result2){
    echo "true";
  }else{
    echo "false";
  }

?>