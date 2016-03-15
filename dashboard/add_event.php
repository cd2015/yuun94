<?php
if (isset($_POST['add_event'])) {
    $user_id = mysql_escape_string($_POST['user_id']);
    $title = mysql_escape_string($_POST['title']);
    $event = mysql_escape_string($_POST['event']);
    $location = mysql_escape_string($_POST['location']);
    $category = mysql_escape_string($_POST['category']);
    $region = mysql_escape_string($_POST['region']);
    $contact_name = mysql_escape_string($_POST['contact_name']);
    $contact_phone = mysql_escape_string($_POST['contact_phone']);
    $contact_email = mysql_escape_string($_POST['contact_email']);
    $days;
    $date_create;
    $event_date_converted;

    /*
      Date at which the event is captured
     */
    $date_create = date("F d, Y");

//Calculate number of days remaining
    $date_today = date("F d, Y");
    $event_day = new DateTime($date_today);
    $event_create = $event_day->format('U');

//Event date (event_date)
    $Evenday = $_POST['day'];
    $Evmonth = $_POST['month'];
    $Evyear = $_POST['year'];

    $event_date = ("$Evmonth $Evenday, $Evyear");


//Difference between the dates (Number of days)
    $event_Date_2 = strtotime($event_date);
    $days = round(($event_Date_2 - $event_create) / (60 * 60 * 24));

//Time of event creation
    $time_create = date('H:i');

//Event Start Time (event_start)
    $start_hr = $_POST[mysql_escape_string('start_hr')];
    $start_min = $_POST[mysql_escape_string('start_min')];

    $event_start = $start_hr . ":" . $start_min;

//Event End Time (event_end)
    $end_hr = $_POST[mysql_escape_string('end_hr')];
    $end_min = $_POST[mysql_escape_string('end_min')];

    $event_end = $end_hr . ":" . $end_min;

    $insert_stmt = $mysqli->prepare("INSERT INTO add_event (user_id, title, event, location, category, date_create, time_create, event_date, event_date_converted, event_start, event_end, contact_name, contact_email, contact_phone, region) VALUES 
												(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $insert_stmt->bind_param('isssssssssssssi', $user_id, $title, $event, $location, $category, $date_create, $time_create, $event_date, $event_Date_2, $event_start, $event_end, $contact_name, $contact_email, $contact_phone, $region);

    $insert_stmt->execute();

    if ($insert_stmt) {
        ?>
        <style>
            #add_event{
                display: none;
            }
        </style>
        <script>
            alert("Details submitted. Go back to Add Event's tab to upload photo/logo.");
        </script>
        <?php
        echo 'Event details have been submitted.';
        echo '<br>';
        require_once 'upload_event.php';
        
    } else {
        echo 'Couldnt be added';
    }
}
?>
<?php
include_once '../includes/functions.php';
require_once ('../includes/psl-config.php');
require_once ('../includes/db_connect.php');
//sec_session_start();
?>
<?php if (login_check($mysqli) == true) : ?>

    <div id="content">

        <form id="add_event" class="yungaForms" name="add_event" method="post" action="" enctype="multipart/form-data">
            <h4>Create an Event</h4>

            <!-- Gets the user_id number-->
            <input name="user_id" type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>"/>

            <div>
                <fieldset class="name" >
                    <input id="title" type="text" name="title" id="title" placeholder ="Event Title" />
                </fieldset> 
            </div>

            <div >
                <fieldset style="height:200px;width:100%" class="question">
                    <textarea style="padding-left:48px;padding-top:20px;" name="event" id="about" cols="40" rows="10" placeholder="Event Description."></textarea> &nbsp;
                </fieldset>
            </div>

            <div >
                <fieldset style="height:200px" class="location">
                    <textarea style="padding-left:48px;padding-top:20px;" name="location" id="location" cols="40" rows="5" placeholder="Event Location."></textarea> &nbsp;
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
                    <select style="margin-left:30px;" name="day" id="day">
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
                    <select style="margin-left:30px" name="month" id="month" >
                        <option value="">Month</option><option value="January">Jan</option><option value="February">Feb</option><option value="March">Mar</option><option value="April">Apr</option><option value="May">May</option>
                        <option value="June">Jun</option><option value="July">Jul</option><option value="August">Aug</option><option value="September">Sep</option><option value="October">Oct</option>
                        <option value="November">Nov</option><option value="December">Dec</option>
                    </select>
                </fieldset>
                <fieldset style="width: 20%;float: clear;" class="time">
                    <select style="margin-left:30px" name="year" id="year">
                        <option value="">Year</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option>
                        <option value="2019">2019</option>
                    </select>
                </fieldset>

            </div>


            <div>
                <label style="width: 20%;float: left;margin-right: 5px">Start Time </label>
                <fieldset style="width: 30%;float: left;margin-right: 5px" class="time">
                    <select style="margin-left:30px" name="start_hr" id="start_hr">
                        <option value="">Hour</option><option value="00">00</option>
                        <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option>
                        <option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option>
                        <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
                        <option value="16">16</option><option value="17">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option>
                        <option value="22">22</option><option value="23">23</option>                
                    </select>
                </fieldset>   
                <fieldset style="width: 30%;float:clear;margin-right: 5px" class="time">
                    <select style="margin-left:30px" name="start_min" id="start_min">
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
                <fieldset class="name" >
                    <input id="contact_name" type="text" name="contact_name" id="contact_name" placeholder ="Event Contact Person" />
                </fieldset> 
            </div>

            <div>
                <fieldset class="mail">
                    <input type="text" name="contact_email" id="contact_email" size="40" placeholder="Contact Email."/>
                </fieldset>
            </div>

            <div>
                <fieldset class="phone">
                    <input type="text" name="contact_phone" id="contact_phone" size="40" placeholder="Contact Phone."/>
                </fieldset> 
            </div>


            <div>
                <input type="submit" id="add_Biz" name="add_event" value="Submit Event Details"/> 
            </div>
        </form></div>


<?php else : ?>
    <p>
        <script type="text/javascript">
            alert("Login to access page !");
            window.location.href = '../login/';
        </script>
    </p>
<?php endif; ?>
