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
        
    $sql = "SELECT * from add_business WHERE user_id = $user_id";
    $query = mysqli_query($conn, $sql);
    ?>
            
    <?php 
    if (!$query->num_rows){
        echo '<p>','No Businesses found','</p>';
        } else {
   
   ?>
        <ul class="BusinessList">
   <?php
            $counter=1;
        while($result = mysqli_fetch_assoc($query)){

    ?>      
            <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../images/uploads/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['business_name']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['location']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['mob_no']; ?></h6>
                        </div>
                        <div class="thmplaceEmail">
                            <h6 class="rD"><?php echo $result['email']; ?></h6>
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
                    <h2 class="DetplaceName"><?php echo $result['business_name']; ?></h2>
                </div>
                <div class="resplaceLocation">
                    <h6 class="Detlocation"><?php echo $result['location']; ?></h6>
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
                    <img width="100%" src ="../images/uploads/<?php echo $result['logo'];?>"/>
                </div>
                <label style="font-weight:bold">Description</label>
                <div class="resplaceDescription">
                    <h6 class="DetAbout"><?php echo $result['about']; ?></h6>
                </div>
                <div class="resplaceCategory">
                    <h5 class="DetCategory">Category: <?php echo $result['category']; ?></h5>
                </div>
                <div class="resplacePhone">
                    <h6 class="DetTel">Tel No:<a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo $result['tel_no']; ?></a></h6>
                </div>
                <div class="resplacePhone">
                    <h6 class="DetMob">Alternative Contact:<a href="tel:<?php echo $result['mob_no']; ?>"> <?php echo $result['mob_no']; ?></a></h6>
                </div>
                <div class="resplaceEmail">
                    <h6 class="DetEmail">Email Address:<a href="<?php echo $result['email']; ?>"> <?php echo $result['email']; ?></a></h6>
                </div>
                <div class="resplaceWeb">
                    <h6 class="DetWeb">Website Address:<a href="<?php echo $result['website']; ?>"> <?php echo $result['website']; ?></a></h6>
                </div>
                <div class="resplacePost">
                    <h6 class="DetPost">Postal Address: <?php echo $result['postal_add']; ?></h6>
                </div>
                <div>
                    <a class="update" href="edit_business.php?id=<?php echo $result['id']; ?>">Edit</a>
                    <a class="btn delete" href="delete_business.php?id=<?php echo $result['id']; ?>">Delete</a>
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
