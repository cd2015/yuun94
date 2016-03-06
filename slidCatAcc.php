                <div class="categoryBox">
                    
                    <?php
                    $sql1 = "SELECT * from featured WHERE category='Accomodation'";

                    $query1 = mysqli_query($conn, $sql1);

                    $result1 = mysqli_fetch_assoc($query1);

                    $feaBizAcc = $result1['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlacc = "SELECT * from add_business WHERE id = '$feaBizAcc'";
                    $queryacc = mysqli_query($conn, $sqlacc);

                    while ($resultacc = mysqli_fetch_assoc($queryacc)) {
                        ?>
                        <a href="accomodation">
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultacc['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultacc['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultacc['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultacc['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultacc['email']; ?></h6>
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

                        <h4 class="categoryName"><!--
                            <a href="./accomodation/">-->ACCOMMODATION<!--</a>-->
                        </h4>
                    </div>
                    </a>
                </div>
            