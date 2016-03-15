<?php
	include_once "../includes/db_connection.php";

	//$deleteduser = $_POST["userToDelete"];
	$id = $_POST['id'];

	$sql = "DELETE FROM gigs WHERE id = $id;";


	if ($conn->query($sql) === TRUE) {
		header ('Location: ../dashboard/gig_config.php');
	} else {
		?>
		<script language="javascript">
			alert("Deletion failed!!");
		</script>
		<?php
	}

$conn->close();
?>
	

