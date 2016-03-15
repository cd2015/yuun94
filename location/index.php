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
        <title>Yuunga | NearBy </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="../scripts/forms.js"></script>
        <script type="text/javascript" src="../scripts/categorySlider.js"></script>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
        <script>window.jQuery || document.write("<script src='../scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>
        <script type="text/javascript" src="../scripts/business.js"></script>
        <script type="text/javascript" src="../dashboard/js/categories.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3qQHOQs5kwLp4ieJoH4IxqASVwzBJQSk"
            type="text/javascript">
        </script>

        
        <?php

            require_once('../includes/header.php');
        ?>

    </head>
    <body>
        
        <section class="pageHeading">
            <div class="container">
                <article>
                    <div id="pageTitle">
                        <div id="pageTitleIcon">
                            <i class="fa fa-map-marker" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Search NearBy</h1>
                        </div>
                    </div>
                </article>
                <article>
                    
                </article>
            </div>
            <!-- / container -->
        </section>


	   <section class="mainSection">
            
            <article class="LocationResults">
                Search Results
               <div class="searchLoc"> <select id="locationSelect"></select></div>
            </article>
            <article class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
		              
                        <?php 
                            require_once (dirname(__FILE__).'/index1.html');
                        ?> 
                	</article>

                </section>
            </article>
            <article class="RightAds">
                Right Ads   
            </article>
                
                
        </section>
            
        <?php
            include_once '../includes/footer.php';
            include_once '../includes/fancy.php';
        ?>
    </body>
               
</html>
