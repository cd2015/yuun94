<?php
	$servername = "localhost";
	$username = "yuunga_cyber";
	$password = "yunga123@cyber";
	$dbname = "yuunga_yunga";
			
	//Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);

	$id = $_POST['id'];

	$sql = "DELETE FROM add_business WHERE id = $id;";


	if ($conn->query($sql) === TRUE) {
		header ('Location: ../dashboard/');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>
	

