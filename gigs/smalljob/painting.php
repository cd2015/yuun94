<?php
//Query that requests for all categories from ther table
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Kampala'";
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
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Entebbe'";
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
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Fort Portal'";
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
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Jinja'";
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
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Mbale'";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    
} else {
    ?>
    <ul class="area">
        <h3 class="areaName">Mbale(<?php echo $count; ?>)</h3>

        <ul class="BusinessList">

            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>
                       
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Mbarara'";
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
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Gulu'";
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
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
$sql = "SELECT * from gigs WHERE sub_category='Painting/Painter' AND region='Rest of Uganda'";
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
                <li class="bizThumb" id='bizThumb<?php echo $counter;?>'>
                <a href='#bizDetail<?php echo $counter;?>' class="bizzThumb">
                    <div class="thumbImg">
                        <img width="100%" src ="../../images/gigs/<?php echo 'thumb_'.$result['logo'];?>"/>
                    </div>
                    <div class="thumbDesc">
                        <div class="thbplaceName">
                            <h4 class="thumbplaceName"><?php echo $result['gig']; ?></h4>
                        </div>
                        <div class="thmplaceAddeess">
                            <h5 class="rD"><?php echo $result['price']; ?></h5>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><?php echo $result['duration']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-phone"></i><?php echo " ".$result['tel_no']; ?></h6>
                        </div>
                        <div class="thmplacePhone">
                            <h6 class="rD"><i class="fa fa-whatsapp"></i><?php echo " ".$result['whatsapp']; ?></h6>
                        </div>
                    </div>
                </a>
            </li>

            <li class="bizDetail" id='bizDetail<?php echo $counter;?>' style="display:none">
                
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
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                    <img width="100%" src ="../../images/gigs/<?php echo $result['logo'];?>"/>
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
                <?php
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>