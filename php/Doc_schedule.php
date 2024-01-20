
<style>

body{
margin-top:10vh;

}

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

<h2>Our Doctors Visting Schedule</h2>

<table border="1">

<tr>
	<th>Doc-ID</th>
	<th>Doctor Name</th>
	<th>Specialization</th>
	<th>Visiting Days</th>
	<th>Time</th>
</tr>

<?php

require_once("dbcon.php");

//Create the Query
$query = "SELECT * FROM doctor_detail";

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
	<td><?php print $row["Doc_ID"]; ?></td>
	<td><?php print $row["Doctor_name"]; ?></td>
	<td><?php print $row["Specialization"]; ?></td>
	<td><?php print $row["Visit_Day"]; ?></td>
	<td><?php print $row["Time"]; ?></td>
</tr>

<?php
}
?>

</table>