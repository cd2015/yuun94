<?php
    $servername = "localhost";
    $username = "yuunga_cyber";
    $password = "yunga123@cyber";
    $dbname = "yuunga_yunga";
            
    //Create connection
    $conn = new mysqli ($servername, $username, $password, $dbname);

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
        <title>Yuunga | Delete Event </title>
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
            		                
                                <?php
                                    $id = $_GET['id'];
                
                                    $sql = "SELECT * from add_event WHERE id=$id";
                                    $query = mysqli_query($conn, $sql);
        
                                    while($row = mysqli_fetch_assoc($query)){
                
                                    ?>

                                    <form id="largeForms" class="yungaForms" name="del_business" method="post" enctype="multipart/form-data" action="del_event_confirm.php">
                                        <h4>Delete Event!</h4>
                                        <input name="id" type="hidden" id="id" value="<?php echo $row['id']; ?>" />

                                        <div>
                                            <fieldset class="name" >
                                                <label for="title" >Event Name: <?php echo $row['title'];?><label/>
                                            </fieldset> 
                                        </div>

                                        <div>
                                            <fieldset style="height:200px;width:100%" class="question">
                                                <label for="about" >About: <?php echo $row['event'];?><label/>
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
                                            <fieldset class="time">
                                                <label for="date_create" >Date Created: <?php echo date("Y-m-d", $result['date_create']);?><label/>
                                            </fieldset>                
                                        </div>

                                        <div>
                                            <fieldset class="time">
                                                <label for="event_date" >Event Date : <?php echo date("Y-m-d", $result['event_date']);?><label/>
                                            </fieldset>                
                                        </div>

                                        <div>
                                            <fieldset class="time">
                                                <label for="event_start" >Start Time : <?php echo $row['event_start'];?><label/>
                                            </fieldset>                
                                        </div>

                                        <div>
                                            <fieldset class="time">
                                                <label for="event_end" >End Time : <?php echo $row['event_end'];?><label/>
                                            </fieldset>                
                                        </div>
                                       
                                        <div>
                                            <fieldset class="name">
                                                <label for="contact_name" ><?php echo $row['contact_name'];?><label/>
                                            </fieldset>                
                                        </div>
                                       
                                       <div>
                                            <fieldset class="mail">
                                                <label for="contact_email" ><?php echo $row['contact_email'];?><label/></br>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <fieldset class="phone">
                                                <label for="contact_phone" ><?php echo $row['contact_phone'];?><label/></br>
                                            </fieldset>
                                        </div> 

                                        <div>
                                            <img src ="../images/events/<?php echo $row['logo']; ?>" width='20%'>
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
                        Right Ads   
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
