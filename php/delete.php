<?php

$id = $_GET["id"];

require_once("dbcon.php");

$query = "DELETE FROM doctor_detail WHERE Doc_ID = '$id'";

$result = mysqli_query($connection,$query);

if ($result)
{
	print "Data Deleted successfully";
?>
	<p><a href="admindata.php">Check Here</a></p>
<?php
}
?>