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
        <title>Yuunga | Register </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="../scripts/forms.js"></script>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="../scripts/register.js"></script>
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
                    require_once '../includes/register.inc.php';
                    require_once '../includes/functions.php';
                    require_once '../includes/header.php';
            ?>

        <section class="pageHeading">
            <div class="container">
                <article>
                    <div id="pageTitle">
                        <div id="pageTitleIcon">
                            <i class="fa fa-user-plus" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">REGISTER</h1>
                        </div>
                    </div>
                </article>
                <article>
                    
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
		
                        <?php
                        if (!empty($error_msg)) {
                            echo $error_msg;
                        }
		                if (!empty($success_msg)){
			             ?>
			                 <p class="successReg">
				            <?php echo $success_msg;?>
			                 </p>
			             <?php
		                  }
                        ?>

                        <form id="largeForms" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" class="yungaForms" name="registration_form">
                			                              
                                    <h4>Personal Information</h4>
                                <input type='hidden' name='usertype' value='BUSINESS'/>
                    			<div>
                                    <fieldset class="subject">
                        				<select name='sal' id='sal' style="width:312px"/>
                            				<option value="">Select Salutation</option>
                            				<option value="Mr">Mr.</option>
                            				<option value="Mrs">Mrs.</option>
                            				<option value="Ms">Ms.</option>
                                        </select>
                                    </fieldset>
                                </div>
                    			<div>
                                    <fieldset class="name"><input id='fname' placeholder='First Name...' type="text" name='fname'></fieldset>
                                </div>
                    			<div>
                                    <fieldset class="name"><input type='text' name='lname' placeholder='Last Name...' id='lname'/></fieldset>
                                </div>
                    			<div>
                                    <fieldset class="phone"><input type="text" name='phone_no' placeholder='Phone Number...' id='phone_no'/></fieldset>
                                </div>
                    			<div>
                                    <fieldset class="gender">
                                        <select name='gender' id='gender'/>
                        				    <option value="">Select Gender</option>
                        				    <option value="Male">Male</option>
                        				    <option value="Female">Female</option>
                                        </select>
                                    </fieldset>
                                </div>
                			
                    			
                                    <h4>Login Credentials</h4>
                                
                                <div>
                                    <fieldset class="name"><input type='text' name='username' placeholder='userName' id='username'/></fieldset>
                                </div>
                                <div>
                                    <fieldset class="mail"><input type="text" name="email" placeholder='youremail@domain.com' id="email"/></fieldset>
                                </div>
                                <div>
                                    <fieldset class="password"><input type="password" name="password" placeholder='Password' id="password" class="password"/></fieldset>
                                </div>
                                <div>
                                    <fieldset class="password"><input type="password" name="confirmpwd" placeholder='Confirm Password' id="confirmpwd" class="password"/></fieldset>
                                </div>
                            
                            
                            
                                <input id="submitRegistration" type="button" value="Register" onclick="return regformhash(this.form,
                                                                                                                        this.form.username,this.form.email,
                                                                                                                        this.form.password,this.form.confirmpwd);" /> 
                                
                            
                        </form>
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
