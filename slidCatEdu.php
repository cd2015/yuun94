
                <div class="categoryBox" >
                    <?php
                    $sql3 = "SELECT * from featured WHERE category='Education'";

                    $query3 = mysqli_query($conn, $sql3);

                    $result3 = mysqli_fetch_assoc($query3);

                    $feaBizEdu = $result3['bussID'];

                    //Query that requests for all categories from ther table
                    $sqledu = "SELECT * from add_business WHERE id = '$feaBizEdu'";
                    $queryedu = mysqli_query($conn, $sqledu);

                    while ($resultedu = mysqli_fetch_assoc($queryedu)) {
                        ?>
                        <a href="education">       
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultedu['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultedu['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultedu['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultedu['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultedu['email']; ?></h6>
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
                            EDUCATION
                        </h4>
                    </div>
                    </a>
                </div>
                                