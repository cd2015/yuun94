 
                <div class="categoryBox" >
                    <?php
                    $sql8 = "SELECT * from featured WHERE category='Sports&Outdoor'";

                    $query8 = mysqli_query($conn, $sql8);

                    $result8 = mysqli_fetch_assoc($query8);

                    $feaBizSpo = $result8['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlspo = "SELECT * from add_business WHERE id = '$feaBizSpo'";
                    $queryspo = mysqli_query($conn, $sqlspo);

                    while ($resultspo = mysqli_fetch_assoc($queryspo)) {
                        ?>
                        <a href="sports&outdoor">       
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultspo['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultspo['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultspo['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultspo['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultspo['email']; ?></h6>
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
                            SPORTS & OUTDOOR
                        </h4>
                    </div>
                    </a>
                </div>
            