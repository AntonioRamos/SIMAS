<?php

    $server = "127.0.0.1";
    $user = "root";
    $password = "";

    $db = "myapp";

    $connection = mysql_connect($server,$user,$password) or die (mysql_error());
    $database = mysql_select_db($db, $connection) or die(mysql_error());

?>