<?php

// For POST Method use $_POST[]

$name = $_POST["name"];
$phoneNo = $_POST["phoneNo"];
$specialist = $_POST["specialist"];
$doctor = $_POST["doctor"];
$date = $_POST["date"];
$message = $_POST["Message"];

require_once("dbcon.php");

$query = "INSERT INTO appointment VALUES ('$name','$phoneNo','$specialist','$doctor','$date','$message')";

$result = mysqli_query($connection, $query);

if ($result)
{
	print "added successfully";
?>
	<p><a href="course.php">Check All Courses Here</a></p>
<?php
}
?>