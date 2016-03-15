<?php require_once '../includes/db_connection.php'; 

            require_once("../includes/functions.php");
            sec_session_start();

            $ID = $_GET['id'];

            //Query that requests for the gig from ther table
            $sql = "SELECT * from add_business WHERE id='$ID'";
            $query = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($query);

            while ($result = mysqli_fetch_assoc($query)) {

            $currentUrll = 'www.yuunga.com/browse/index.php?id='.$ID.'?business_name='.$result['business_name'];
           

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
        <title>Yuunga Browse | <?php echo $result['business_name']; ?> </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <script>window.jQuery || document.write("<script src='../scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3qQHOQs5kwLp4ieJoH4IxqASVwzBJQSk"
            type="text/javascript">
        </script>

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
                            <h1 id="Tit"><?php echo $result['category']; ?></h1>
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
            <article class="LeftAds" style="width:340px">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Yuunga  Large Rectangle -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:336px;height:280px"
                         data-ad-client="ca-pub-8755342140590314"
                         data-ad-slot="9429115780"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                    <br>

                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Yuunga Large Scrapper -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:300px;height:600px"
                             data-ad-client="ca-pub-8755342140590314"
                             data-ad-slot="7034052589"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>



            </article>

            <article style="background-color: rgba(102, 87, 95, 0.3);padding: 20px;" class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
                        
                        <?php
            
                ?>       
                

            <li class="bizDetail" style="">
                
                <div class="resplaceName">
                        <h2 class="DetplaceName"><?php echo $result ['business_name']; ?></h2>
                    </div>
                    
                    <div class="resplaceLocation">
                        <h6 class="Detlocation"><?php echo $result ['location']; ?></h6>
                    </div>
                        <?php 
                            require_once (dirname(__FILE__).'/verification.php');  
                        ?>
                    <div class="resplaceRate">
                        <?php 
                            require_once (dirname(__FILE__).'/rating.php');  
                        ?>
                    </div>
                    
                    
                    <div class="thumbImg">
                        <?php 
                            require_once (dirname(__FILE__).'/gallery.html');  
                        ?>
                    <!--    <img width="100%" src ="../images/uploads/<?php// echo $result['logo']; ?>"/> -->
                    </div></br>

                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    
                    <div class="fb-like" style="width: 100%;" data-href='<?php echo $result ['facebook']; ?>' data-layout="standard" data-action="like" data-show-faces="true" ></div>

                    <a href='https://twitter.com/<?php echo $result ['twitter']; ?>' class="twitter-follow-button" data-show-count="" data-size="large" data-show-screen-name="false">Follow <?php echo $result ['twitter']; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                    &nbsp; &nbsp;

                    
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="Yuunga1" data-size="large" data-related="CyberDynamics1" data-hashtags="TheDigitalDirectory">Tweet about Yuunga</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                    <div class="fb-share-button" style="margin-right:100%;margin-bottom:2px" data-href="" data-layout="button"></div>

                    <a id="whatsappShare" href='whatsapp://send?text=<?php echo $currentUrll; ?>' data-action="share/whatsapp/share"> <i class="fa fa-whatsapp"></i> Share via Whatsapp</a></br>
                    

                    <label style="font-weight:bold">Description: </label>
                    <div class="resplaceDescription">
                        <h6 class="DetAbout"><span><?php echo $result ['about']; ?></span></h6>
                    </div>
                    <div class="resplaceCategory">
                        <h5 class="DetCategory">Category: <span><?php echo $result ['category']; ?></span></h5>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetTel">Tel No: <span><?php echo $result ['tel_no']; ?></span></h6>
                    </div>
                    <div class="resplacePhone">
                        <h6 class="DetMob">Alternative Contact: <span><?php echo $result ['mob_no']; ?></span></h6>
                    </div>
                    <div class="resplaceEmail">
                        <h6 class="DetEmail">Email Address: <span><?php echo $result ['email']; ?></span></h6>
                    </div>
                    <div class="resplaceWeb">
                        <h6 class="DetWeb">Website Address: <span><a href='http://<?php echo $result ['website']; ?>'><?php echo $result ['website']; ?></a></span></h6>
                    </div>
                    <div class="resplacePost">
                        <h6 class="DetPost">Postal Address: <span><?php echo $result ['postal_add']; ?></span></h6>
                    </div>
                    
                    
                    <div style="width:100%" class="resplaceWeb">
                        <h6 class="DetWeb"><span><a style="background-color:#47639E;color:#fff;border-radius:5px;padding:5px" href='<?php echo $result ['facebook']; ?>'><i class="fa fa-facebook"></i>  Facebook Page</a></span></h6>
                    </div>


                    <?php
                        require_once (dirname(__FILE__).'/reviews.php');
                    ?>

                     <br>


                    <input id="businessID" type="hidden" name="businessID" value="<?php echo $ID; ?>"/>
                    <?php
                        require_once (dirname(__FILE__).'/drawMap.html');
                    ?>

            </li>
            <?php    
            }
            ?>

                    </article>

                    <br><br><br><br> 

                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Yuunga Letterboard 728X90 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:728px;height:90px"
                         data-ad-client="ca-pub-8755342140590314"
                         data-ad-slot="5696920187"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
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