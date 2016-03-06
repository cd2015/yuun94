
                <div class="categoryBox" >
                    <?php
                    $sql4 = "SELECT * from featured WHERE category='Entertainment'";

                    $query4 = mysqli_query($conn, $sql4);

                    $result4 = mysqli_fetch_assoc($query4);

                    $feaBizEnt = $result4['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlent = "SELECT * from add_business WHERE id = '$feaBizEnt'";
                    $queryent = mysqli_query($conn, $sqlent);

                    while ($resultent = mysqli_fetch_assoc($queryent)) {
                        ?>  
                        <a href="entertainment">     
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultent['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultent['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultent['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultent['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultent['email']; ?></h6>
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
                            ENTERTAINMENT
                        </h4>
                    </div>
                    </a>
                </div>
            