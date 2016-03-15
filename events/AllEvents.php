<?php
$date_today = date("F d, Y");
$event_day = new DateTime($date_today);
$event_create = $event_day->format('U');

$sql = "SELECT * FROM add_event WHERE (round(event_date_converted - $event_create )/(60*60*24)) > 30";
$query = mysqli_query($conn, $sql);

$count = mysqli_num_rows($query);

if ($count == 0) {
    echo 'No future events.';
} else {
    ?>
    <ul class="area" id="Ebb">
        <ul class="BusinessList">
            <?php
            $counter = 1;

            while ($result = mysqli_fetch_assoc($query)) {
                ?>       
                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                    <a href='#events<?php echo $counter; ?>' class="bizzThumb">
                        <div class="container">
                            <div class="thumbImg">
                                <img width="100%" src ="../images/events/<?php echo 'thumb_' . $result['logo']; ?>"/>
                            </div>
                            <div class="thumbDesc">
                                <div class="thbplaceName">
                                    <h4 class="thumbplaceName"><?php echo $result['title']; ?></h4>
                                </div>
                                <div class="thmplaceAddeess">
                                    <h5 class="rD"><?php echo $result['location']; ?></h5>
                                </div>
                                <div class="thmplacePhone">
                                    <h6 class="rD"><?php echo $result['event_date']; ?></h6>
                                    <?php
                                    $event_Date_2 = strtotime($result['event_date']);
                                    $days = round(($event_Date_2 - $event_create) / (60 * 60 * 24));
                                    ?>
                                </div>
                                <div class = "thmplaceEmail">
                                    <h6 class = "rD"><?php echo $days . ' days to go.';
                                    ?></h6>
                                </div>
                            </div></div>
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
                        <img width="100%" src ="../images/events/<?php echo $result ['logo']; ?>"/>
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
                $counter = $counter + 1;
            }
            ?>
        </ul>
    <?php } ?>
</ul>