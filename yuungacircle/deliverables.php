<?php
	include_once '../includes/functions.php';
	
	$servername = "localhost";
	$username = "yuunga_cyber";
	$password = "yunga123@cyber";
	$dbname = "yuunga_yunga";
			
	$conn = new mysqli ($servername, $username, $password, $dbname);

	//sec_session_start();
	
	if (login_check($mysqli) == true) : 
			
		$user_id = $_SESSION['user_id']; 
		
?>

				<form class="yungaForms" id="add_deliverable" name="add_deliverable" method="post" enctype="multipart/form-data" action="add_deliverable.php">
					<h4>What you deliver</h4>        
					
			<?php 
					
				$sql = "select * from circle where usrId = $user_id AND relType = 0";
				$query = mysqli_query($conn, $sql);
				
				while($result = mysqli_fetch_assoc($query)){ 
			?>
					<div>
						
							<label style="color:#fff"><?php echo $result['Product'].'  '; ?></label>
							<a class="update" href="delete_product.php?id=<?php echo $result['relId']; ?>">Delete</a>
						
					</div>
			<?php
				 }
			?>

					<div>
						<label>Add product ??  </label>
					</div>

					<div>
						<fieldset style="width:50%" class="name"> 
			<?php
					
				$sql = "SELECT * from products";
				$query = mysqli_query($conn, $sql);
					
						echo '<input type="text" name="product" placeholder="Product Name" id="product" list="datalist1">'; 
						echo '<datalist id="datalist1">';
					
							while($result = mysqli_fetch_assoc($query)){
								echo "<option value='".$result['product']."'>";
							}
							echo '</datalist>';
			?>
						</fieldset>
					</div>
				
					<div>
						<fieldset style="width:50%" class="subject">
							<select name="bussID">
								<option selected="selected" value="">For which Business?</option>
			<?php
				$sql = "SELECT id, business_name FROM add_business WHERE user_id = '$user_id'";
				$query = mysqli_query($conn, $sql);
				while($result = mysqli_fetch_assoc($query)){
			?>
								<option value="<?php echo $result['id']?>"><?php echo $result['business_name']?></option>
			<?php
					}
			?>
							</select>
						</fieldset>
					</div>
					<div>
						<input type="hidden" name="userID" value='<?php echo $user_id;?>'/>
            			<input type="submit" id="add_Biz" name="submit" id="submit" value="ADD" />
          			</div>
          		</form>
		  
			<?php
				 else : 
				 echo "here";
			?>
					
			<?php 
				endif; 
			?>			
          