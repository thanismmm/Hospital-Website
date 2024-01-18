<?php

// For POST Method use $_POST[]

$id = $_POST["cid"];
$pword = $_POST["cname"];

require_once("dbcon.php");

$query = "INSERT INTO credential VALUES ('$id','$pword')";

$result = mysqli_query($connection, $query);

if ($result)
{
	print "Course added successfully";
?>
	<p><a href="course.php">Check All Courses Here</a></p>
<?php
}
?>