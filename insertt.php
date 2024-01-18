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
	print "Course added successfully";
?>
	<p><a href="course.php">Check All Courses Here</a></p>
<?php
}
?>