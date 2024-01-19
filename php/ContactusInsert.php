<?php

$name = $_POST["name"];
$add = $_POST["address"];
$pn = $_POST["phoneNo"];
$sbj = $_POST["subject"];
$msg = $_POST["message"];

require_once("dbcon.php");

$query = "INSERT INTO contactus VALUES ('$name','$add','$pn','$sbj','$msg')";

$result = mysqli_query($connection, $query);

if ($result)
{
	echo '<script>alert("Successfully Submited!");</script>';
	echo '<script>window.location.href = "../contact.html";</script>';
?>

<?php
}
?>