<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admin-db";

// MySQL Connection
$connection = mysqli_connect($host,$dbusername,$dbpassword,$dbname);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

?>