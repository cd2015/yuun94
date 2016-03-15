<?php
	 
	mysql_connect("localhost", "yuunga_cyber", "yunga123@cyber"); 
	mysql_select_db("yuunga_yunga");
	
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
	
		$email = mysql_escape_string($_GET['email']); 
		$hash = mysql_escape_string($_GET['hash']); 
					 
		$search = mysql_query("SELECT email, hash, active FROM members WHERE email='$email' AND hash='$hash' AND active='0'") or die(mysql_error()); 
		$match  = mysql_num_rows($search);
					 
		if($match > 0){
		
			// We have a match, activate the account
			mysql_query("UPDATE members SET active='1' WHERE email='$email' AND hash='$hash' AND active='0'") or die(mysql_error());
			
			//header('Location:http://yuunga.com/login/');
?>
			<script type="text/javascript">
				alert("Your account has been activated, you can now Login!");
				window.location.href = '../login/';
			</script>
<?php	
		}else{
		
			// If no match.
?>		
			<script type="text/javascript">
				alert("Invalid URL or account is already active!");
				window.location.href = '../index.php';
			</script>
<?php
		}
					 
	}else{
		// Invalid approach
?>
		<script type="text/javascript">
			alert("Use activation link that was sent to your email address!");
				window.location.href = '../index.php';
		</script>
<?php
		
	} 
?>         