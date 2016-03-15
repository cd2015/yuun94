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
        <title>Yuunga | Business </title>
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
                            <i class="fa fa-briefcase" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Business</h1>
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
                                <li class="active"><a href="#tab1">Advertisement & Branding</a></li>
                                <li><a href="#tab2">Beauty Saloons & Spas</a></li>
                                <li><a href="#tab3">Bridal Services & Cars</a></li>
                                <li><a href="#tab4">Photography & Video</a></li>
                                <li><a href="#tab5">ICT, Software & Computing</a></li>
                                <li><a href="#tab6">Phones & Accessories</a></li>
                                <li><a href="#tab7">Gardens & Recreational Centers</a></li>
                                <li><a href="#tab8">Boutiques & Tailoring</a></li>
                                <li><a href="#tab9">Furniture & Interior Designs</a></li>
                                <li><a href="#tab10">Courier</a></li>
                            </ul>

                            <div class="tab-content">

                                <!-- 
                                        ******** Advertisement & Branding ********
                                -->                                                                 
                                <div id="tab1" class="tab">
                                    <div>
                                        <h2>Advertisement & Branding</h2>
                                        <?php require_once 'Advertisement&Branding.php'; ?>
                                    </div>
                                </div>

                                <!--            Beauty Saloons/Spas             -->      

                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Beauty Saloons/Spas</h2>
                                        <?php require_once './BeautySaloons&Spas.php'; ?> 
                                    </div>
                                </div>     
                                <!--            Bridal Services and Cars Companies     -->                                                                                        
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Bridal Services and Cars</h2> 
                                        <?php require_once './BridalServices&Cars.php'; ?>
                                    </div>
                                </div>

                                <!--            Photography & Video                -->                                                                                                                                                                                
                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Photography & Video</h2>
                                        <?php require_once './Photography&Video.php'; ?> 
                                    </div>
                                </div>

                                <!--            ICT, Software & Video                -->                                                                                                                                                                                
                                <div id="tab5" class="tab">
                                    <div>
                                        <h2>ICT/Software/Computing</h2>
                                        <?php require_once './ICT&Software&Computing.php'; ?>    
                                    </div>
                                </div>

                                <!--            Phones & Accessories                -->                                                                                                                                                                                
                                <div id="tab6" class="tab">
                                    <div>
                                        <h2>Phones/Accessories</h2>
                                        <?php require_once './Phones&Accessories.php'; ?>     
                                    </div>
                                </div>

                                <!--            Gardens & Interior Designs                -->                                                                                                                                                                                
                                <div id="tab7" class="tab">
                                    <div>
                                        <h2>Gardens/Recreation Centers</h2>
                                        <?php require_once './Gardens&RecreationCenters.php'; ?>   
                                    </div>
                                </div>

                                <!--            Boutiques & Tailoring                -->                                                                                                                                                                                
                                <div id="tab8" class="tab">
                                    <div>
                                        <h2>Boutiques/Tailoring</h2>
                                        <?php require_once './Boutiques&Tailoring.php'; ?> 
                                    </div>
                                </div>

                                <!--            Furniture                -->                                                                                                                                                                                
                                <div id="tab9" class="tab">
                                    <div>
                                        <h2>Furniture/Interior Designers</h2>

                                        <?php require_once './Furniture&InteriorDesigns.php'; ?>  
                                    </div>
                                </div>

                                <!--            Couriers                -->                                                                                                                                                                                
                                <div id="tab10" class="tab">
                                    <div>
                                        <h2>Couriers</h2>
                                        <?php require_once './Couriers.php'; ?>  
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