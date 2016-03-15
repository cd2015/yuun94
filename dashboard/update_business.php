<?php
	$servername = "localhost";
	$username = "yuunga_cyber";
	$password = "yunga123@cyber";
	$dbname = "yuunga_yunga";
			
	//Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);
	
	//Getting the necessasry parameters
	$id = $_POST['id'];	
	
	$business_name = $_POST['business_name'];
    $category = $_POST['category'];
    $tel_no = $_POST['tel_no'];
    $mob_no = $_POST['mob_no'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $postal_add = $_POST['postal_add'];
    $location = $_POST['location'];
    $about = $_POST['about'];
	//$user_id = $_POST['user_id'];
	/*
	$file = rand(1000, 100000) . "-" . $_FILES['business_logo']['name'];
    $file_loc = $_FILES['business_logo']['tmp_name'];
    $file_size = $_FILES['business_logo']['size'];
    $file_type = $_FILES['business_logo']['type'];
    $folder = "uploads/";

    $new_size = $file_size / 1024;

    $new_file_name = strtolower($file);

    $final_file = str_replace(' ', '-', $new_file_name);
	
	$fileMoved = move_uploaded_file($file_loc, $folder.$final_file);*/
	
		$update = $conn->prepare("UPDATE add_business SET business_name = ?, category = ?, tel_no = ?, mob_no = ?, email = ?,
										website = ?, postal_add = ?, location = ?, about = ? WHERE id = '$id'");
		$update->bind_param('sssssssss', $business_name, $category, $tel_no, $mob_no, $email, $website, $postal_add, $location, $about );
		$update->execute();
		
	if ($update){
		header ('Location: ../dashboard/');
	}	
	else {
		echo "Couldnt add business";
	}
?>
	<p>Back to Console <a href="welcome_page.php"> Click here</p>
