<?php
	require_once (dirname(__FILE__).'/psl-config.php');
	require_once (dirname(__FILE__).'/db_connect.php');

 
$error_msg = "";
$success_msg = "";
  
if (isset($_POST['sal'],$_POST['fname'],$_POST['lname'],$_POST['phone_no'],$_POST['gender'],$_POST['usertype'],$_POST['username'],$_POST['email'],$_POST['p'])) {

    // Sanitize and validate the data passed in
	$sal = filter_input(INPUT_POST, 'sal', FILTER_SANITIZE_STRING);
	$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $phone_no = filter_input(INPUT_POST, 'phone_no', FILTER_SANITIZE_STRING);
	
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $userType = $_POST['usertype'];
	
	
	
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">Invalid email address!</p>';
    }
 
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed password should be 128 characters long.

        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
 
	//Check for the user information, so we don't have duplicates
	
    $prep_stmt = "SELECT id FROM members WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
				
 
   // check existing email  
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
		
		
 
        if ($stmt->num_rows == 1) {
            // Email address already used
            $error_msg .= '<p class="error">Email already used!</p>';
                        //$stmt->close();
						
        }
            $stmt->close();
			
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
		$stmt->close();
    }
	        

    // check existing username
    $prep_stmt = "SELECT id FROM members WHERE username = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        // A user with this username already exists
                        $error_msg .= '<p class="error">User name not available, its already been used!</p>';
                        //$stmt->close();
                }
					$stmt->close();
        } else {
                $error_msg .= '<p class="error">Database error line 55</p>';
                $stmt->close();
        }
 
    if (empty($error_msg)) {
        // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE))
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
		
		//Create a hashed code for verification link
		$hash = md5(rand(0,1000));
 
        // Insert the new user into the database 
		$insert_stmt = $mysqli->prepare("INSERT INTO members (sal, fname, lname, phone_no, gender,username, email, password, userType, hash, salt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$insert_stmt->bind_param('sssssssssss', $sal, $fname, $lname, $phone_no, $gender, $username, $email, $password, $userType, $hash, $random_salt);
		$insert_stmt->execute();
			
			/*
				Email to user account
			*/
			
			$to      = $email; // Send email to our user
			$subject = 'Yuunga Signup | Verification'; // Give the email a subject 
			$message = "
			 
			Thanks for signing up with Yuunga!
			
			Your account has been created, and below is your contact information.
			 
			------------------------
                        Saluation: '$sal'
                        First Name: '$fname'
                        Last Name: '$lname'
                        Phone No: '$phone_no'
                        Gender: '$gender'
                            
			Email: '$email'
			Password: This is only known by you for SECURITY reasons!
			------------------------
			 
			Please click this link to activate your account:
			http://yuunga.com/verify/?email=$email&hash=$hash
			
			You will only be able to login in after you have activated your account!
			 
			"; 
								 
			$headers = 'From:registration@yuunga.com' . "\r\n";
			
			mail('registration@yuunga.com', $subject, $message, $headers);

			if(mail($to, $subject, $message, $headers)) {
			/*	echo "<script language='javascript'>";
				echo "alert('Activation link sent!')";
				echo "</script>";	*/
				$success_msg = 'Thank you for Signing up with Yuunga! <br> An activation link has been sent to your mail. Click the activation link to activate your account. <br> And Add Your Business or Event to YUUNGA.';
			/*	echo "Thank you for Signing up with Yunga!";
				echo "<br>";
				echo "An activation link has been sent to your mail. Click the activation link to activate your account.";	*/
			} else {
				$message = "Could not signup user.";	

			}
        }
	}
?>