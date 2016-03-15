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

		<ul class="circleRes" id="businessNeeded">
		
		<h4 class="circleHead">Here are some businesses that produce the products that you need for your business, Look through for those close to your location and add them to your business network </h4>
			
		<?php
		
			//pick all products from DB that the business requires(1) 
			$sql = "SELECT Product from circle WHERE usrId = $user_id AND relType = '1'";
			$query = mysqli_query($conn, $sql);
	
			//if there are no records, means that their are no records of what the business requires
			if (!$query->num_rows){
				echo '<p class="circleInst">','Please go to the <a href="#tab3">REQUIREMENTS</a> tab and tell us what your business needs for its operations','</p>';
			} else {
		
				//for each of the products the business requires
				while ($row = mysqli_fetch_assoc($query)){
				
					$product = $row['Product'];
					
					//pick up all the business Ids of the other businesses that produce the product
					$sql1 = "SELECT bussID from circle WHERE Product = '$product' AND relType = '0'";
					$query1 = mysqli_query($conn, $sql1);
					
					//if there are no records in the DB, means that there are no registered companies in the system that produce that product
					if (!$query1->num_rows){
						
					} else {
		?>
						
						<h6 style="float:left;width:100%;font-weight:bold;font-size:14px"><?php echo $product;?></h6>

		<?php
						$counter=1;
						//for all those business IDs, pick up the business details for each business  
						while ($row1 = mysqli_fetch_assoc($query1)){
								
							$businessID = $row1['bussID'];
							
							$sql2 = "SELECT * from add_business WHERE id = '$businessID'";
							$query2 = mysqli_query($conn, $sql2);
								
								//display the business
								while ($row2 = mysqli_fetch_assoc($query2)){
		?>
									<li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
							                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
							                    <div class="thumbImg">
							                        <img width="100%" src ="../images/uploads/<?php echo 'thumb_'.$row2['logo'];?>"/>
							                    </div>
							                    <div class="thumbDesc">
							                        <div class="thbplaceName">
							                            <h4 class="thumbplaceName"><?php echo $row2['business_name']; ?></h4>
							                        </div>
							                        <div class="thmplaceAddeess">
							                            <h5 class="rD"><?php echo $row2['location']; ?></h5>
							                        </div>
							                        <div class="thmplacePhone">
							                            <h6 class="rD"><?php echo $row2['mob_no']; ?></h6>
							                        </div>
							                        <div class="thmplaceEmail">
							                            <h6 class="rD"><?php echo $row2['email']; ?></h6>
							                        </div>
							                        <div class="thmplaceRate">
							                            <div class="rating" data-rating="4">
							                                <span class="stars">
							                                    <i class="fa fa-star s1 active" data-score="1"></i>
							                                    <i class="fa fa-star s2 active" data-score="2"></i>
							                                    <i class="fa fa-star s3 active" data-score="3"></i>
							                                    <i class="fa fa-star s4 active" data-score="4"></i>
							                                    <i class="fa fa-star s5" data-score="5"></i>
							                                </span>
							                            </div>
							                        </div>
							                    </div>
							                </a>
							            </li>

							            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
							                
							                <div class="resplaceName">
							                    <h2 class="DetplaceName"><?php echo $row2['business_name']; ?></h2>
							                </div>
							                <div class="resplaceLocation">
							                    <h6 class="Detlocation"><?php echo $row2['location']; ?></h6>
							                </div>
							                <div class="resplaceRate">
							                        <div class="rating" data-rating="4">
							                            <span class="Detstars">
							                                <i class="fa fa-star s1 active" data-score="1"></i>
							                                <i class="fa fa-star s2 active" data-score="2"></i>
							                                <i class="fa fa-star s3 active" data-score="3"></i>
							                                <i class="fa fa-star s4 active" data-score="4"></i>
							                                <i class="fa fa-star s5" data-score="5"></i>
							                            </span>
							                        </div>
							                    </div>
							                <div class="thumbImg">
							                    <img width="100%" src ="../images/uploads/<?php echo $row2['logo'];?>"/>
							                </div>
							                <label style="font-weight:bold">Description</label>
							                <div class="resplaceDescription">
							                    <h6 class="DetAbout"><?php echo $row2['about']; ?></h6>
							                </div>
							                <div class="resplaceCategory">
							                    <h5 class="DetCategory">Category: <?php echo $row2['category']; ?></h5>
							                </div>
							                <div class="resplacePhone">
							                    <h6 class="DetTel">Tel No:<a href="tel:<?php echo $row2['tel_no']; ?>"> <?php echo $row2['tel_no']; ?></a></h6>
							                </div>
							                <div class="resplacePhone">
							                    <h6 class="DetMob">Alternative Contact:<a href="tel:<?php echo $row2['mob_no']; ?>"> <?php echo $row2['mob_no']; ?></a></h6>
							                </div>
							                <div class="resplaceEmail">
							                    <h6 class="DetEmail">Email Address:<a href="<?php echo $row2['email']; ?>"> <?php echo $row2['email']; ?></a></h6>
							                </div>
							                <div class="resplaceWeb">
							                    <h6 class="DetWeb">Website Address:<a href="<?php echo $row2['website']; ?>"> <?php echo $row2['website']; ?></a></h6>
							                </div>
							                <div class="resplacePost">
							                    <h6 class="DetPost">Postal Address: <?php echo $row2['postal_add']; ?></h6>
							                </div>
							                
							            </li>
						<?php
								$counter = $counter + 1;
							}
						}
					}
				}
			}
					
		//echo $_SESSION['username'];				
				?>
				
				</ul>
				
				


	<ul class="circleRes" id="businessInNeed">
				
		<h4 class="circleHead" > And here are some potential customers, These businesses use some of your products for their operations. Quickly contact them to increase your customer base </h4>
			
		<?php

			//pick all products from DB that the business produces(0) 

			$sql3 = "SELECT Product from circle WHERE usrId = '$user_id' AND relType = '0'";
			$query3 = mysqli_query($conn, $sql3);
	
			//if there are no records, means that their are no records of what the business produces
			if (!$query3->num_rows){
				echo '<p class="circleInst">','Please go to the <a href="#tab2">DELIVERABLES</a> tab and tell us what your business produces','</p>';
			} else {
		
				//for each of the products the business produces
				while ($row3 = mysqli_fetch_assoc($query3)){
					$product1 = $row3['Product'];
					
					//pick up all the business Ids of the other businesses that require the product
					$sql4 = "SELECT bussID from circle WHERE Product = '$product1' AND relType = '1'";
					$query4 = mysqli_query($conn, $sql4);
					
					//if there are no records in the DB, means that there are no registered companies in the system that require that product
					if (!$query4->num_rows){
						
						} else {

							?>
								<h6 style="float:left;width:100%;font-weight:bold;font-size:14px"><?php echo $product1;?></h6>
							<?php

								$counterr=1;
								//for all those business IDs, pick up the business details for each business and display them  
								while ($row4 = mysqli_fetch_assoc($query4)){
										
									$businessID1 = $row4['bussID'];
									
									$sql5 = "SELECT * from add_business WHERE id = '$businessID1'";
									$query5 = mysqli_query($conn, $sql5);
										
										//display the business
										while ($row5 = mysqli_fetch_assoc($query5)){
									?>

										<li class="bizThumb" id='bizThumb<?php echo $counterr;?>'>
							                <a href='#bizDetail<?php echo $counterr;?>' class="bizzThumb">
							                    <div class="thumbImg">
							                        <img width="100%" src ="../images/uploads/<?php echo 'thumb_'.$row5['logo'];?>"/>
							                    </div>
							                    <div class="thumbDesc">
							                        <div class="thbplaceName">
							                            <h4 class="thumbplaceName"><?php echo $row5['business_name']; ?></h4>
							                        </div>
							                        <div class="thmplaceAddeess">
							                            <h5 class="rD"><?php echo $row5['location']; ?></h5>
							                        </div>
							                        <div class="thmplacePhone">
							                            <h6 class="rD"><?php echo $row5['mob_no']; ?></h6>
							                        </div>
							                        <div class="thmplaceEmail">
							                            <h6 class="rD"><?php echo $row5['email']; ?></h6>
							                        </div>
							                        <div class="thmplaceRate">
							                            <div class="rating" data-rating="4">
							                                <span class="stars">
							                                    <i class="fa fa-star s1 active" data-score="1"></i>
							                                    <i class="fa fa-star s2 active" data-score="2"></i>
							                                    <i class="fa fa-star s3 active" data-score="3"></i>
							                                    <i class="fa fa-star s4 active" data-score="4"></i>
							                                    <i class="fa fa-star s5" data-score="5"></i>
							                                </span>
							                            </div>
							                        </div>
							                    </div>
							                </a>
							            </li>

							            <li class="bizDetail" id='bizDetail<?php echo $counterr;?>' style="display:none">
							                
							                <div class="resplaceName">
							                    <h2 class="DetplaceName"><?php echo $row5['business_name']; ?></h2>
							                </div>
							                <div class="resplaceLocation">
							                    <h6 class="Detlocation"><?php echo $row5['location']; ?></h6>
							                </div>
							                <div class="resplaceRate">
							                        <div class="rating" data-rating="4">
							                            <span class="Detstars">
							                                <i class="fa fa-star s1 active" data-score="1"></i>
							                                <i class="fa fa-star s2 active" data-score="2"></i>
							                                <i class="fa fa-star s3 active" data-score="3"></i>
							                                <i class="fa fa-star s4 active" data-score="4"></i>
							                                <i class="fa fa-star s5" data-score="5"></i>
							                            </span>
							                        </div>
							                    </div>
							                <div class="thumbImg">
							                    <img width="100%" src ="../images/uploads/<?php echo $row5['logo'];?>"/>
							                </div>
							                <label style="font-weight:bold">Description</label>
							                <div class="resplaceDescription">
							                    <h6 class="DetAbout"><?php echo $row5['about']; ?></h6>
							                </div>
							                <div class="resplaceCategory">
							                    <h5 class="DetCategory">Category: <?php echo $row5['category']; ?></h5>
							                </div>
							                <div class="resplacePhone">
							                    <h6 class="DetTel">Tel No:<a href="tel:<?php echo $row5['tel_no']; ?>"> <?php echo $row5['tel_no']; ?></a></h6>
							                </div>
							                <div class="resplacePhone">
							                    <h6 class="DetMob">Alternative Contact:<a href="tel:<?php echo $row5['mob_no']; ?>"> <?php echo $row5['mob_no']; ?></a></h6>
							                </div>
							                <div class="resplaceEmail">
							                    <h6 class="DetEmail">Email Address:<a href="<?php echo $row5['email']; ?>"> <?php echo $row5['email']; ?></a></h6>
							                </div>
							                <div class="resplaceWeb">
							                    <h6 class="DetWeb">Website Address:<a href="<?php echo $row5['website']; ?>"> <?php echo $row5['website']; ?></a></h6>
							                </div>
							                <div class="resplacePost">
							                    <h6 class="DetPost">Postal Address: <?php echo $row5['postal_add']; ?></h6>
							                </div>
							                						                
							            </li>
						<?php
								$counterr = $counterr + 1;
							}
						}
					}
				}
			}
					
		//echo $_SESSION['username'];				
				?>
				
		</ul>
						
	<?php
		else : 
			echo "here";
	?>
					
	<?php 
		endif; 
	?>
