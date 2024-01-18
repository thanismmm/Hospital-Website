<?php

$id = $_GET["id"];

require_once("dbcon.php");

$query = "DELETE FROM credential WHERE userID = '$id'";

$result = mysqli_query($connection,$query);

if ($result)
{
	print "Course Deleted successfully";
?>
	<p><a href="testdata.php">Check All Courses Here</a></p>
<?php
}
?>