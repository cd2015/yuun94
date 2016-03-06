<?php
	$servername = "localhost";
	$username = "yuunga_cyber";
	$password = "yunga123@cyber";
	$dbname = "yuunga_yunga";
			
	//Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);

	//$deleteduser = $_POST["userToDelete"];
	$id = $_POST['id'];

	$sql = "DELETE FROM add_event WHERE id = $id;";


	if ($conn->query($sql) === TRUE) {
		header ('Location: ../dashboard/');
	} else {
		?>
		<script language="javascript">
			alert("Deletion failed!!");
		</script>
		<?php
	}

$conn->close();
?>
	

