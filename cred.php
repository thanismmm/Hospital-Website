<?php

$uid = $_POST['userName'];
$pword = $_POST['password'];

require_once("dbcon.php");


$query = "SELECT * FROM credential";

$result = mysqli_query($connection,$query);

$success = false;

while ($row = mysqli_fetch_assoc($result)) {
    
    if (($row['userID'] == $uid) && ($row['Password'] == $pword)) {
        $success = true;
        break;
    }
}

if ($success) {
    echo '<script>alert("Welcome Come Back!");</script>';
    echo '<script>window.location.href = "testdata.php";</script>';
} else {
    echo '<script>alert("Invalid User Name & Password!");</script>';
    echo '<script>window.location.href = "makeappoint.html";</script>';

}

mysqli_close($connection);
?>

