<?php

// For POST Method use $_POST[]

$id = $_POST["did"];
$name = $_POST["dname"];
$spec = $_POST["ds"];
$vd = $_POST["dvisitd"];
$vh = $_POST["dvisith"];

require_once("dbcon.php");

$query = "INSERT INTO doctor_detail VALUES ('$id','$name','$spec','$vd','$vh')";

$result = mysqli_query($connection, $query);

if ($result)
{
	print "added successfully";
?>
	<p><a href="admindata.php">Check Here</a></p>
<?php
}
?>