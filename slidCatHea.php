
                <div class="categoryBox" >
                    <?php
                    $sql6 = "SELECT * from featured WHERE category='Health'";

                    $query6 = mysqli_query($conn, $sql6);

                    $result6 = mysqli_fetch_assoc($query6);

                    $feaBizHea = $result6['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlhea = "SELECT * from add_business WHERE id = '$feaBizHea'";
                    $queryhea = mysqli_query($conn, $sqlhea);

                    while ($resulthea = mysqli_fetch_assoc($queryhea)) {
                        ?>
                        <a href="health">       
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resulthea['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resulthea['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resulthea['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resulthea['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resulthea['email']; ?></h6>
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
                            HEALTH
                        </h4>
                    </div>
                    </a>
                </div>
            
