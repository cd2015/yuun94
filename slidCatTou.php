
                <div class="categoryBox" >
                    <?php
                    $sql9 = "SELECT * from featured WHERE category='Tour&Travel'";

                    $query9 = mysqli_query($conn, $sql9);

                    $result9 = mysqli_fetch_assoc($query9);

                    $feaBizTou = $result9['bussID'];

                    //Query that requests for all categories from ther table
                    $sqltou = "SELECT * from add_business WHERE id = '$feaBizTou'";
                    $querytou = mysqli_query($conn, $sqltou);

                    while ($resulttou = mysqli_fetch_assoc($querytou)) {
                        ?> 
                        <a href="tour&travel">      
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resulttou['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resulttou['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resulttou['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resulttou['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resulttou['email']; ?></h6>
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
                            TOUR & TRAVEL
                        </h4>
                    </div>
                    </a>
                </div>
            