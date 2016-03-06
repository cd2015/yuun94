<?php require_once 'includes/db_connection.php'; ?>
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
        <title>Yuunga | The Digital Directory </title>
        <link rel="icon" href="images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="events/styles/eventshome.css"/>

        <script type="text/javascript" src="scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="scripts/forms.js"></script>
        
        <script type="text/javascript" src="scripts/jquery-1.12.0.js"></script>
        <script type="text/javascript" src="scripts/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
        <script>window.jQuery || document.write("<script src='scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script type="text/javascript" src="scripts/categorySlider.js"></script>
        <script src="scripts/plugins.js"></script>
       <!-- <script src="scripts/main.js"></script> -->
        <script type="text/javascript" src="scripts/slotmachine.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".menu-trigger").click(function() {
                    $("#menu").fadeToggle(300);
                    $(this).toggleClass("active")
                });
        
                $('.info-request, .get-contact').fancybox();
            }); 
        </script>
        
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php
        include_once 'includes/headerHome.php';
        include_once 'includes/db_connect.php';
        include_once 'includes/functions.php';
        ?>
        <section class="pageHeading">
            <div class="container">
                <article>
                    <img width="100%" alt="The Digital Directory" src="images/digital.jpg">
                </article>
                <article>
                    <a href="http://www.cyberdynamics.co.ug/branding">
                        <img width="100%" alt="brand Ad" src="images/brand.gif">
                    </a>  
                </article>
                
               

                <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    

                    <div class="fb-like" data-href="https://www.facebook.com/dotComDirectory/?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" ></div>

                    <a href="https://twitter.com/Yuunga1" class="twitter-follow-button" data-show-count="" data-size="large" data-show-screen-name="false">Follow Yuunga</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    
                    

                    &nbsp; &nbsp;

                    
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="Yuunga1" data-size="large" data-related="CyberDynamics1" data-hashtags="TheDigitalDirectory">Tweet about Yuunga</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    

                 <!--   <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://yuunga.com" data-via="Yuunga1" data-size="large" data-related="CyberDynamics1" data-hashtags="TheDigitalDirectory">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> -->
                    
                    
                    <div class="fb-share-button" data-href="http://www.yuunga.com" data-layout="button"></div>

                    <a id="whatsappShare" href="whatsapp://send?text=yuunga.com" data-action="share/whatsapp/share"> <i class="fa fa-whatsapp"></i> Share via Whatsapp</a>
                    

            </div>
            <!-- / container -->
        </section>
        <section style="padding:0px" class="mainSection">
            <div style="width:100%;padding-bottom:0px" class="CentreSection">

                <div id="homeSlider">

                    <div id="slider">

                        <?php
                        require_once (dirname(__FILE__) . '/slider.php');
                        ?>

                    </div>

                </div>


            </div>

        </section>
        <section id="featuredEvents" >
            <?php
                require_once (dirname(__FILE__) . '/featuredEvents.php');
            ?>
        </section>
        <section id="homeAds">
           <!-- <img src="images/ads/home/yuunga is online.jpg" width="250px" height="170px"></img> -->
        </section>   

        <div style="width:100%" class="CategorySlider">

            <div id="Categories" align="center">

                <div id="featuredCategories" align="center">
                    <h4>FEATURED CATEGORIES </h4>
                </div>
                <div id="CatSlid">
                    <div id="categorySlider">

                        
                            <?php
                                    
                                    require_once (dirname(__FILE__) . '/slidCatAcc.php');
                                    require_once (dirname(__FILE__) . '/slidCatBus.php');
                                    require_once (dirname(__FILE__) . '/slidCatEdu.php');
                                    require_once (dirname(__FILE__) . '/slidCatEnt.php');
                                    require_once (dirname(__FILE__) . '/slidCatFoo.php');
                                    require_once (dirname(__FILE__) . '/slidCatHea.php');
                                    require_once (dirname(__FILE__) . '/slidCatSho.php');
                                    require_once (dirname(__FILE__) . '/slidCatSpo.php');
                                    require_once (dirname(__FILE__) . '/slidCatTou.php');
                                    require_once (dirname(__FILE__) . '/slidCatVeh.php');
                                    require_once (dirname(__FILE__) . '/slidCatWor.php');
                            ?>
                        
                     </div>

                    <div id="clickleft"><i class="fa fa-backward"></i></div>
                    <div id="clickright"><i class="fa fa-forward"></i></div>
                </div>
            </div>
        </div>
            <?php
            include_once 'includes/footer.php';
            include_once 'includes/fancy.php';
            ?>
    </body>
</html>
