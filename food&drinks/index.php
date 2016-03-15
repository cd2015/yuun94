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
        <title>Yuunga | Foods & Drinks </title>
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
                            <i class="fa fa-cutlery" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Food & Drinks</h1>
                        </div>
                    </div>
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
            <!-- / container -->
        </section>

        <section class="mainSection">
            <article style="width:25%" class="LeftAds">

                <a href="https://aromahoneytoffee.wordpress.com/">
                    <img src="../images/ads/arometoffee.gif" style="width:100%;"></img>
                </a>

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
                            <ul class="tab-links">
                                <li class="active"><a href="#tab1">Coffee Cafes</a></li>
                                <li><a href="#tab2">Restaurants</a></li>
                                <li><a href="#tab3">Delicatessens</a></li>
                                <li><a href="#tab4">Pastry & Confectionaries</a></li>
                            </ul>

                            <div class="tab-content">

                                <!-- 
                                        ******** Coffee Cafes ********
                                --> 
                                <div id="tab1" class="tab active">
                                    <div>
                                        <h2>Coffee Cafes</h2>
                                        <?php require_once './CoffeeCafes.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Restaurants ********
                                --> 
                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Restaurants</h2>
                                        <?php require_once './Restaurants.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Delicatessens ********
                                --> 
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Delicatessens</h2>
                                        <?php require_once './Delicatessens.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Pastry&Confectionary ********
                                --> 
                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Pastry & Confectionaries</h2>
                                        <?php require_once './Pastry&Confectionaries.php'; ?>
                                    </div>                                                                                   
                                </div>

                            </div>                                       
                        </div>
                    </article>

                </section>
            </article>
            <article style="width:15%" class="RightAds">
                &nbsp;   
            </article>

        </section>

        <?php
        include_once '../includes/footer.php';
        include_once '../includes/fancy.php';
        ?>
    </body>  
</html>