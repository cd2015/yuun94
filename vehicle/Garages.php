<?php
//Query that requests for all categories from ther table
$sql = "SELECT * from add_business WHERE category='Garage' AND region='Kampala'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    
} else {
    ?>
    <ul class="area" id="Ebb">
        <h3 class="areaName">Kampala(<?php echo $count; ?>)</h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>
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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>   
<!-- 
            ******** Entebbe Apartments ********
-->
<?php
//Query that requests for all categories from ther table
$sql = "SELECT * from add_business WHERE category='Garage' AND region='Entebbe'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    
} else {
    ?>
    <ul class="area" id="Ebb">
        <h3 class="areaName">Entebbe(<?php echo $count; ?>)</h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>
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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>   


<!-- 
        ******** Fort portal Apartments ********
-->    

<?php
//Query that requests for all categories from ther table
$sql = "SELECT * from add_business WHERE category='Garage' AND region='Fort Portal'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    
} else {
    ?>
    <ul class="area">
        <h3 class="areaName">Fort Portal<?php echo $count; ?></h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>
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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>

<!-- 
        ******** Jinja Apartments ********
-->                                      

<?php
//Query that requests for all categories from ther table
$sql = "SELECT * from add_business WHERE category='Garage' AND region='Jinja'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    
} else {
    ?>
    <ul class="area">
        <h3 class="areaName">Jinja(<?php echo $count; ?>)</h3>
        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>

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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>
<!-- 
        ******** Mbale Apartments ********
--> 

<?php
$sql = "SELECT * from add_business WHERE category='Garage' AND region='Mbale'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    
} else {
    ?>
    <ul class="area">
        <h3 class="areaName">Mbale<?php echo $count; ?></h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>
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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>
<!-- 
        ******** Mbarara Apartments ********
--> 
<?php
//Query that requests for all categories from ther table
$sql = "SELECT * from add_business WHERE category='Garage' AND region='Mbarara'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    
} else {
    ?>
    <ul class="area">
        <h3 class="areaName">Mbarara(<?php echo $count; ?>)</h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>
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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>

<!-- 
        ******** Gulu Apartments ********
-->                                                                        

<?php
//Query that requests for all categories from ther table
$sql = "SELECT * from add_business WHERE category='Garage' AND region='Gulu'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {

} else {
    ?>
    <ul class="area">
        <h3 class="areaName">Gulu(<?php echo $count; ?>)</h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>
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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>
<!-- 
        ******** Rest of Uganda Apartments ********
--> 

    <?php
    $sql = "SELECT * from add_business WHERE category='Garage' AND region='Rest of Uganda'";
    $query = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($query);

    if ($count == 0) {

    } else {
        ?>
<ul class="area">
    <h3 class="areaName">Rest of Uganda(<?php echo $count; ?>)</h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                        <div class="thumbImg">
                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $result['logo']; ?>"/>
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
                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
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
                        <img width="100%" src ="../uploads/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><?php echo $result ['website']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                </li>
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>