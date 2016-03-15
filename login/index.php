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
        <title>Yuunga | Login </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="../scripts/forms.js"></script>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
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
include_once '../includes/header.php';
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';

    //sec_session_start();
 
    if (login_check($mysqli) == true) 
        {
            $logged = 'in';
    } else {
            $logged = 'out';
    }
?>


        <section class="pageHeading">
            <div class="container">
                <article>
                    <div id="pageTitle">
                        <div id="pageTitleIcon">
                            <i class="fa fa-sign-in" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">LOG IN</h1>
                        </div>
                    </div>
                </article>
                <article>
                    <a href="http://www.cyberdynamics.co.ug/branding">
                        <img width="100%" alt="brand Ad" src="../images/brand.gif">
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
                    <section style="text-align:center" class="bi-mainSec">
                        
                             <article class="biSec1">
                                <?php
                                if (!empty($verifyMsg)){
                                ?>
                                    <p class="verifyMsg">
                                    <?php echo $success_msg;?>
                                    </p>
                                <?php
                                }                   
                                else{
            
                                }
        
                                if (isset($_GET['error'])) {
                                    echo'<div id="errorMessage"><div id="erIcon"><i class="fa fa-exclamation-triangle" id="loginError"></i></div>';
                                    echo '<div id="erMsg"><p class="error">Incorrect Email or Password!</p></div></div>';
                                }
                                ?> 
                                <form id="smallForms" class="yungaForms" action="../includes/process_login.php" method="post" name="login_form"> 
                                    <table width="100%" border="0">
                                        <tr>
                                            <td>
                                                <fieldset class="mail"><input placeholder="Email address..." type="text" id="email" name="email"></fieldset>
                                                
                                            </td>
                                        </tr>    
                                        <tr>
                                            <td>
                                                
                                                    <fieldset class="password"><input placeholder="Password" type="password" name="password"></fieldset>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <input type="button" value="Login" id="login" onclick="formhash(this.form, this.form.password);" />
                                                    
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </article>
                            <article class="biSec2">
                                <?php   
                                if (login_check($mysqli) == true) {
                                    ?>
                                    <script type="text/javascript">
                                        window.location.href = '../dashboard/';
                                    </script>
                                    <?php
                                } else {
                                //echo '<p>Currently logged ' . $logged . '.</p>';
                                echo '<div id="notRegistered"><i class="fa fa-user-plus" id="registerHere"></i>';
                                echo "<p>Not yet registered? Please REGISTER HERE <a href='../register/'>for a Place, Company or Business</a>

                                
                                 <br> <br> <a href='../register/for_a_gig.php'>for a GIG</a></p>
                                
                                ";
                                echo '</div>';
                                
                                }
                            ?>
                            </article>
                            <p>------------------- OR ---------------------</p>
                            <a id='fbregister' style='color:#fff' href='../includes/fbconfig.php'>Login with Facebook</a> 
                            <p>only for GIGs</p>

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
