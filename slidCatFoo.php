
                <div class="categoryBox" >
                    <?php
                    $sql5 = "SELECT * from featured WHERE category='Food&Drinks'";

                    $query5 = mysqli_query($conn, $sql5);

                    $result5 = mysqli_fetch_assoc($query5);

                    $feaBizFoo = $result5['bussID'];

                    //Query that requests for all categories from ther table
                    $sqlfoo = "SELECT * from add_business WHERE id = '$feaBizFoo'";
                    $queryfoo = mysqli_query($conn, $sqlfoo);

                    while ($resultfoo = mysqli_fetch_assoc($queryfoo)) {
                        ?>  
                        <a href="food&drinks">     
                        <li class="locBrowse">

                            <div class="resImg">
                                <img width="100%" height="" src="images/uploads/<?php echo 'thumb_'.$resultfoo['logo']; ?>"/>
                            </div>
                            <div class="resDsc">
                                <div class="resplaceNam">
                                    <h4 class="rD"><?php echo $resultfoo['business_name']; ?></h4>
                                </div>
                                <div class="resplaceAdd">
                                    <h5 class="rD"><?php echo $resultfoo['location']; ?></h5>
                                </div>
                                <div class="resplacePho">
                                    <h6 class="rD"><?php echo $resultfoo['mob_no']; ?></h6>
                                </div>
                                <div class="resplaceEm">
                                    <h6 class="rD"><?php echo $resultfoo['email']; ?></h6>
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
                            FOOD & DRINK
                        </h4>
                    </div>
                    </a>
                </div>
            