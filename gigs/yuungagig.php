<?php require_once '../includes/db_connection.php'; 
            $ID = $_GET['id'];

            //Query that requests for the gig from ther table
            $sql = "SELECT * from gigs WHERE id='$ID'";
            $query = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($query);

            while ($result = mysqli_fetch_assoc($query)) {

            $currentUrll = 'www.yuunga.com/gigs/yuungagig.php?id='.$ID.'?gig='.$result['gig'];
           

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
        <title>Yuunga Gigs | <?php echo $result['gig']; ?> </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <script>window.jQuery || document.write("<script src='../scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {

                jQuery('.tabs .tab-links a').on('click', function (e) {
                    var currentAttrValue = jQuery(this).attr('href');

                    // Show/Hide Tabs
                    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                    // Change/remove current tab to active
                    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                    e.preventDefault();
                });
            });
        </script>
    </head>

    <body style="margin:0px; padding:0px;" width="100%" onload="load()">

        <?php
        require_once '../includes/header.php';
        ?>

        <section class="pageHeading">
            <div class="container">
                <article>
                    <div id="pageTitle">
                        <div id="pageTitleIcon">
                            <i class="fa fa-paint-brush" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit"><?php echo $result['sub_category']; ?></h1>
                        </div>
                    </div>
                </article>
                <article>
                    <a href="http://www.cyberdynamics.co.ug/branding">
                        <img width="100%" alt="brand Ad" src="../images/brand.gif">
                    </a>  
                </article>
            </div>
            <!-- / container -->
        </section>

        <section class="mainSection">
            <article class="LeftAds">
                &nbsp;
            </article>

            <article style="background-color: rgba(102, 87, 95, 0.3);padding: 20px;" class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
                        
                        <?php
            
                ?>       
                

            <li class="bizDetail" style="">
                
                <div class="resplaceName">
                    <h2 class="DetplaceName"><?php echo $result['gig']; ?></h2>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    
                    <div class="fb-share-button" data-href="" data-layout="button"></div>
                </div>
                <div class="resplaceLocation">
                    <h6 class="Detlocation"><?php echo $result['price']; ?></h6>
                </div>

                <div class="resplaceLocation">
                    <h6 class="Detlocation"><?php echo $result['duration']; ?></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Tel No:<i class="fa fa-phone"></i><a href="tel:<?php echo $result['tel_no']; ?>"> <?php echo " ".$result['tel_no']; ?></a></h6>
                </div>

                <div class="resplacePhone">
                    <h6 class="DetTel">Whatsapp :<i class="fa fa-whatsapp"></i><a href="tel:<?php echo $result['whatsapp']; ?>"> <?php echo " ".$result['whatsapp']; ?></a></h6>
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
                <div class="thumbImg">
                    <img width="50%" src ="../images/gigs/<?php echo $result['logo'];?>"/>
                </div>
                <label style="font-weight:bold">Description</label>
                <div class="resplaceDescription">
                    <h6 class="DetAbout"><?php echo $result['detail']; ?></h6>
                </div>

                <div class="resplaceCategory">
                    <h5 class="DetCategory">Category: <?php echo $result['category']; ?></h5>
                </div>

                <div class="resplaceCategory">
                    <h5 class="DetCategory"> Sub Category: <?php echo $result['sub_category']; ?></h5>
                </div>
                
                <div class="resplacePhone">
                    <h6 class="DetMob"><i class="fa fa-skype"></i><a href="tel:<?php echo $result['skype']; ?>"> <?php echo $result['skype']; ?></a></h6>
                </div>
                <div class="resplaceEmail">
                    <h6 class="DetEmail">Email Address:<a href="<?php echo $result['email']; ?>"> <?php echo $result['email']; ?></a></h6>
                </div>
                <div class="resplaceWeb">
                    <h6 class="DetWeb">Website Address:<a href="<?php echo $result['website']; ?>"> <?php echo $result['website']; ?></a></h6>
                </div>
                <div class="resplacePost">
                    <h6 class="DetPost">Location: <?php echo $result['location']; ?></h6>
                </div>
                <div class="resplacePost">
                    <h6 class="DetPost">Region: <?php echo $result['region']; ?></h6>
                </div>
                
                
            </li>
            <?php    
            }
            ?>

                    </article>

                </section>
            </article>
            <article class="RightAds">
                &nbsp;   
            </article>

        </section>

        <?php
        include_once '../includes/footer.php';
        include_once '../includes/fancy.php';
        ?>
    </body>  
</html>