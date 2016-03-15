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
        <title>Yuunga | Professional Services </title>
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
                            <i class="fa fa-home" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Professional Services</h1>
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
                                <li class="active"><a href="#tab1">Accountants</a></li>
                                <li><a href="#tab2">Advocates</a></li>
                                <li><a href="#tab3">Auditors</a></li>
                                <li><a href="#tab4">Data Analysts/Entrants</a></li>
                                <li><a href="#tab5">Engineers</a></li>
                                <li><a href="#tab6">Lawyers</a></li>
                                <li><a href="#tab7">Marketeers/Sales Persons</a></li>
                                <li><a href="#tab8">Surveyors</a></li>

                            </ul>

                            <div class="tab-content">
                                <div id="tab1" class="tab active">
                                    <div>
                                        <h2>Accountants</h2>
                                    </div>                                   

                                    <?php
                                    require_once "Accountants.php";
                                    ?>

                                </div>

                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Advocates</h2>
                                    </div>

                                    <?php
                                    require_once "Advocates.php";
                                    ?>

                                </div>
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Auditors</h2>
                                    </div>

                                    <?php
                                    require_once "Auditors.php";
                                    ?>

                                </div>

                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Data Analysts & Entrants</h2>
                                    </div>

                                    <?php
                                    require_once "DataAnalysts&DataEntrants.php";
                                    ?>

                                </div>

                                <div id="tab5" class="tab">
                                    <div>
                                        <h2>Engineers</h2>
                                    </div>

                                    <?php
                                    require_once "Engineers.php";
                                    ?>

                                </div>

                                <div id="tab6" class="tab">
                                    <div>
                                        <h2>Lawyers</h2>
                                    </div>

                                    <?php
                                    require_once "Lawyers.php";
                                    ?>

                                </div>

                                <div id="tab7" class="tab">
                                    <div>
                                        <h2>Marketeers & Sales Persons</h2>
                                    </div>

                                    <?php
                                    require_once "Marketeers&SalesPersons.php";
                                    ?>                                  
                                </div>

                                <div id="tab8" class="tab">
                                    <div>
                                        <h2>Surveyors</h2>
                                    </div>

                                    <?php
                                    require_once "Surveyors.php";
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