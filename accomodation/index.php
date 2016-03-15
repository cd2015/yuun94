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
        <title>Yuunga | Accommodation </title>
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
                            <i class="fa fa-home" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Accommodation</h1>
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
            <article class="LeftAds" style="width:300px">

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

            <article class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
                        <div class="tabs">
                            <ul class="tab-links">
                                <li class="active"><a href="#tab1">Apartments</a></li>
                                <li><a href="#tab2">Camping & Back Packers</a></li>
                                <li><a href="#tab3">Guest Houses & Lodges</a></li>
                                <li><a href="#tab4">Hotels & Suites</a></li>
                                <li><a href="#tab5">Cottages & Country Clubs</a></li>
                                <li><a href="#tab6">Real Estates & Rentals</a></li>

                            </ul>

                            <div class="tab-content">
                                <div id="tab1" class="tab active">
                                    <div>
                                        <h2>Apartments</h2>
                                    </div>                                   
                                    
                                        <?php
                                        require_once "Apartments.php";
                                        ?>
                                                    
                                </div>

                                <!-- 
                                        ******** Camping and Back Parkers ********
                                --> 

                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Camping & Back Packers</h2>
                                    </div>

                                        <?php
                                        require_once "Camping&Backpackers.php";
                                        ?>
                                    
                                </div>

                                <!-- 
                                        ******** Guest Houses and Lodges ********
                                -->            
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Guest Houses & Lodges</h2>
                                    </div>
                                    
                                        <?php
                                        require_once "GuestHouses&Lodges.php";
                                        ?>
                                    
                                </div>


                                <!--
                                        **********  Hotels & Suites     **********
                                -->

                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Hotels & Suites </h2>
                                    </div>
                                    
                                        <?php
                                        require_once "Hotels&Suites.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********      Cottages and  Country clubs     **********
                                -->                                                                                        
                                <div id="tab5" class="tab">
                                    <div>
                                        <h2>Cottages/Country Clubs</h2>
                                    </div>
 
                                        <?php
                                        require_once "Cottages&CountryClubs.php";
                                        ?>

                                </div>



                                <!--
                                        **********  Real Estates & Rentals    **********
                                -->                                                                                                                                                                                
                                <div id="tab6" class="tab">
                                    <div>
                                        <h2>Real Estates and Rentals</h2>
                                    </div>

                                        <?php
                                        require_once "RealEstates&Rentals.php";
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
        include_once '../includes/footer.php';
        include_once '../includes/fancy.php';
        ?>
    </body>  
</html>