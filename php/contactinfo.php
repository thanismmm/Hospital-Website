<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us Information</title>
</head>
<body>
    
<style>

#contact{
	margin-left:70rem;
}

h2{
margin-left: 30rem;
}

table {
 max-width: 100%;
 margin: 10px auto;
 padding: 10px;
 border-collapse: collapse;
 font-family: Arial, sans-serif;
 box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);}

 tr:nth-child(even) {
 background-color: #f2f2f2;
}

tr:nth-child(odd) {
 background-color: #fff;
}

tr:hover {
 background-color: #ddd;
}

td, th {
 padding: 10px;
 text-align: left;
 border-bottom: 1px solid #ddd;
}

th {
 font-weight: bold;
 background-color: #4CAF50;
 color: white;
}

tr {
 margin-bottom: 10px;
}


</style>

<h2>Contact Informations</h2>

<table border="1">

<tr>
	<th>Name</th>
	<th>Address</th>
	<th>Phone No</th>
	<th>Subject</th>
	<th>Message</th>
</tr>

<?php

require_once("dbcon.php");

//Create the Query
$query = "SELECT * FROM contactus";

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
	<td><?php print $row["name"]; ?></td>
	<td><?php print $row["address"]; ?></td>
	<td><?php print $row["phoneNo"]; ?></td>
	<td><?php print $row["subject"]; ?></td>
	<td><?php print $row["message"]; ?></td>
</tr>

<?php
}
?>

</table>
    
</body>
</html>