<?php
//include_once 'includes/functions.php';
	//require_once(__DIR__.'functions.php');
	//include_once 'functions.php';
	// require_once(__DIR__.'/functions.php');
	require_once (dirname(__FILE__) . '/functions.php');
	include_once '../includes/db_connection.php';

	sec_session_start(); // Our custom secure way of starting a PHP session.

	if (isset($_POST['email'], $_POST['p'])) {
		$email = $_POST['email'];
		$password = $_POST['p']; // The hashed password.
	 
		if (login($email, $password, $mysqli) == true) {
			// Login success
			
			$sql = "SELECT userType from members WHERE email = '$email'";
			$query = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($query)){
				
					$userType = $row['userType'];
				}

			if( strcmp($userType, "GIG")  == 0){
				?>
				<script type="text/javascript">
                    window.location.href = '../dashboard/gig_config.php';
                </script>
				<?php
			}else if(strcmp($userType, "BUSINESS") == 0){
				?>
				<script type="text/javascript">
                    window.location.href = '../dashboard/';
                </script>
                <?php
			}
		} else {
			// Login failed 
			?>
				<script type="text/javascript">
                    window.location.href = '../login/index.php?error=1';
                </script>
                <?php
			//echo "Incorrect Email or Password!";
		}
	} else {
		// The correct POST variables were not sent to this page. 
		echo 'Invalid Request';
	}
?>