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
        <title>Yuunga Gigs | Writing & Typing </title>
        <link rel="icon" href="../../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../../styles/tabs_styles.css" />
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
                            <i class="fa fa-pencil-square-o" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Writing & Typing</h1>
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
                                <li class="active"><a href="#tab1">Copy Writing</a></li>
                                <li><a href="#tab2">Creative Writing</a></li>
                                <li><a href="#tab3">Translation</a></li>
                                <li><a href="#tab4">Resumes & Cover Letters</a></li>
                                <li><a href="#tab5">Proofreading & Editing</a></li>
                                <li><a href="#tab6">Proposals & Technical papers</a></li>
                                <li><a href="#tab7">Press Releases</a></li>
                                <li><a href="#tab8">Articles & Blogs</a></li>
                                <li><a href="#tab9">Research & Summaries</a></li>
                                <li><a href="#tab10">Legal Writing</a></li>
                                
                            </ul>

                            <div class="tab-content">

                                <!-- 
                                        ******** Copy Writing ********
                                --> 

                                <div id="tab1" class="tab active">
                                    <div>
                                        <h2>Copy Writing</h2>
                                    </div>                                   
                                    
                                        <?php
                                        require_once "copywriting.php";
                                        ?>
                                                    
                                </div>

                                <!-- 
                                        ******** Creative Writing ********
                                --> 

                                <div id="tab2" class="tab">
                                    <div>
                                        <h2>Creative Writing</h2>
                                    </div>

                                        <?php
                                        require_once "creative_writing.php";
                                        ?>
                                    
                                </div>

                                <!-- 
                                        ******** Translation ********
                                -->            
                                <div id="tab3" class="tab">
                                    <div>
                                        <h2>Translation</h2>
                                    </div>
                                    
                                        <?php
                                        require_once "translation.php";
                                        ?>
                                    
                                </div>


                                <!--
                                        **********  Resumes & Cover Letters     **********
                                -->

                                <div id="tab4" class="tab">
                                    <div>
                                        <h2>Resumes & Cover Letters</h2>
                                    </div>
                                    
                                        <?php
                                        require_once "resumes&coverletters.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********      Proofreading & Editing     **********
                                -->                                                                                        
                                <div id="tab5" class="tab">
                                    <div>
                                        <h2>Proofreading & Editing</h2>
                                    </div>
 
                                        <?php
                                        require_once "proofreading&editing.php";
                                        ?>

                                </div>



                                <!--
                                        **********  Proposals & Technical papers    **********
                                -->                                                                                                                                                                                
                                <div id="tab6" class="tab">
                                    <div>
                                        <h2>Proposals & Technical papers</h2>
                                    </div>

                                        <?php
                                        require_once "proposals&technicalpapers.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  Press Releases    **********
                                -->                                                                                                                                                                                
                                <div id="tab7" class="tab">
                                    <div>
                                        <h2>Press Releases</h2>
                                    </div>

                                        <?php
                                        require_once "press_releases.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  Articles & Blogs   **********
                                -->                                                                                                                                                                                
                                <div id="tab8" class="tab">
                                    <div>
                                        <h2>Articles & Blogs</h2>
                                    </div>

                                        <?php
                                        require_once "articles&blogs.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  Research & Summaries    **********
                                -->                                                                                                                                                                                
                                <div id="tab9" class="tab">
                                    <div>
                                        <h2>Research & Summaries</h2>
                                    </div>

                                        <?php
                                        require_once "research&summaries.php";
                                        ?>
                                    
                                </div>

                                <!--
                                        **********  Legal Writing    **********
                                -->                                                                                                                                                                                
                                <div id="tab10" class="tab">
                                    <div>
                                        <h2>Legal Writing</h2>
                                    </div>

                                        <?php
                                        require_once "legal_writing.php";
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