<?php

// For POST Method use $_POST[]

$id = $_POST["did"];
$dname = $_POST["dname"];
$ds = $_POST["ds"];
$dvd = $_POST["dvisitd"];
$dvh = $_POST["dvisith"];

require_once("dbcon.php");

$query = "UPDATE doctor_detail SET Doctor_name = '$dname', Specialization = '$ds', Visit_Day = '$dvd', Time = '$dvh' 
WHERE Doc_ID = '$id'";

$result = mysqli_query($connection, $query);

if ($result)
{
	print "Doctor Info Updated successfully";
?>
	<p><a href="testdata.php">Check All info Here</a></p>
<?php
}
?>