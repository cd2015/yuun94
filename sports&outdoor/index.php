<?php require_once '../includes/db_connection.php'; ?>
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
        <title>Yuunga | Sports & Outdoor </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
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
                            <i class="fa fa-futbol-o" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Sports & Outdoor</h1>
                        </div>
                    </div>
                </article>
            </div>
            <!-- / container -->
        </section>

        <section class="mainSection">
            <article class="LeftAds">
                &nbsp;
            </article>

            <article class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
                        <div class="tabs">
                            <ul class="tab-links">
                                <li class="active"><a href="#tab1">Gyms & Health Clubs</a></li>
                                <li><a href="#tab2">Climbing, Cycling & Biking</a></li>
                                <li><a href="#tab3">Swimming, Boats & Water Sports</a></li>
                                <li><a href="#tab4">Soccer, Rugby & Athletics</a></li>
                                <li><a href="#tab5">Hockey, Golf & Cricket</a></li>
                                <li><a href="#tab6">Volleyball & Basketball</a></li>
                                <li><a href="#tab7">Boxing, Kick Boxing & Martial Arts</a></li>
                                <li><a href="#tab8">Tennis, Badminton & Squash</a></li>

                            </ul>

                            <div class="tab-content">

                                <!-- 
                                        ******** Gyms & Health Clubs ********
                                --> 
                                <div id="tab1" class="tab active">
                                    <div>
                                        <h2>Gyms & Health Clubs</h2>
                                        <?php require_once './Gyms&HealthClubs.php'; ?>
                                    <div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Climbing, Cycling & Biking ********
                                --> 
                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Climbing, Cycling & Biking</h2>
                                        <?php require_once './ClimbingCycling&Biking.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Swimming, Boats & Water Sports ********
                                --> 
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Swimming, Boats & Water Sports</h2>
                                        <?php require_once './SwimmingBoats&WaterSports.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Soccer, Rugby & Athletics ********
                                --> 
                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Soccer, Rugby & Athletics</h2>
                                        <?php require_once './SoccerRugby&Athletics.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Hockey, Golf & Cricket ********
                                --> 
                                <div id="tab5" class="tab">
                                    <div>
                                        <h2>Hockey, Golf & Cricket</h2>
                                        <?php require_once './HockeyGolf&Cricket.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Volleyball & Basketball ********
                                --> 
                                <div id="tab6" class="tab">
                                    <div>
                                        <h2>Volleyball & Basketball</h2>
                                        <?php require_once './Volleyball&Basketball.php'; ?>
                                    </div>                                                                                   
                                </div> 

                                <!-- 
                                        ******** Boxing, Kick Boxing & Martial Arts ********
                                --> 
                                <div id="tab7" class="tab">
                                    <div>
                                        <h2>Boxing, Kick Boxing & Martial Arts</h2>
                                        <?php require_once './BoxingKickBoxing&Martial Arts.php'; ?>
                                    </div>                                                                                   
                                </div> 

                                <!-- 
                                        ******** Tennis, Badminton & Squash ********
                                --> 
                                <div id="tab8" class="tab">
                                    <div>
                                        <h2>Tennis, Badminton & Squash</h2>
                                        <?php require_once './TennisBadminton&Squash.php'; ?>
                                    </div>                                                                                   
                                </div>                         

                            </div>                                       
                        </div>
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