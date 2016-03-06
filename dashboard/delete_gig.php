<?php
    include_once "../includes/db_connection.php";

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
        <title>Yuunga | Delete Gig </title>
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
                //if (login_check($mysqli) == true) :
            ?>

                <section class="pageHeading">
                    <div class="container">
                        <article>
                            <div id="pageTitle">
                                <div id="title">
                                    <h1 id="Tit">Delete</h1>
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

                                    <form id="largeForms" class="yungaForms" name="del_gig" method="post" enctype="multipart/form-data" action="del_gig_confirm.php">
                                        <h4>Delete Event!</h4>
                                        <input name="id" type="hidden" id="id" value="<?php echo $row['id']; ?>" />

                                        <div>
                                            <fieldset class="name" >
                                                <label for="title" >Gig: <?php echo $row['gig'];?><label/>
                                            </fieldset> 
                                        </div>

                                        <div>
                                            <fieldset style="height:200px;width:100%" class="question">
                                                <label for="about" >Detail: <?php echo $row['detail'];?><label/>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <fieldset style="height:200px" class="location">
                                                <label for="location" >Location: <?php echo $row['location'];?><label/></br>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <fieldset style="height:200px" class="location">
                                                <label for="location" >Region: <?php echo $row['region'];?><label/></br>
                                            </fieldset>
                                        </div>
                        
                                        <div>
                                            <fieldset class="subject">
                                                <label for="category" >Category: <?php echo $row['category'];?><label/>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <fieldset class="subject">
                                                <label for="category" >Sub Category: <?php echo $row['sub_category'];?><label/>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <fieldset class="phone">
                                                <label for="phone" >Phone Number: <?php echo $row['tel_no'];?><label/>
                                            </fieldset>                
                                        </div>
                                       
                                        <div>
                                            <fieldset class="phone">
                                                <label for="phone" >Whatsapp Number: <?php echo $row['whatsapp'];?><label/>
                                            </fieldset>                
                                        </div>

                                       <div>
                                            <fieldset class="mail">
                                                <label for="email" >Email Address: <?php echo $row['email'];?><label/></br>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <fieldset class="phone">
                                                <label for="skype" >Skype ID: <?php echo $row['skype'];?><label/></br>
                                            </fieldset>
                                        </div> 

                                        <div>
                                            <img src ="../images/gigs/<?php echo $row['logo']; ?>" width='20%'>
                                        </div>
                                        
                                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>" size="40"/>

                                        <div>
                                            <input id="add_Biz" name="delete_event" type="submit" id="delete_event" value="Confirm" />
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
