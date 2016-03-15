<div class="categoryBox" >
                    <?php
                    $sql2 = "SELECT * from featured WHERE category='Business'";

                    $query2 = mysqli_query($conn, $sql2);

                    $result2 = mysqli_fetch_assoc($query2);

                    $feaBizBus = $result2['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlbus = "SELECT * from add_business WHERE id = '$feaBizBus'";
                    $querybus = mysqli_query($conn, $sqlbus);

                    while ($resultbus = mysqli_fetch_assoc($querybus)) {
                        ?>
                        <a href="business">      
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultbus['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultbus['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultbus['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultbus['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultbus['email']; ?></h6>
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
                            BUSINESS
                        </h4>
                    </div>
                   </a> 
                </div>
            