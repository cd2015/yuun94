<?php
    include_once '../includes/functions.php';
    
    $servername = "localhost";
    $username = "yuunga_cyber";
    $password = "yunga123@cyber";
    $dbname = "yuunga_yunga";
            
    $conn = new mysqli ($servername, $username, $password, $dbname);

    //sec_session_start();
?>

<?php if (login_check($mysqli) == true) : 
            
    $user_id = $_SESSION['user_id']; 
        
    $sql = "SELECT * from add_event WHERE user_id = $user_id";
    $query = mysqli_query($conn, $sql);
    ?>
            
    <?php 
    if (!$query->num_rows){
        echo '<p>','No Current Events found','</p>';
        } else {
   
   ?>
        <ul class="BusinessList">
   <?php
            $counter=1;
        while($result = mysqli_fetch_assoc($query)){

    ?>      
            <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#eventDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../images/events/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['title']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['location']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo date("Y-m-d", $result['event_date']); ?></h6>
                        </div>
                        <div class="thmplaceEmail">
                            <h6 class="rD"><?php echo $result['event_start']; ?></h6>
                        </div>
                        
                    </div>
                </a>
            </li>

            <li class="eventDetail" id='eventDetail<?php echo $counter;?>' style="display:none">
                
                <div class="resplaceName">
                    <h2 class="DetplaceName"><?php echo $result['title']; ?></h2>
                </div>
                <div class="resplaceLocation">
                    <h6 class="Detlocation"><?php echo $result['location']; ?></h6>
                </div>
                <div class="thmplacePhone">
                    <h6 class="rD"><?php echo date("Y-m-d", $result['event_date']); ?></h6>
                </div>
                <div class="thmplaceEmail">
                     <h6 class="rD">Start Time: <?php echo $result['event_start']; ?></h6>
                </div>
                <div class="thmplaceEmail">
                     <h6 class="rD">End Time: <?php echo $result['event_end']; ?></h6>
                </div>
                <div class="thumbImg">
                    <img width="100%" src ="../images/events/<?php echo $result['logo'];?>"/>
                </div>
                <label style="font-weight:bold">Description</label>
                <div class="resplaceDescription">
                    <h6 class="DetAbout"><?php echo $result['event']; ?></h6>
                </div>
                <div class="resplaceCategory">
                    <h5 class="DetCategory">Category: #<?php echo $result['category']; ?></h5>
                </div>
                <div class="resplacePhone">
                    <h6 class="DetTel">Region: <?php echo $result['region']; ?></h6>
                </div>
                <div class="resplacePhone">
                    <h6 class="DetTel">Contact Person: <?php echo $result['contact_name']; ?></h6>
                </div>
                <div class="resplaceEmail">
                    <h6 class="DetEmail">Contact Email Address: <?php echo $result['contact_email']; ?></a></h6>
                </div>
                <div class="resplacePhone">
                    <h6 class="DetMob"> Contact Phone Number:<?php echo $result['contact_phone']; ?></a></h6>
                </div>
                <div>
                    <a class="update" href="edit_event.php?id=<?php echo $result['id']; ?>">Edit</a>
                    <a class="btn delete" href="delete_event.php?id=<?php echo $result['id']; ?>">Delete</a>
                </div>
                
            </li>
        <?php

            $counter = $counter + 1;
            }
        ?>
        </ul>
    <?php
        } 
    ?>
     
<?php
     else :
?>
        <p>
            <script type="text/javascript">
                alert("Login to access page !");
                window.location.href = '../login/';
            </script>
        </p>
<?php 
    endif; 
?>
