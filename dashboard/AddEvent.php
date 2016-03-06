<?php
	require_once ('../includes/psl-config.php');
	require_once ('../includes/db_connect.php');
	
	$user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $event = $_POST['event'];
	$location = $_POST['location'];
    $category = $_POST['category'];
	
	//Date at which the event is added
	$today = getdate();
	$mday = $today[mday]; $mon = $today[mon]; $year = $today[year];
	$date_create = $mday."-".$mon."-".$year;
	
	//Time of event creation
	$hh = $today[hours]; $mm = $today[minutes]; $ss = $today[seconds];
	$time_create = $hh.":".$mm.":".$ss;
		
	//Event date (event_date)
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	
	$event_date = $day."-".$month."-".$year;
	
	//Event Start Time (event_start)
	$start_hr = $_POST['start_hr'];
	$start_min = $_POST['start_min'];
	
	$event_start = $start_hr.":".$start_min;
	
	//Event End Time (event_end)
	$end_hr = $_POST['end_hr'];
	$end_min = $_POST['end_min'];
	
	$event_end = $end_hr.":".$end_min;
	
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_phone = $_POST['contact_phone'];
		
	$file = rand(1000, 100000) . "-" . $_FILES['event_logo']['name'];
    $file_loc = $_FILES['event_logo']['tmp_name'];
    $file_size = $_FILES['event_logo']['size'];
    $file_type = $_FILES['event_logo']['type'];
    $folder = "uploads/";

    $new_size = $file_size / 1024;

    $new_file_name = strtolower($file);

    $final_file = str_replace(' ', '-', $new_file_name);
	
	$fileMoved = move_uploaded_file($file_loc, $folder.$final_file);
	
	//Time comparison
	$date_create = strtotime($date_create);
	$event_date = strtotime($event_date);
	
	if ($date_create<$event_date){
	
		$insert_stmt = $mysqli->prepare("INSERT INTO add_event (user_id, title, event, location, category, date_create, time_create, event_date, event_start, event_end, contact_name, contact_email, contact_phone, logo) VALUES 
												(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$insert_stmt->bind_param('isssssssssssss', $user_id, $title, $event, $location, $category, $date_create, $time_create, $event_date, $event_start, $event_end, $contact_name, $contact_email, $contact_phone, $final_file);
		
		$insert_stmt->execute();
					
		header ('Location: ../dashboard/');
	}else{ 
		?>
		<script language="javascript">
			alert("Invalid Event Date!!");
		</script>
		<?php
		header ('Location: ../dashboard/');
	}
?>
