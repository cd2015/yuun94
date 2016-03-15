<?php
	$servername = "localhost";
	$username = "yuunga_cyber";
	$password = "yunga123@cyber";
	$dbname = "yuunga_yunga";
			
	//Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);

	$user = $_POST['userID'];
	$product = $_POST['product'];
	$bussID = $_POST['bussID'];

 

	$sql = "INSERT INTO circle (Product, relType, bussID,usrId) values ('$product',1,'$bussID','$user');";

	if ($conn->query($sql) === TRUE) {
		$sql = "select * from  products where product = '$product'";
		$query = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($query);
		if ($count == 0){

			$sql = "INSERT INTO products (product) values ('$product');";
			if ($conn->query($sql) === TRUE) {}
		}
		else{
			//do nothing
		}
		header ('Location: ../yuungacircle/');
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>
	

