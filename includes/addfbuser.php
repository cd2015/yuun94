<?php
  require_once (dirname(__FILE__).'/psl-config.php');
  require_once (dirname(__FILE__).'/db_connect.php');
  require_once (dirname(__FILE__).'/db_connection.php');

 
    $error_msg = "";
    $success_msg = "";

    $fname = $_SESSION['FULLNAME'];
    $email = $_SESSION['EMAIL'];
    $password = "yuungagig@123";
    $userType = "GIG";
    $_SESSION['username'] = $fname;
    $fbusrid = $_SESSION['FBID'];

  //Check for the user information, so we don't have duplicates
  
    $prep_stmt = "SELECT * FROM members WHERE fbid = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);        
 
   // check existing facebook ID  
    if ($stmt) {
        $stmt->bind_param('s', $fbusrid);
        $stmt->execute();
        $stmt->store_result();    

       // echo $stmt->num_rows;
 
        if ($stmt->num_rows == 1) {
            // Email address already used
           $error_msg .= '<p class="error">User already registered!</p>';

          //echo "User already exists";
            
       }
            $stmt->close();
      }

    // if there are no errors,
    if (empty($error_msg)) {
        // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE))
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
    
    //Create a hashed code for verification link
    $hash = md5(rand(0,1000));
    $sal = "Mr";
    $phone = "";
    $gender = "";
 
        // Insert the new user into the database 
    $insert_stmt = $mysqli->prepare("INSERT INTO members (fbid, sal, fname, username, password, userType, salt, hash) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $insert_stmt->bind_param('ssssssss', $fbusrid, $sal, $fname, $fname, $password, $userType, $random_salt, $hash);
    $insert_stmt->execute();

     
      /*
        Email to user account
      */
      
      $to      = $email; // Send email to our user
      $subject = 'Yuunga Signup | Verification'; // Give the email a subject 
      $message = "
       
Hi $fname, 

Thanks for signing up with Yuunga via Facebook!
      
Your GIG account has been created, and below is your contact information.
       
------------------------
                            
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
     /*   ?>
      <script type="text/javascript">
                   // window.location.href = '../dashboard/gig_config.php';
                   alert("registration email sent");
                </script>
                <?php  */
      } else {
        $message = "Could not signup user.";  

      }
        } else{
          //do nothing
        }
        ?>
