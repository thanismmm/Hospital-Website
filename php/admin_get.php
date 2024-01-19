<?php

$uname = $_POST["email"];
$pword = $_POST["password"];


require_once("dbcon.php");

$query = "SELECT * FROM credential WHERE name = '$uname','$pword'"

$result = mysqli_query($connection, $query);

if ($result)
{
	print "added successfully";
?>
	<p><a href="admindata.php">Check Here</a></p>
<?php
}
?>