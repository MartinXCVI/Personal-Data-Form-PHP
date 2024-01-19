<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "personal-data-form";
$conn = "";

if($_SERVER['REQUEST_METHOD']=='POST') {
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$telephone = $_POST['telephone'];
	$address = $_POST['address'];

	$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

	if($conn) {
		// echo "Connection succesful";
		$sql = "INSERT INTO `personal-data` (firstname, lastname, email, gender, telephone, address)
						VALUES ('$first_name', '$last_name', '$email', '$gender', '$telephone', '$address')";

		$result = mysqli_query($conn, $sql);

		if($result) {
			echo "Your data has been successfully sent.";
		}
		else {
			die(mysqli_error($conn));
		}

	}
	else {
		echo "Could NOT connect. Try again later.";
	}
}

?>
