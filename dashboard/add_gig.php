<?php
include_once '../includes/functions.php';
include_once '../includes/db_connection.php';
//sec_session_start();
?>
<?php if ((login_check($mysqli) || ($_SESSION['FBID'])) == true) : ?>

            <div id="content">

                <form id="largeForms" class="yungaForms" name="add_gig" method="post" action="" enctype="multipart/form-data">
                    <h4>Tell them what Gig you can do</h4> &nbsp;
                    <div id="days2go">
                        <h5>You can add up to 5 Gigs, <?php
                        $currentUser = $_SESSION['user_id'];
                        
                        $sql = "SELECT gig FROM gigs where user_id = '$currentUser'";
                        $query = mysqli_query($conn, $sql);
                        $currentRecords = $query->num_rows;
                        $remainingRecords = (5 - $currentRecords);

                        echo $remainingRecords." to go";
                        ?></h5>
                    </div>      
                    
                    <!-- Gets the user_id number-->
                    <input name="user_id" type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

                    <input name="currentRecords" type="hidden" id="currentRecords" value="<?php echo $currentRecords; ?>" />

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
                        <fieldset style="height:100px;width:100%" class="question">
                            <textarea style="padding-left:48px;padding-top:20px;" name="gig" id="about" cols="40" rows="5" placeholder="I can create/design/contruct ..."></textarea> &nbsp;
                        </fieldset>
                    </div>

                    <div>
                        <fieldset class="question1" ><input id="gig_price" type="text" name="gig_price" placeholder ="For (10,000 UGX - 25,000 UGX)" /></fieldset> 
                    </div>

                    <div>
                        <fieldset class="time">
                            <input type="text" name="duration" id="duration" size="40" maxlength="20" placeholder="Within 1 day ..."/>
                        </fieldset>
                    </div>

                    <div>
                        <fieldset class="phone">
                            <input type="text" name="tel_no" id="tel_no" size="40" placeholder="Telephone Number."/>
                        </fieldset> 
                    </div>

                    <div>
                        <fieldset class="mail">
                            <input type="text" name="email" id="email" size="40" placeholder="Email Address."/>
                        </fieldset>
                    </div>

                    <div id="website">
                        <fieldset class="site">
                            <input type="text" name="website" id="website" size="40" placeholder="Personal Website"/>
                        </fieldset>
                        <em >
                            <a href="http://cyberdynamics.co.ug/services/Cyber%20Dynamics%20Website%20Brochure.pdf">
                                If you don't have a website, contact us for one at a fair cost!
                            </a>
                        </em>
                    </div>

                    <div>
                        <fieldset class="phone">
                            <input type="text" name="whatsapp" id="whatsapp" size="40" placeholder="Whatsapp Number."/>
                        </fieldset> 
                    </div>

                    <div>
                        <fieldset class="site">
                            <input type="text" name="skype" id="skype" size="40" maxlength="40" placeholder="Skype ID"/>
                        </fieldset>
                    </div>

                    <div >
                        <fieldset style="height:200px" class="location">
                            <textarea style="padding-left:48px;padding-top:20px;" name="location" id="location" cols="40" rows="5" placeholder="Location Address."></textarea> &nbsp;
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


                    <div >
                        <fieldset style="height:200px;width:100%" class="question">
                            <textarea style="padding-left:48px;padding-top:20px;" name="about" id="about" cols="40" rows="10" placeholder="Briefly Describe Your GIG."></textarea> &nbsp;
                        </fieldset>
                    </div> 

                    <div>
                        <input type="submit" id="add_Biz" name="add_gig" value="Submit GIG" onclick="return businessform(this.form, this.form.business_name,
                                        this.form.category, this.form.tel_no, this.form.mob_no,
                                        this.form.email, this.form.website, this.form.postal_add, this.form.location, this.form.about);"/> 
                    </div>
                </form>

            </div>

            <?php
            if (isset($_POST['add_gig'])) {
                $category = $_POST['category'];
                $sub_cat = $_POST['sub_cat'];
                $gig = $_POST['gig'];
                $gig_price = $_POST['gig_price'];
                $duration = $_POST['duration'];
                $tel_no = $_POST['tel_no'];
                $email = $_POST['email'];
                $website = $_POST['website'];
                $whatsapp = $_POST['whatsapp'];
                $skype = $_POST['skype'];
                $location = $_POST['location'];
                $region = $_POST['region'];
                $about = $_POST['about'];
                $user_id = $_POST['user_id'];
                $currentRecords = $_POST['currentRecords'];

                if($currentRecords < 5){

                $insert_stmt = $mysqli->prepare("INSERT INTO gigs (gig, category, sub_category, price, duration,  tel_no, email, website, whatsapp, skype, location, region, detail, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $insert_stmt->bind_param('sssssssssssssi', $gig , $category, $sub_cat, $gig_price, $duration, $tel_no, $email, $website, $whatsapp, $skype, $location, $region, $about, $user_id);

                $insert_stmt->execute();

                if ($insert_stmt) {
                    ?>

                    <script type="text/javascript">
                        alert("Your GIG has been added, proceed to upload... !");
                        window.location.href = './uploadGIG.php';
                    </script>

                    <?php
                }
            } else {
                mysql_error();
            }
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
