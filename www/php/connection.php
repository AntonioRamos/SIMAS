<?php

    $hostname = "SIMASProject.db.6133599.hostedresource.com";
    $username = "SIMASProject";
    $dbname = "SIMASProject";
    $password = "EIpl2081043@";

    mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
    mysql_select_db($dbname);

?>