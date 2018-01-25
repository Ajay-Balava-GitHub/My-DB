<?php

require_once 'configuration.php';


$con = mysqli_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysqli_set_charset($con,'utf8');
mysqli_select_db($con,$db_database);

?>