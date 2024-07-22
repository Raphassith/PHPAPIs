<?php
date_default_timezone_set("Asia/Bangkok");

$db_host = "";
$db_name = "";
$db_user = "";
$db_pass = "";
$connStr = "mysql:host=$db_host; dbname=$db_name; charset=UTF8";
$conn = new PDO($connStr, $db_user, $db_pass);
// $conn->exec("set names utf8"); PHP Version < 5.3.6
