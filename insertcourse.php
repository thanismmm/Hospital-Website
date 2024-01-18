<style>
	body{
		
	}
</style>

	<h2>Add New Course</h2>

	<form method="POST" action="insertt.php">
		<p>
			Course ID:<br>
			<input type="text" name="cid"  required="true">
		</p>
		<p>
			Course Name:<br>
			<input type="text" name="cname"  required="true">
		</p>

		<p>
			<input type="reset" value="Clear">
			<input type="submit" value="Add Course">
		</p>
	</form>

