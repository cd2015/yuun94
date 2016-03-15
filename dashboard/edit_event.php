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
        <title>Yuunga | Edit Event </title>
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
        <script type="text/javascript" src="js/categories.js"></script>
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
                                    <h1 id="Tit">Edit Event</h1>
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
                                

                                <form id="largeForms" class="yungaForms" name="edit_event" method="post" action="update_event.php" enctype="multipart/form-data">
                                    <h4>Edit Event</h4>

                                    <!-- Gets the user_id number-->
                                    <input name="id" type="hidden" id="id" value="<?php echo $row['id']; ?>" />

                                    <div>
                                        <label>Event Name :</label>
                                        <fieldset class="name" >
                                            <input type="text" id="business_name" name="title" placeholder="Business Name" value="<?php echo $row['title']; ?>" size="40"/>
                                        </fieldset> 
                                    </div>


                                    <div >
                                        <label >Event Description :</label>
                                        <fieldset style="height:200px;width:100%" class="question">
                                            <textarea style="margin-left:50px;margin-top: 20px;" name="event" id="event" placeholder="Description of the Event." cols="40" rows="10"  size="40"><?php echo $row['event']; ?></textarea>
                                        </fieldset>
                                    </div>

                                    <div >
                                        <fieldset style="height:200px" class="location">
                                            <textarea style="padding-left:48px;padding-top:20px;" name="location" id="location" cols="40" rows="5" placeholder="Event Location."><?php echo $row['location']; ?></textarea> &nbsp;
                                        </fieldset>
                                    </div>

                                    <div>
                                        <fieldset class="subject">
                                            <select id="category" name="category" style="width: 230px;">
                                                <option value="" selected="selected">--Select category--</option>
                                                <option value="business">Business</option><option value="music">Music</option><option value="movie">Movies</option>
                                                <option value="art">Art&Culture</option><option value="tech">Tech</option><option value="tv">TV&Radio</option>
                                                <option value="sport">Sports</option><option value="media">Media</option>
                                                <option value="conference">Conference</option><option value="fest">Festivals</option><option value="concert">Concert</option><option value="meet">Meet Ups</option><option value="party">Party</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    

                                    <div>
                                        <fieldset class="subject">
                                            <select id="region" name="region" style="width: 230px;">
                                                <option value="" selected="selected">--Select Region--</option>
                                                <option value="Kampala">Kampala</option><option value="Entebbe">Entebbe</option>
                                                <option value="Mbarara">Mbarara</option><option value="Mbale">Mbale</option>
                                                <option value="Fort Portal">Fort Portal</option><option value="Gulu">Gulu</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div>
                                        <label style="width: 20%;float: left;margin-right: 5px">Event Date</label>
                                        <fieldset style="width: 20%;float: left;margin-right: 5px" class="time">
                                            <select style="margin-left:30px;" name="day">
                                                <option value="">Day</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option>
                                                <option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option>
                                                <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
                                                <option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
                                                <option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                                <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
                                                <option value="31">31</option>
                                            </select >
                                        </fieldset>
                                        <fieldset style="width: 20%;float: left;margin-right: 5px" class="time">
                                            <select style="margin-left:30px" name="month" >
                                                <option value="">Month</option><option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option><option value="04">Apr</option><option value="05">May</option>
                                                <option value="06">Jun</option><option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option><option value="10">Oct</option>
                                                <option value="11">Nov</option><option value="12">Dec</option>
                                            </select>
                                        </fieldset>
                                        <fieldset style="width: 20%;float: clear;" class="time">
                                            <select style="margin-left:30px" name="year" >
                                                <option value="">Year</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </fieldset>

                                    </div>


                                    <div>
                                        <label style="width: 20%;float: left;margin-right: 5px">Start Time </label>
                                        <fieldset style="width: 30%;float: left;margin-right: 5px" class="time">
                                            <select style="margin-left:30px" name="start_hr">
                                                <option value="">Hour</option><option value="00">00</option>
                                                <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option>
                                                <option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option>
                                                <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
                                                <option value="16">16</option><option value="17">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option>
                                                <option value="22">22</option><option value="23">23</option>                
                                            </select>
                                         </fieldset>   
                                        <fieldset style="width: 30%;float:clear;margin-right: 5px" class="time">
                                            <select style="margin-left:30px" name="start_min">
                                                <option value="">Minute</option><option value="00">00</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option>
                                                <option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option>
                                                <option value="55">55</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div>
                                        <label style="width: 20%;float: left;margin-right: 5px">End Time </label>
                                        <fieldset style="width: 30%;float: left;margin-right: 5px" class="time">
                                            <select style="margin-left:30px" name="end_hr">
                                                <option value="">Hour</option><option value="00">00</option>
                                                <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option>
                                                <option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option>
                                                <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
                                                <option value="16">16</option><option value="17">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option>
                                                <option value="22">22</option><option value="23">23</option>                
                                            </select>
                                         </fieldset>   
                                        <fieldset style="width: 30%;float:clear;margin-right: 5px" class="time">
                                            <select style="margin-left:30px" name="end_min">
                                                <option value="">Minute</option><option value="00">00</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option>
                                                <option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option>
                                                <option value="55">55</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div>
                                        <label>Contact Name :</label></label>
                                        <fieldset class="name" >
                                            <input type="text" id="contact_name" name="contact_name" placeholder="Contact Name." value="<?php echo $row['contact_name']; ?>" size="40"/>
                                        </fieldset> 
                                    </div>

                                
                                    <div>
                                        <label>Contact Email. :</label>
                                        <fieldset class="mail">
                                            <input type="text" id="contact_email" name="contact_email" placeholder="Contact Email Address." value="<?php echo $row['contact_email']; ?>" size="40"/>
                                        </fieldset>
                                    </div>


                                    <div>
                                        <label>Contact Phone :</label>
                                        <fieldset class="phone">
                                            <input type="text" id="contact_phone" name="contact_phone" placeholder="Contact Phone No." value="<?php echo $row['contact_phone']; ?>" size="40"/>
                                        </fieldset> 
                                    </div>

                                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>" size="40"/>

                                    <div><label>Event Poster</label>
                                        <img src ="../images/events/<?php echo $row['logo'];?>" width='25%'>
                                    </div>
                                    
                                    <div>
                                        <input id="add_Biz" type="submit" class="update_event" name="update_event" id="update_event" value="Update Event"></button> 
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
