<?php
	include_once '../includes/db_connection.php';
	
	//Getting the necessasry parameters
	$id = $_POST['id'];	
	
	$category = $_POST['category'];
    $sub_cat = $_POST['sub_cat'];
    $gig = $_POST['gig'];
    $gig_price = $_POST['gig_price'];
    $duration = $_POST['duration'];
    $tel_no = $_POST['tel_no'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $whatsapp = $_POST['whatsapp'];
    $skype = $_POST['skype'];
    $location = $_POST['location'];
    $region = $_POST['region'];
    $about = $_POST['about'];
    
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
	
		$update = $conn->prepare("UPDATE gigs SET category = ?, sub_category = ?, gig = ?, price = ?, duration = ?, tel_no = ?, email = ?, website = ?, whatsapp = ?, skype = ?, location = ?, region = ?, detail = ? WHERE id = '$id'");
		$update->bind_param('sssssssssssss', $category, $sub_cat, $gig, $gig_price, $duration, $tel_no, $email, $website, $whatsapp, $skype, $location, $region, $about );
		$update->execute();
		
	if ($update){
		header ('Location: ../dashboard/gig_config.php');
	}	
	else {
		echo "Couldnt edit Gig";
	}
?>
	
