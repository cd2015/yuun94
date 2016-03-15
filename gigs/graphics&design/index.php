<?php require_once '../../includes/db_connection.php'; ?>
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
        <title>Yuunga Gigs | Graphics & Design </title>
        <link rel="icon" href="../../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../../styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="../../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../../scripts/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <script>window.jQuery || document.write("<script src='../../scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../../scripts/plugins.js"></script>
        <script src="../../scripts/main.js"></script>

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
        require_once '../../includes/headerGig.php';
        ?>

        <section class="pageHeading">
            <div class="container">
                <article>
                    <div id="pageTitle">
                        <div id="pageTitleIcon">
                            <i class="fa fa-paint-brush" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Graphics & Design</h1>
                        </div>
                    </div>
                </article>
                <article>
                    <a href="http://www.cyberdynamics.co.ug/branding">
                        <img width="100%" alt="brand Ad" src="../../images/brand.gif">
                    </a>  
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
                                <li class="active"><a href="#tab1">Cartoons</a></li>
                                <li><a href="#tab2">Logo Design</a></li>
                                <li><a href="#tab3">Book Covers & Packaging</a></li>
                                <li><a href="#tab4">Photoshop Editing</a></li>
                                <li><a href="#tab5">Flyers & Posters</a></li>
                                <li><a href="#tab6">Business, Invitation Cards & Stationary</a></li>
                                <li><a href="#tab7">Banners & Social Media Designs</a></li>
                                <li><a href="#tab8">3D & 2D Models</a></li>
                                <li><a href="#tab9">Web & Mobile Graphics</a></li>
                                <li><a href="#tab10">Vector Tracing</a></li>
                                <li><a href="#tab11">T-Shirt Designs</a></li>
                                
                            </ul>

                            <div class="tab-content">

                                <!-- 
                                        ******** Cartoons ********
                                --> 

                                <div id="tab1" class="tab active">
                                    <div>
                                        <h2>Cartoons</h2>
                                    </div>                                   
                                    
                                        <?php
                                        require_once "Cartoons.php";
                                        ?>
                                                    
                                </div>

                                <!-- 
                                        ******** Logo Design ********
                                --> 

                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Logo Design</h2>
                                    </div>

                                        <?php
                                        require_once "logo_design.php";
                                        ?>
                                    
                                </div>

                                <!-- 
                                        ******** Book Covers & Packaging ********
                                -->            
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Book Covers & Packaging</h2>
                                    </div>
                                    
                                        <?php
                                        require_once "bookcovers&packaging.php";
                                        ?>
                                    
                                </div>


                                <!--
                                        **********  Photoshop Editing     **********
                                -->

                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Photoshop Editing </h2>
                                    </div>
                                    
                                        <?php
                                        require_once "photoshop_editing.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********      Flyers & Posters     **********
                                -->                                                                                        
                                <div id="tab5" class="tab">
                                    <div>
                                        <h2>Flyers & Posters</h2>
                                    </div>
 
                                        <?php
                                        require_once "flyers&posters.php";
                                        ?>

                                </div>



                                <!--
                                        **********  Business Cards & Stationary    **********
                                -->                                                                                                                                                                                
                                <div id="tab6" class="tab">
                                    <div>
                                        <h2>Business, Invitation Cards & Stationary</h2>
                                    </div>

                                        <?php
                                        require_once "businessCards&Stationary.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  Business Cards & Stationary    **********
                                -->                                                                                                                                                                                
                                <div id="tab7" class="tab">
                                    <div>
                                        <h2>Banners & Social Media Designs</h2>
                                    </div>

                                        <?php
                                        require_once "banners&socialmediadesigns.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  3D & 2D  Models   **********
                                -->                                                                                                                                                                                
                                <div id="tab8" class="tab">
                                    <div>
                                        <h2>3D & 2D  Models</h2>
                                    </div>

                                        <?php
                                        require_once "3D&2Dmodels.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  Web & Mobile Graphics    **********
                                -->                                                                                                                                                                                
                                <div id="tab9" class="tab">
                                    <div>
                                        <h2>Web & Mobile Graphics</h2>
                                    </div>

                                        <?php
                                        require_once "web&mobile_graphics.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  Vector Tracing    **********
                                -->                                                                                                                                                                                
                                <div id="tab10" class="tab">
                                    <div>
                                        <h2>Vector Tracing</h2>
                                    </div>

                                        <?php
                                        require_once "vector_tracing.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  T Shirt Designs    **********
                                -->                                                                                                                                                                                
                                <div id="tab11" class="tab">
                                    <div>
                                        <h2>T Shirt Designs</h2>
                                    </div>

                                        <?php
                                        require_once "tshirt_designs.php";
                                        ?>
                                    
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
        include_once '../../includes/footer.php';
        include_once '../../includes/fancy.php';
        ?>
    </body>  
</html>