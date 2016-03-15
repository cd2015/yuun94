<?php
	$servername = "localhost";
	$username = "yuunga_cyber";
	$password = "yunga123@cyber";
	$dbname = "yuunga_yunga";
			
	//Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);
	
	//Getting the necessasry parameters
	$id = $_POST['id'];	
	
	$title = $_POST['title'];
    $event = $_POST['event'];
    $category = $_POST['category'];
    $location = $_POST['location'];
    $region = $_POST['region'];
	
	/*Date at which the event is updated
	$today = getdate();
	$mday = $today[mday]; $mon = $today[mon]; $year = $today[year];
	$date_update = $mday."-".$mon."-".$year;
	
	//Time of updating the event
	$hh = $today[hours]; $mm = $today[minutes]; $ss = $today[seconds];
	$time_update = $hh.":".$mm.":".$ss;*/
		
	//Event date (event_date)
	$Evday = $_POST['day'];
	$Evmonth = $_POST['month'];
	$Evyear = $_POST['year'];
	
	$event_date = $Evday."-".$Evmonth."-".$Evyear;
	
	//Event Start Time (event_start)
	$start_hr = $_POST['start_hr'];
	$start_min = $_POST['start_min'];
	
	$event_start = $start_hr.":".$start_min;
	
	//Event End Time (event_end)
	$end_hr = $_POST['end_hr'];
	$end_min = $_POST['end_min'];
	
	$event_end = $end_hr.":".$end_min;
	
	//Operation on the logo
	//$file = rand(1000, 100000) . "-" . $_FILES['event_logo']['name'];
    //$file_loc = $_FILES['event_logo']['tmp_name'];
    //$file_size = $_FILES['event_logo']['size'];
    //$file_type = $_FILES['event_logo']['type'];
    //$folder = "uploads/";

    //$new_size = $file_size / 1024;

    //$new_file_name = strtolower($file);

    //$final_file = str_replace(' ', '-', $new_file_name);
	
	//$fileMoved = move_uploaded_file($file_loc, $folder.$final_file);
	
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_phone = $_POST['contact_phone'];
	
	/*
	$date_create = strtotime($date_create);
	$event_date = strtotime($event_date);
	
	if ($date_create<$event_date){*/
	
		$update = $conn->prepare("UPDATE add_event SET title = ?, event = ?, location = ?, category = ?, region = ?, event_date = ?, event_start = ?, event_end = ?, contact_name = ?,
										contact_email = ?, contact_phone = ? WHERE id = '$id'");
		$update->bind_param('sssssssssss', $title, $event, $location, $category, $region, $event_date, $event_start, $event_end, $contact_name, $contact_email, $contact_phone);
		$update->execute();
		
	if ($update){
		header ('Location: ../dashboard/');
	}	
	else {
		?>
			<script language="javascript">
			alert("Update failed!!");
		</script>
		<?php
	}
?>

