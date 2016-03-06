<?php
    //include_once "includes/functions.php";
    include_once "../includes/db_connection.php";
    //sec_session_start();

?>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>
        <title>Yuunga | Edit Your Gig </title>
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
        <script type="text/javascript" src="js/gig_categories.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
            <?php
                //if (login_check($mysqli) == true) :
            ?>

                <section class="pageHeading">
                    <div class="container">
                        <article>
                            <div id="pageTitle">
                                <div id="title">
                                    <h1 id="Tit">Edit Your Gig</h1>
                                </div>
                            </div>
                        </article>
                            
                        <article>
                            <a style="float: right;padding-right: 200px;" href="../dashboard/gig_config.php">
                                <i class="fa fa-hand-o-left" id="locIcon"></i>
                                <p style="color: #662046; font-weight:bold; font-size:20px">BACK</p>
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
                                    
                                <?php
                                    $id = $_GET['id'];
                                    $sql = "SELECT * from gigs WHERE id=$id";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_assoc($query)){
                                ?>    
                                

                                <form id="largeForms" class="yungaForms" name="edit_gig" method="post" enctype="multipart/form-data" action="update_gig.php">
                                    <h4>Edit Gig!</h4>
                                    <input name="id" type="hidden" id="id" value="<?php echo $row['id']; ?>" />

                                    <div>
                                        <fieldset class="subject">
                                            <select id="category" name="category" style="width: 230px;">
                                                <option value="" selected="selected">--Select category--</option>
                                            <option value="1">Graphics & Design</option><option value="2">Marketing</option><option value="3">Writing & Typing</option>
                                                <option value="4">Video & Animation</option><option value="5">Music & Audio</option><option value="6">Technology & Software</option>
                                                <option value="7">Advertizing</option><option value="8">Business</option>
                                                <option value="9">Health & Life Style</option><option value="10">Art & Gifts</option><option value="11">Fun, Events & Bizzare</option><option value="12">Small Job Expertize</option><option value="13">Agriculture</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div>
                                        <fieldset class="subject">
                                            <select id="sub_cat" name="sub_cat" style="display: none; width: 100%" >
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div id="noCat">
                                        <a href='#fancy' class="get-contact">Cannot find my category</a>
                                    </div>

                                    <div >
                                        <label>Your GIG :</label>
                                        <fieldset style="height:100px;width:100%" class="question">
                                            <textarea style="padding-left:48px;padding-top:20px;" name="gig" id="about" cols="40" rows="5" ><?php echo $row['gig']; ?></textarea> &nbsp;
                                        </fieldset>
                                    </div>

                                    <div>
                                        <label>Your Price :</label>
                                        <fieldset class="question1" ><input id="gig_price" type="text" name="gig_price" value ="<?php echo $row['price']; ?>" /></fieldset> 
                                    </div>
                                    
                                    <div>
                                        <label>Time to Complete :</label>
                                        <fieldset class="time">
                                            <input type="text" name="duration" id="duration" size="40" maxlength="20" value="<?php echo $row['duration']; ?>"/>
                                        </fieldset>
                                    </div>

                                    <div>
                                        <label>Telephone Number :</label>
                                        <fieldset class="phone">
                                            <input type="text" name="tel_no" id="tel_no" size="40" value="<?php echo $row['tel_no']; ?>"/>
                                        </fieldset> 
                                    </div>

                                    <div>
                                        <label>Email Address :</label>
                                        <fieldset class="mail">
                                            <input type="text" name="email" id="email" size="40" value="<?php echo $row['email']; ?>"/>
                                        </fieldset>
                                    </div>

                                    <div id="website">
                                        <label>Your Personal Website:</label>
                                        <fieldset class="site">
                                            <input type="text" name="website" id="website" size="40" value="<?php echo $row['website']; ?>"/>
                                        </fieldset>
                                        <em >
                                            <a href="http://cyberdynamics.co.ug/services/Cyber%20Dynamics%20Website%20Brochure.pdf">
                                                If you don't have a website, contact us for one at a fair cost!
                                            </a>
                                        </em>
                                    </div>

                                    <div>
                                        <label>Whatsapp Contact :</label>
                                        <fieldset class="phone">
                                            <input type="text" name="whatsapp" id="whatsapp" size="40" value="<?php echo $row['whatsapp']; ?>"/>
                                        </fieldset> 
                                    </div>

                                    <div>
                                        <label>Skype ID :</label>
                                        <fieldset class="site">
                                            <input type="text" name="skype" id="skype" size="40" maxlength="40" value="<?php echo $row['skype']; ?>"/>
                                        </fieldset>
                                    </div>

                                    <div >
                                        <label>Your Location :</label>
                                        <fieldset style="height:200px" class="location">
                                            <textarea style="padding-left:48px;padding-top:20px;" name="location" id="location" cols="40" rows="5" ><?php echo $row['location']; ?></textarea> &nbsp;
                                        </fieldset>
                                    </div>

                                    <div>
                                        <label>Region :</label>
                                        <fieldset class="subject">
                                            <select id="region" name="region" style="width: 230px;">
                                                <option value="" selected="selected">--Select Region--</option>
                                                <option value="Kampala">Kampala</option><option value="Entebbe">Entebbe</option>
                                                <option value="Jinja">Jinja</option>
                                                <option value="Mbarara">Mbarara</option><option value="Mbale">Mbale</option>
                                                <option value="Fort Portal">Fort Portal</option><option value="Gulu">Gulu</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </fieldset>
                                    </div>


                                    <div >
                                        <label>Your GIG Description :</label>
                                        <fieldset style="height:200px;width:100%" class="question">
                                            <textarea style="padding-left:48px;padding-top:20px;" name="about" id="about" cols="40" rows="10" ><?php echo $row['detail']; ?></textarea> &nbsp;
                                        </fieldset>
                                    </div>

                                    <div>
                                        <img src ="../images/gigs/<?php echo $row['logo']; ?>" width='20%'>
                                    </div>
                                    
                                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>" size="40"/>

                                    <div>
                                        <input type="submit" id="add_Biz" class="update_business" name="update_gig" value="Update Your GIG"/>
                                    </div>
                                </form>

                                            
                               <?php
                               }
                               ?>         
                                    
                            </article>

                        </section>
                    </article>
                    <article class="RightAds">
                        &nbsp;   
                    </article>
                            
                </section>
            <?php
                require_once '../includes/footer.php';
                //else: header('Location:../login/');
            //else:
        ?>
          <!--  <script type="text/javascript">
                alert("Login please...");
                window.location.href = '../login/';
            </script>   -->
        <?php
           // endif;
        ?>
    </body>
</html>
