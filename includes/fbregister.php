<?php
	require_once (dirname(__FILE__).'/psl-config.php');
	require_once (dirname(__FILE__).'/db_connect.php');

 
$error_msg = "";
$success_msg = "";

		$fname = $_SESSION['FULLNAME'];
	    $email = $_SESSION['EMAIL'];
	    $password = "yuungagig@123";
	    $userType = "GIG";
	    $_SESSION['username'] = $fname;
  
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
        $stmt->bind_param('s', $fname);
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
		$insert_stmt = $mysqli->prepare("INSERT INTO members (fname, username, email, password, userType, hash, salt) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$insert_stmt->bind_param('sssssss', $fname, $fname, $email, $password, $userType, $hash, $random_salt);
		$insert_stmt->execute();
			
			/*
				Email to user account
			*/
			
			$to      = $email; // Send email to our user
			$subject = 'Yuunga Signup | Verification'; // Give the email a subject 
			$message = "
			 
			Thanks for signing up with Yuunga!
			
			Your GIG account has been created, and below is your contact information.
			 
			------------------------
                        Name: '$fname'
                        
                            
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
				?>
			<script type="text/javascript">
                    window.location.href = '../dashboard/gig_config.php';
                </script>
                <?php
			} else {
				$message = "Could not signup user.";	

			}
        }
?>