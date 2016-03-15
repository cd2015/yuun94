<?php
include_once '../includes/functions.php';
//sec_session_start();
?>
<?php if (login_check($mysqli) == true) : ?>
    <head>
        <script type="text/javascript" src="../scripts/business.js"></script>
    </head>
    <div id="content">

        <form  id="largeForms" method="post" action="" name="RegBiz" class="yungaForms" enctype="multipart/form-data">

            <h4>GET YOUR BUSINESS KNOWN, REGISTER IT HERE. ITS COMPLETELY FREE!!</h4> &nbsp;      
            <h4>Company/Business Information (Step 1): </h4> &nbsp;

            <!-- Gets the user_id number-->
            <input name="user_id" type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

            <div>
                <fieldset class="name" >
                    <input id="business_name" type="text" name="business_name" id="business_name" placeholder ="Business Name" />
                </fieldset> 
            </div>

            <div>
                <fieldset class="subject">
                    <select id="category" name="category" style="width: 230px;">                        
                        <option value="0" selected="selected">--Select category--</option>
                        <option value="1">Accommodation</option>
                        <option value="12">Agriculture</option>
                        <option value="2">Business</option>
                        <option value="15">Commercial Firms</option>
                        <option value="3">Education</option>
                        <option value="4">Entertainment</option>
                        <option value="13">Event Specialists</option>
                        <option value="5">Food & Drinks</option>
                        <option value="6">Health</option>
                        <option value="18">Professional Services</option>
                        <option value="17">Sanitary Experts</option>
                        <option value="19">Security</option>
                        <option value="7">Shopping</option>
                        <option value="16">Small Job Experts</option>
                        <option value="8">Sports & Outdoor</option>
                        <option value="9">Tour & Travel</option>
                        <option value="10">Vehicle</option>
                        <option value="11">Worship</option>
                    </select>
                </fieldset>
            </div>
            <div>
                <fieldset class="subject">
                    <select id="sub_cat" name="sub_cat" style="display: none; width: 100%">
                    </select>
                </fieldset>
            </div>

            <div>
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
            <div>
                <fieldset class="phone">
                    <input type="text" name="tel_no" id="tel_no" size="40" placeholder="Telephone Number."/>
                </fieldset> 
            </div>

            <div>
                <fieldset class="phone">
                    <input type="text" name="mob_no" id="mob_no" size="40" maxlength="20" placeholder="Mobile Number."/>
                </fieldset>
            </div>

            <div>
                <fieldset class="mail">
                    <input type="text" name="email" id="email" size="40" placeholder="Email Address."/>
                </fieldset>
            </div>

            <div>
                <fieldset class="site">
                    <input type="text" name="website" id="website" size="40" placeholder="Website address"/>
                </fieldset>
                <em >
                    <a href="http://cyberdynamics.co.ug/services/Cyber%20Dynamics%20Website%20Brochure.pdf">
                        If you don't have a website, contact us for one at a fair cost!
                    </a>
                </em>
            </div>

            <div>
                <fieldset class="site">
                    <input type="text" name="postal_add" id="postal_add" size="40" maxlength="40" placeholder="Postal Address. P.O. Box..."/>
                </fieldset>
            </div>

            <div >
                <fieldset style="height:200px" class="location">
                    <textarea style="padding-left:48px;padding-top:20px;" name="location" id="location" cols="40" rows="5" placeholder="Location Address."></textarea> &nbsp;
                </fieldset>
            </div>

            <div >
                <fieldset style="height:200px;width:100%" class="question">
                    <textarea style="padding-left:48px;padding-top:20px;" name="about" id="about" cols="40" rows="10" placeholder="Briefly Describe Your Business."></textarea> &nbsp;
                </fieldset>
            </div>

            <div>
                <input type="submit" id="add_Biz" name="add_business" value="Submit Business/Company Information" onclick="return check();">

            </div>
        </form>

    </div>

    <?php
    if (isset($_POST['add_business'])) {
        $business_name = $_POST['business_name'];
        $sub_cat = $_POST['sub_cat'];
        $region = $_POST['region'];
        $tel_no = $_POST['tel_no'];
        $mob_no = $_POST['mob_no'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $postal_add = $_POST['postal_add'];
        $location = $_POST['location'];
        $about = $_POST['about'];
        $user_id = $_POST['user_id'];

        $insert_stmt = $mysqli->prepare("INSERT INTO add_business (business_name, category, region, tel_no, mob_no, email, website, postal_add, location, about, user_id) VALUES 
														(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insert_stmt->bind_param('ssssssssssi', $business_name, $sub_cat, $region, $tel_no, $mob_no, $email, $website, $postal_add, $location, $about, $user_id);

        $insert_stmt->execute();

        if ($insert_stmt) {
            ?>
            <script type="text/javascript">
                alert("Business details sumitted. Proceed to uploading business photo/logo..");
                window.location.href = 'upload.php';
            </script>
            <?php
        }
    } else {
        mysql_error();
    }
    ?>

<?php else : ?>
    <p>
        <script type="text/javascript">
            alert("Login to access page !");
            window.location.href = '../login/';
        </script>
    </p>
<?php endif; ?>
