<?php
//require_once '../includes/functions.php';
//sec_session_start();

?>
<div>
    <h4 style="color: rgb(0, 0, 0);font-weight: bold;">Reviews</h4>

    <?php

    		$sql2 = "SELECT * from review WHERE bussID=$ID";

			$query2 = mysqli_query($conn, $sql2);

            $count2 = mysqli_num_rows($query2);

            while ($result2 = mysqli_fetch_assoc($query2)) {

            ?>
    			<h6 style="margin-left: 5%;" class="DetPost"><?php echo $result2 ['reviewer']; ?>
    				&nbsp;
    				<em><font style="font-size:12px;color:#662046">
    					"<span><?php echo $result2 ['review']; ?></span>"
    				</font></em>
    				</h6>

    		<?php
    	}
    		?>

    	<form id="largeForms" class="yungaForms" name="add_review" method="post" action="" enctype="multipart/form-data">

    		<div>
                <fieldset class="subject" style="width:90%" ><input id="review" type="text" name="review" placeholder ="Have you been to this place? Whats your review?" /></fieldset> 
            </div>

            <div>
            	<span><i class="fa fa-star" id="Rated"></i>  Rate out 5</span>
            	<fieldset style="width:20%" class="subject">
            		<select id="rating" name="rating" style="width: 90%;">
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                	</select>

                </fieldset> 
            </div>

            <div>

            	<?php if ( ($_SESSION['FBID']) == true) : ?>      <!--  If Logged In  -->
				As <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture">
				<?php echo $_SESSION['FULLNAME']; ?>
				<a href="../includes/logout.php">Logout</a>
				<?php else: ?>     <!-- Before login -->
					<a id='fbregister' style='color:#fff' href='../includes/fbuser.php?id=<?php echo $ID;?>'>Login with Facebook</a> &nbsp; &nbsp; AND 
				<?php endif ?>

                <input style="width:50%" type="submit" id="add_Biz" name="add_review" value="Submit Review & Rating"/> 
            </div>

    	</form>
</div>


<?php
            if (isset($_POST['add_review'])) {
                $bussID = $ID;
                $review = $_POST['review'];
                $reviewer = $_SESSION['FULLNAME'];
                $user_id = $_SESSION['FBID'];
                $rating = $_POST['rating'];
                
                if (!empty($user_id)){

                	if (!empty($review)){

	                	$insert_stmt = $mysqli->prepare("INSERT INTO review (bussID, review, reviewer, userID) VALUES 
															(?, ?, ?, ?)");
		                $insert_stmt->bind_param('issi', $bussID, $review, $reviewer, $user_id);

		                $insert_stmt->execute();

		                if ($insert_stmt) {
		                   //echo "Successfully Added";  
		                }else {
			                mysql_error();
			            }
		                
		            }

		            if (!empty($rating)){

		            	$insert_stmt = $mysqli->prepare("INSERT INTO rating (bussID, rating, userID) VALUES 
															(?, ?, ?)");
		                $insert_stmt->bind_param('iii', $bussID, $rating, $user_id);

		                $insert_stmt->execute();

		                if ($insert_stmt) {
		                   //echo "Successfully Added";

		                	/*Update rate field in the add_business table*/

		                	$sql4 = "SELECT * from rating WHERE bussID=$ID";

							$query4 = mysqli_query($conn, $sql4);

							$count4 = mysqli_num_rows($query4);

							$totalRate = 0;

				            while ($result4 = mysqli_fetch_assoc($query4)) {

				            		$totalRate = $totalRate + $result4 ['rating'];
				            	}

				            	$avgRate = $totalRate/$count4;

				            	$finalRate = round($avgRate);

				            	$update = $conn->prepare("UPDATE add_business SET rating = ? WHERE id = '$ID'");
								$update->bind_param('i', $finalRate);
								$update->execute();
								if ($update) {
				                   //echo "Successfully updated";  
				                }else {
					                mysql_error();
					            }
		                }else {
			                mysql_error();
			            }

		            }
                }
            }
            ?>