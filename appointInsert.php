<?php

$name = $_POST["name"];
$phoneNo = $_POST["phoneNo"];
$specialist = $_POST["specialist"];
$doctor = $_POST["doctor"];
$date = $_POST["date"];

require_once("dbcon.php");

$query = "INSERT INTO appointment VALUES ('$name','$phoneNo','$specialist','$doctor','$date')";

$result = mysqli_query($connection, $query);

if ($result)
{
	echo '<script>alert("Successfully Appoinment Submited!");</script>';
	echo '<script>window.location.href = "index.html";</script>';
?>

<?php
}
?>