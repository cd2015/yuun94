<?php
require_once '../../includes/db_connection.php';

$ID = $_GET['id'];
//Query that requests for the gig from ther table
$sql = "SELECT * from gigs WHERE id='$ID'";
$query = mysqli_query($conn, $sql);
$count = mysqli_num_rows($query);

while ($result = mysqli_fetch_assoc($query)) {
    ?> 
    <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">
        <div class="resplaceName">
            <h2 class="DetplaceName"><?php echo $result['gig']; ?></h2>
        </div>
        <div class="resplaceLocation">
            <h6 class="Detlocation"><?php echo $result['price']; ?></h6>
        </div>
        <div class="resplaceLocation">
            <h6 class="Detlocation"><?php echo $result['duration']; ?></h6>
        </div>
        <div class="resplacePhone">
            <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " " . $result['tel_no']; ?></a></h6>
        </div>
        <div class="resplacePhone">
            <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " " . $result['whatsapp']; ?></a></h6>
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
            <img width="100%" src ="../../images/gigs/<?php echo $result['logo']; ?>"/>
        </div>
        <label style="font-weight:bold">Description</label>
        <div class="resplaceDescription">
            <h6 class="DetAbout"><?php echo $result['detail']; ?></h6>
        </div>
        <div class="resplaceCategory">
            <h5 class="DetCategory">Category: <?php echo $result['category']; ?></h5>
        </div>
        <div class="resplaceCategory">
            <h5 class="DetCategory"> Sub Category: <?php echo $result['sub_category']; ?></h5>
        </div>
        <div class="resplacePhone">
            <h6 class="DetMob"><i class="fa fa-skype"></i><a href="tel:<?php echo $result['skype']; ?>"> <?php echo $result['skype']; ?></a></h6>
        </div>
        <div class="resplaceEmail">
            <h6 class="DetEmail">Email Address:<a href="<?php echo $result['email']; ?>"> <?php echo $result['email']; ?></a></h6>
        </div>
        <div class="resplaceWeb">
            <h6 class="DetWeb">Website Address:<a href="<?php echo $result['website']; ?>"> <?php echo $result['website']; ?></a></h6>
        </div>
        <div class="resplacePost">
            <h6 class="DetPost">Location: <?php echo $result['location']; ?></h6>
        </div>
        <div class="resplacePost">
            <h6 class="DetPost">Region: <?php echo $result['region']; ?></h6>
        </div>
    </li>
<?php } ?>
