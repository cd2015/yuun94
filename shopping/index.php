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
        <title>Yuunga | Shopping </title>
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
                            <i class="fa fa-shopping-cart" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Shopping</h1>
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
                                <li class="active"><a href="#tab1">Supermarkets & Malls</a></li>
                                <li><a href="#tab2">Wine Merchants</a></li>
                                <li><a href="#tab3">Computers & Electronics</a></li>
                                <li><a href="#tab4">Butcheries & Abattoirs</a></li>
                                <li><a href="#tab5">African Crafts & Art Gallery</a></li>
                                <li><a href="#tab6">Flowers & Gifts</a></li>
                                <li><a href="#tab7">Stationeries</a></li
                                <li><a href="#tab8">Shops</a></li>
                            </ul>

                            <div class="tab-content">

                                <!-- 
                                        ******** Supermarkets & Malls ********
                                --> 
                                <div id="tab1" class="tab active">
                                    <div>
                                        <h2>Supermarkets & Malls</h2>
                                        <?php require_once './Supermarkets&Malls.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Wine Merchants ********
                                --> 
                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Wine Merchants</h2>
                                        <?php require_once './Wine Merchants.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Computers & Electronics ********
                                --> 
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Computers & Electronics</h2>
                                        <?php require_once './Computers&Electronics.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Butcheries & Abattoirs ********
                                --> 
                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Butcheries & Abattoirs</h2>
                                        <?php require_once './Butcheries&Abattoirs.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** African Crafts & Art Galleries ********
                                --> 
                                <div id="tab5" class="tab">
                                    <div>
                                        <h2>African Crafts & Art Galleries</h2>
                                        <?php require_once './AfricanCrafts&ArtGalleries.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Flowers & Gifts ********
                                --> 
                                <div id="tab6" class="tab">
                                    <div>
                                        <h2>Flowers & Gifts</h2>
                                        <?php require_once './Flowers&Gifts.php'; ?>
                                    </div>                                                                                   
                                </div>                        

                                <!-- 
                                        ******** Stationery  ********
                                --> 
                                <div id="tab7" class="tab">
                                    <div>
                                        <h2>Stationeries</h2>
                                        <?php require_once './Stationeries.php'; ?>
                                    </div>                                                                                   
                                </div>

                                <!-- 
                                        ******** Shops ********
                                --> 
                                <div id="tab8" class="tab">
                                    <div>
                                        <h2>Shops</h2>
                                        <?php require_once './Shops.php'; ?>
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