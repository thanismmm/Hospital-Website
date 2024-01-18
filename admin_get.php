<?php

$uname = $_POST["email"];
$pword = $_POST["password"];


require_once("dbcon.php");

$query = "SELECT * FROM credential WHERE name = '$uname','$pword'"

$result = mysqli_query($connection, $query);

if ($result)
{
    echo
	print "added successfully";
?>
	<p><a href="course.php">Check All Courses Here</a></p>
<?php
}
?>