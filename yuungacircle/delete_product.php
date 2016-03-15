<?php
	$servername = "localhost";
	$username = "yuunga_cyber";
	$password = "yunga123@cyber";
	$dbname = "yuunga_yunga";
			
	//Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);

	$id = $_GET['id'];

	$sql = "DELETE FROM circle WHERE relId = $id;";


	if ($conn->query($sql) === TRUE) {
		header ('Location: ../yuungacircle/');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>
	

