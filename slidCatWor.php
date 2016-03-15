
<div class="categoryBox" >
                    <?php
                    $sql11 = "SELECT * from featured WHERE category='Worship'";

                    $query11 = mysqli_query($conn, $sql11);

                    $result11 = mysqli_fetch_assoc($query11);

                    $feaBizWor = $result11['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlwor = "SELECT * from add_business WHERE id = '$feaBizWor'";
                    $querywor = mysqli_query($conn, $sqlwor);

                    while ($resultwor = mysqli_fetch_assoc($querywor)) {
                        ?>   
                        <a href="worship">    
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultwor['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultwor['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultwor['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultwor['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultwor['email']; ?></h6>
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
                            WORSHIP
                        </h4>
                    </div>
                    </a>
                </div>
                