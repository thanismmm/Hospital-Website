<!DOCTYPE html>
<html>
<head>
	<title>Update Course</title>
</head>
<body>

<?php

$id = $_GET["id"];

require_once("dbcon.php");

$query = "SELECT * FROM credential WHERE userID = '$id'";

$result = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($result))
{
	$pword = $row["Password"];

}

?>

	<h2>Update Course</h2>

	<form method="POST" action="update.php">
		<p>
			Course ID:<br>
			<input type="text" value="<?php print $id; ?>" name="cid"  required="true" readonly="true">
		</p>
		<p>
			Course Name:<br>
			<input type="text" value="<?php print $pword; ?>" name="cname"  required="true">
		</p>
		<p>
			<input type="reset" value="Clear">
			<input type="submit" value="Update Course">
		</p>
	</form>

</body>
</html>