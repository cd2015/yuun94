
                <div class="categoryBox" >
                    <?php
                    $sql10 = "SELECT * from featured WHERE category='Vehicle'";

                    $query10 = mysqli_query($conn, $sql10);

                    $result10 = mysqli_fetch_assoc($query10);

                    $feaBizVeh = $result10['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlveh = "SELECT * from add_business WHERE id = '$feaBizVeh'";
                    $queryveh = mysqli_query($conn, $sqlveh);

                    while ($resultveh = mysqli_fetch_assoc($queryveh)) {
                        ?> 
                        <a href="vehicle">      
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultveh['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultveh['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultveh['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultveh['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultveh['email']; ?></h6>
                                </div>
                                <div class="resplaceRte">
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

                        </li>
                    <?php } ?>

                    <div class="categorysection">

                        <h4 class="categoryName">
                            VEHICLE
                        </h4>
                    </div>
                    </a>
                </div>
            