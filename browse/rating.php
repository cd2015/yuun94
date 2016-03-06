<div class="rating" data-rating="4">
                            <span class="Detstars">
                                <?php

                                //pick up the rating
                                $sql5 = "SELECT * from add_business WHERE id=$ID";

                                $query5 = mysqli_query($conn, $sql5);

                                while ($result5 = mysqli_fetch_assoc($query5)) {
                                    $rating = $result5['rating'];
                                }


                                //pick up number of people that rated
                                $sql6 = "SELECT * from rating WHERE bussID=$ID";

                                $query6 = mysqli_query($conn, $sql6);

                                $people = mysqli_num_rows($query6);

                                    if($rating == 5){
                                        ?>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                        <?php
                                        }elseif ($rating == 4) {
                                        ?>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                        <?php
                                        }elseif ($rating == 3) {
                                        ?>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                        <?php
                                        }elseif ($rating == 2) {
                                        ?>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                        <?php
                                        }elseif ($rating == 1) {
                                        ?>
                                            <i class="fa fa-star" id="Rated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                        <?php
                                        }else{
                                        ?>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                            <i class="fa fa-star" id="UnRated"></i>
                                        <?php
                                        }
                                    
                                 ?>
                            </span>
                            <em><font style="font-size:10px;color:#662046"><?php echo $people.' Person(s)'; ?></font></em>
                        </div>