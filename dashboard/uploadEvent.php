<?php
require_once("../includes/functions.php");
sec_session_start();
?>
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
        <title>Yuunga | Upload Logo </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="../scripts/forms.js"></script>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/upload.js"></script>
        <link href="style/style.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
        <script>window.jQuery || document.write("<script src='../scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
            <?php
                if (login_check($mysqli) == true) :
            ?>

        <section class="pageHeading">
            <div class="container">
                <article>
                    <div id="pageTitle">
                        <div id="title">
                            <h1 id="Tit">Upload Event Poster</h1>
                        </div>
                    </div>
                </article>
                    
                <article>
                    <a style="float: right;padding-right: 200px;" href="../dashboard">
                        <i class="fa fa-hand-o-left" id="locIcon"></i>
                        <p style="color: #662046; font-weight:bold; font-size:20px">BACK</p>
                    </a>
                </article>
            </div>
            <!-- / container -->
        </section>


	   <section class="mainSection">
            
            <article class="LeftAds">
                Left Ads
            </article>
            <article class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
		                <div id="upload-wrapper">
                            <div align="center">
                                <h4>Upload Event Poster (Step 2):</h4>&nbsp;
                                <span class="">Use only Jpeg, Jpg, Png or Gif images. | Maximum allowed size 1 MB</span>
                                <form style="width:30%" action="processuploadevent.php" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
                                    <input name="user_id" type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
                                    <input name="image_file" id="imageInput" type="file" />
                                    <input type="submit"  id="submit-btn" value="Upload" />
                                    <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>

                                </form>
                                <div id="progressbox" style="display:none;"><div id="progressbar"></div><div id="statustxt">0%</div></div>
                                <div id="output"></div>
                            </div><br/><br/><br/><br/><br/><br/>
                        </div>
                     </article>

                </section>
            </article>
            <article class="RightAds">
                Right Ads   
            </article>
                
        </section>
        <?php
            require_once '../includes/footer.php';
            //else: header('Location:../login/');
            else:
        ?>
        <script type="text/javascript">
            alert("Login to upload photo !");
            window.location.href = '../login/';
        </script>
        <?php
        endif;
        ?>
    </body>
</html>
