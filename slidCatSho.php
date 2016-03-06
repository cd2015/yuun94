
                <div class="categoryBox" >
                    <?php
                    $sql7 = "SELECT * from featured WHERE category='Shopping'";

                    $query7 = mysqli_query($conn, $sql7);

                    $result7 = mysqli_fetch_assoc($query7);

                    $feaBizSho = $result7['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlsho = "SELECT * from add_business WHERE id = '$feaBizSho'";
                    $querysho = mysqli_query($conn, $sqlsho);

                    while ($resultsho = mysqli_fetch_assoc($querysho)) {
                        ?> 
                        <a href="shopping">      
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultsho['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultsho['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultsho['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultsho['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultsho['email']; ?></h6>
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
                            SHOPPING
                        </h4>
                    </div>
                    </a>
                </div>
            