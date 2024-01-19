<!DOCTYPE html>
<html>
<head>
	<title>Update Doctor Detail</title>
</head>
<body>

<?php

$id = $_GET["id"];

require_once("dbcon.php");

$query = "SELECT * FROM doctor_detail WHERE Doc_ID = '$id'";

$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result))
{
	$dname = $row["Doctor_name"];
	$ds = $row["Specialization"];
	$dvd = $row["Visit_Day"];
	$dvh = $row["Time"];

}

?>

	<h2>Update Course</h2>

	<form method="POST" action="update.php">
		<p>
			ID:<br>
			<input type="text" value="<?php print $id; ?>" name="did"  required="true" readonly="true">
		</p>
		<p>
			Doctor Name:<br>
			<input type="text" value="<?php print $dname; ?>" name="dname"  required="true">
		</p>
		<p>
			Specialization:<br>
			<input type="text" value="<?php print $ds; ?>" name="ds"  required="true" readonly="true">
		</p>
		<p>
			Visiting Day:<br>
			<input type="text" value="<?php print $dvd; ?>" name="dvisitd"  required="true">
		</p>
		<p>
			Visiting Hour:<br>
			<input type="text" value="<?php print $dvh; ?>" name="dvisith"  required="true">
		</p>
		<p>
			<input type="reset" value="Clear">
			<input type="submit" value="Update Doc-Detail">
		</p>
	</form>

</body>
</html>