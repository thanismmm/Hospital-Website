<?php

// For POST Method use $_POST[]

$id = $_POST["cid"];
$pword = $_POST["cname"];

require_once("dbcon.php");

$query = "UPDATE credential SET Password = '$pword' WHERE userID = '$id'";

$result = mysqli_query($connection, $query);

if ($result)
{
	print "Course Updated successfully";
?>
	<p><a href="course.php">Check All Courses Here</a></p>
<?php
}
?>