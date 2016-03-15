<ul class="area" id="Ebb">
    <ul class="BusinessList">
        <h2>Top Events</h2>
	<?php
    $sql1 = "SELECT * from featured WHERE category='Event'";

    $query1 = mysqli_query($conn, $sql1);

    while($result1 = mysqli_fetch_assoc($query1)){

        $feaEvent = $result1['bussID'];

        //Query that requests for all categories from ther table
        $sqlacc = "SELECT * from add_event WHERE id = '$feaEvent'";
        $queryacc = mysqli_query($conn, $sqlacc);

        
        $counter = 1;

        while ($result = mysqli_fetch_assoc($queryacc)) {
        	?>

        	    <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#events<?php echo $counter; ?>' class="bizzThumb">
                        <div class="container" >
                            <div class="thumbImg">
                                <img width="100%" src ="images/events/<?php echo 'thumb_' . $result['logo']; ?>"/>
                            </div>
                            <div class="thumbDesc">
                                <div class="thbEventName">
                                    <h4 class="thumbplaceName"><?php echo $result['title']; ?></h4>
                                </div>
                                <div class="thbEventAddeess">
                                    <h5 class="rD"><?php echo $result['location']; ?></h5>
                                </div>
                                <div class="thbEventPhone">
                                    <h6 class="rD"><?php echo $result['event_date']; ?></h6>
                                </div>
                                <div class="thbEventEmail">
                                    <h6 class="rD"><?php echo $result['event_start']; ?></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="bizDetail" id='events<?php echo $counter; ?>' style="display:none">

                    <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['title']; ?></h2>
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
                    <div class="thumbImg2">
                        <img width="100%" src ="images/events/<?php echo $result ['logo']; ?>"/>
                    </div>
                    <label style="font-weight:bold">About the Event: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['event']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Time of Event: <span><?php echo $result ['event_start']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">End time: <span><?php echo $result ['event_end']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Contact Name: <span><?php echo $result ['contact_name']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Contact Email: <span><?php echo $result ['contact_email']; ?></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Contact Phone No.: <span><?php echo $result ['contact_phone']; ?></span></h6>
                    </div>
                </li>
                <?php
       }

       $counter = $counter + 1;
    }
    ?>
    
	  </ul>
    
</ul>