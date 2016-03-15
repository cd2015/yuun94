<?php 
    include 'db_connection.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>
        <title>Yuunga | Search Results </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="../scripts/forms.js"></script>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
        <script>window.jQuery || document.write("<script src='../scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>
        <script type="text/javascript" src="../scripts/business.js"></script>
        <script type="text/javascript" src="js/categories.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php require_once '../includes/header.php'; ?>
        <section class="pageHeading">
            <div class="container">
                <article>
                 <!--   <div id="pageTitle"><
                        <div id="pageTitleIcon">
                            <i class="fa fa-search" id="locIcon"></i>
                        </div>-->
                    <!--    <div id="title">
                            <div id="title"> -->
                                <a href="http://www.cyberdynamics.co.ug/branding">
                                    <img width="100%" alt="brand Ad" src="../images/brand.gif">
                                </a>
                                
                                <?php

                                function getmicrotime() {
                                    list($usec, $sec) = explode(" ", microtime());
                                    return ((float) $usec + (float) $sec);
                                }

                                $button = $_GET ['submit'];
                                $search = $_GET ['search'];

                                $start_search = getmicrotime();
                                ?><!--
                                <h1 id="Tit"><?php echo $search; ?></h1>-->
                   <!--         </div>
                        </div>  -->
                </article>
                <article>

                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive  Yuunga One -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8755342140590314"
                         data-ad-slot="7871657387"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </article>
            </div>
        </section>

        <section class="mainSection">

            <article class="LeftAds">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive  Yuunga One -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8755342140590314"
                         data-ad-slot="7871657387"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </br></br>

                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive  Yuunga One -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8755342140590314"
                         data-ad-slot="7871657387"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>


            </article>
            <article class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
                        <div class="tabs">

                            <?php
                            if (strlen($search) == 0) {
                                echo "You did not insert any content to search" . "<br/>"
                                . "Please insert search content and search again.";
                            } else if (strlen($search) <= 1) {
                                echo "Search query is too short" . "<br>"
                                . "Use more characters and search again.";
                            } else {

                                $explode_search = explode(" ", $search);

                                $x = "";
                                $statement = "";

                                foreach ($explode_search as $search_query) {
                                    $x++;
                                    if ($x == 1) {
                                        $statement .="business_name LIKE '%$search_query%' OR category LIKE '%$search_query%' OR location LIKE '%$search_query%' "
                                                . "OR about LIKE '%$search_query%'OR region LIKE '%$search_query%'";
                                    } else {
                                        $statement .="AND about LIKE '%$search_query%'";
                                    }
                                }

                                $statements = "SELECT * FROM add_business WHERE $statement";
                                $run = mysql_query($statements);

                                $results = mysql_num_rows($run);

                                $stop_search = getmicrotime();
                                $time_search = ($stop_search - $start_search);

                                if ($results == 0)

                                echo "Sorry, there are no results found for <em><b><font color='#0000'>$search</font></b></em></br></br>
                                1. Use a more distinctive word to search e.g. a 'specific business name such as Cyber Dynamics'</br>
                                2. Try to search for a particular service in a specific location e.g. Apartments in Kampala</br>
                                3. Check your spelling";
                                else {
                                    echo "Results for <em><b><font color='#0000'>$search</font></b></em><br>";

                                    $result_limit = 12;
                                    echo $results . ' results';
                                    ?>
                                    in (<b><?php echo sprintf("%01.2f", $time_search); ?></b>) seconds.<br/>                                

                                    <?php
                                    $counter = 1;

                                    $start = isset($_GET['start']) ? $_GET['start'] : '';
                                    $max_pages = ceil($results / $result_limit);

                                    if (!$start)
                                        $start = 0;

                                    echo 'Showing '. ($start + 1) . " - ";
                                    if (($result_limit + $start) < $results) {
                                        echo ($result_limit + $start);
                                    } else {
                                        echo $results;
                                    }
                                    echo ' out of the ' . $results . ' results.';
                                    ?>                                    
                                    <div id="search">
                                        <ul class="BusinessList">  
                                            <?php
                                            $getquery = mysql_query("SELECT * FROM add_business WHERE $statement LIMIT $start, $result_limit");

                                            while ($row = mysql_fetch_assoc($getquery)) {

                                                $business_name = $row['business_name'];
                                                $category = $row['category'];
                                                $location = $row['location'];
                                                $tel_no = $row['tel_no'];
                                                $mob_no = $row['mob_no'];
                                                $email = $row['email'];
                                                $website = $row['website'];
                                                $postal_add = $row['postal_add'];
                                                $about = $row['about'];
                                                $logo = $row['logo'];
                                                ?>

                                                <li class="bizThumb" id='bizThumb<?php echo $counter; ?>'>
                                                    <a href='#bizDetail<?php echo $counter; ?>' class="bizzThumb">
                                                        <div class="thumbImg">
                                                            <img width="100%" src ="../images/uploads/<?php echo 'thumb_' . $logo; ?>"/>
                                                        </div>
                                                        <div class="thumbDesc">
                                                            <div class="thbplaceName">
                                                                <h4 class="thumbplaceName"><?php echo $business_name; ?></h4>
                                                            </div>
                                                            <div class="thmplaceAddeess">
                                                                <h5 class="rD"><?php echo $location; ?></h5>
                                                            </div>
                                                            <div class="thmplacePhone">
                                                                <h6 class="rD"><?php echo $mob_no ?></h6>
                                                            </div>
                                                            <div class="thmplaceEmail">
                                                                <h6 class="rD"><?php echo $email; ?></h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="bizDetail" id='bizDetail<?php echo $counter; ?>' style="display:none">

                                                    <div class="resplaceName">
                                                        <h2 class="DetplaceName"><?php echo $row['business_name']; ?></h2>
                                                    </div>
                                                    <div class="resplaceLocation">
                                                        <h6 class="Detlocation"><?php echo $row['location']; ?></h6>
                                                    </div>
                                                    <div class="resplaceRate">
                                                        <div class="rating" data-rating="4">
                                                            <span class="Detstars">
                                                                <i class="fa fa-star s1 active" data-score="1"></i>
                                                                <i class="fa fa-star s2 active" data-score="2"></i>
                                                                <i class="fa fa-star s3 active" data-score="3"></i>
                                                                <i class="fa fa-star s4 active" data-score="4"></i>
                                                                <i class="fa fa-star s5" data-score="5"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="days2go">
                                                         <a style="color:#fff" class="update" href="../browse/index.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['business_name']; ?>">Full Page for Detail</a>
                                                    </div>
                                                    <div class="thumbImg">
                                                        <img width="100%" src ="../images/uploads/<?php echo $row['logo']; ?>"/>
                                                    </div>
                                                    <label style="font-weight:bold">Description: </label>
                                                    <div class="resplaceDescription">
                                                        <h6 class="DetAbout"><span><?php echo $about; ?></span></h6>
                                                    </div>
                                                    <div class="resplacePhone">
                                                        <h6 class="DetTel">Tel No: <span><?php echo $tel_no; ?></span></h6>
                                                    </div>
                                                    <div class="resplacePhone">
                                                        <h6 class="DetMob">Alternative Contact: <span><?php echo $phone_no; ?></span></h6>
                                                    </div>
                                                    <div class="resplaceEmail">
                                                        <h6 class="DetEmail">Email Address: <span><?php echo $email; ?></span></h6>
                                                    </div>
                                                    <div class="resplaceWeb">
                                                        <h6 class="DetWeb">Website Address: <span><?php echo $website; ?></span></h6>
                                                    </div>
                                                    <div class="resplacePost">
                                                        <h6 class="DetPost">Postal Address: <span><?php echo $postal_add; ?></span></h6>
                                                    </div>
                                                </li>
                                                <?php
                                                $counter = $counter + 1;
                                            }
                                        }
                                    }
                                    ?></ul>
                            </div></div>
                        <?php
                        echo "<center>";

                        $prev = $start - $result_limit;
                        $next = $start + $result_limit;

                        $adjacents = 3;
                        $last = $max_pages - 1;

                        if ($max_pages > 1) {
                            //previous button
                            if (!($start <= 0)) {
                                echo " <a href='search.php?search=$search&submit=search+yuunga&start=$prev'><< Prev</a> ";
                            }
//pages 
                            if ($max_pages < 7 + ($adjacents * 2)) {   //not enough pages to bother breaking it up
                                $i = 0;
                                for ($counter = 1; $counter <= $max_pages; $counter++) {
                                    if ($i == $start) {
                                        echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'><b>$counter</b></a> ";
                                    } else {
                                        echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'>$counter</a> ";
                                    }
                                    $i = $i + $result_limit;
                                }
                            } elseif ($max_pages > 5 + ($adjacents * 2)) {    //enough pages to hide some
//close to beginning; only hide later pages
                                if (($start / $result_limit) < 1 + ($adjacents * 2)) {
                                    $i = 0;
                                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                                        if ($i == $start) {
                                            echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'><b>$counter</b></a> ";
                                        } else {
                                            echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'>$counter</a> ";
                                        }
                                        $i = $i + $result_limit;
                                    }
                                }
//in middle; hide some front and some back
                                elseif ($max_pages - ($adjacents * 2) > ($start / $result_limit) && ($start / $result_limit) > ($adjacents * 2)) {
                                    echo " <a href='index.php?search=$search&submit=search+yuunga&start=0'>1</a> ";
                                    echo " <a href='index.php?search=$search&submit=search+yuunga&start=$result_limit'>2</a> .... ";

                                    $i = $start;
                                    for ($counter = ($start / $result_limit) + 1; $counter < ($start / $result_limit) + $adjacents + 2; $counter++) {
                                        if ($i == $start) {
                                            echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'><b>$counter</b></a> ";
                                        } else {
                                            echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'>$counter</a> ";
                                        }
                                        $i = $i + $result_limit;
                                    }
                                } else {
                                    echo " <a href='index.php?search=$search&submit=search+yuunga&start=0'>1</a> ";
                                    echo " <a href='index.php?search=$search&submit=search+yuunga&start=$result_limit'>2</a> .... ";

                                    $i = $start;
                                    for ($counter = ($start / $result_limit) + 1; $counter <= $max_pages; $counter++) {
                                        if ($i == $start) {
                                            echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'><b>$counter</b></a> ";
                                        } else {
                                            echo " <a href='index.php?search=$search&submit=search+yuunga&start=$i'>$counter</a> ";
                                        }
                                        $i = $i + $result_limit;
                                    }
                                }
                            }

//Next button
                            if (!($start >= $results - $result_limit)) {
                                echo " <a href='index.php?search=$search&submit=search+yuunga=$next'>Next >></a> ";
                            }
                        }
                        echo "</center>";
                        ?>
                    </article>

                </section>
            </article>
            <article class="RightAds">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive  Yuunga One -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8755342140590314"
                         data-ad-slot="7871657387"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </br></br>

                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive  Yuunga One -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8755342140590314"
                         data-ad-slot="7871657387"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>   
            </article>

        </section>

        <?php
        include_once '../includes/footer.php';
        include_once '../includes/fancy.php';
        ?>
    </body>  
</html>
