<?php

include 'config.php';






$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `usermaster` WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($con, $sql);


if ($result == true) {

	if (mysqli_num_rows($result) > 0) {
		header('Location:header.php');

	} else {
		header('Location:loginPage.php');
	}
}

?>
