<?php
include_once '../includes/functions.php';
//sec_session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../scripts/notAvailable.js"></script>
    <script type="text/javascript" src="../scripts/business.js"></script>
    <script type="text/javascript" src="js/categories.js"></script>

    <body>
        <title>Yuunga | Business Registration</title>

        <?php if (login_check($mysqli) == true) : ?>

            <div id="content">

                <form id="add_business" class="yungaForms" name="add_business" method="post" action="" enctype="multipart/form-data">
                    <h4>TO GET YOUR BUSINESS KNOWN, REGISTER IT HERE. ITS COMPLETELY FREE!!</h4> &nbsp;      
                    <h4>Company/Business Information (Step 1): </h4> &nbsp;

                    <!-- Gets the user_id number-->
                    <input name="user_id" type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

                    <div>
                        <label>Name :</label>
                        <input id="business_name" type="text" name="business_name" id="business_name" placeholder ="Business Name" /> 
                    </div>

                    <div>
                        <label>Category :</label>
                        <select id="category" name="category" style="width: 230px;">
                            <option value="" selected="selected">--Select category--</option>
                            <option value="1">Accommodation</option><option value="2">Business</option><option value="3">Education</option>
                            <option value="4">Entertainment</option><option value="5">Food & Drinks</option><option value="6">Health</option>
                            <option value="7">Shopping</option><option value="8">Sports & Outdoor</option>
                            <option value="9">Tour & Travel</option><option value="10">Vehicle</option><option value="11">Worship</option>
                        </select>
                    </div>
                    <div><label>Sub Category :</label>
                        <select id="sub_cat" name="sub_cat" style="display: none; width: 230px" >
                        </select>
                    </div>

                    <div>
                        <label>Region :</label>
                        <select id="region" name="region" style="width: 230px;">
                            <option value="" selected="selected">--Select Region--</option>
                            <option value="Kampala">Kampala</option><option value="Entebbe">Entebbe</option>
                            <option value="Mbarara">Mbarara</option><option value="Mbale">Mbale</option>
                            <option value="Fort Portal">Fort Portal</option><option value="Gulu">Gulu</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div>
                        <label>Telephone No. :</label>
                        <input type="text" name="tel_no" id="tel_no" size="40" placeholder="Telephone Number."/> 
                    </div>

                    <div>
                        <label>Mobile No. :</label>
                        <input type="text" name="mob_no" id="mob_no" size="40" maxlength="20" placeholder="Mobile Number."/>
                    </div>

                    <div>
                        <label>Email Address :</label>
                        <input type="text" name="email" id="email" size="40" placeholder="Email Address."/>
                    </div>

                    <div>
                        <label>Website/URL :</label>

                        <input type="text" name="website" id="website" size="40" placeholder="Website address"/>
                        <em id="notAvailableRedirecting"><a href=""> If you don't have a website, contact us for one at a fair cost!</a></em>
                    </div>

                    <div>
                        <label>Postal Address :</label>
                        <input type="text" name="postal_add" id="postal_add" size="40" maxlength="40" placeholder="Postal Address."/>
                    </div>

                    <div class="textAs">
                        <label>Location:</label>
                        <textarea style="margin-left:280px;" name="location" id="location" cols="40" rows="5" placeholder="Location Address."></textarea> &nbsp;
                    </div>

                    <div class="textAs">
                        <label>About:</label>
                        <textarea style="margin-left:280px;" name="about" id="about" cols="40" rows="10" placeholder="Briefly Describe Your Business."></textarea> &nbsp;
                    </div>

                    <div>
                        <input type="submit" id="add_Biz" name="add_business" value="Submit Business/Company Information" onclick="return businessform(this.form, this.form.business_name,
                                        this.form.category, this.form.tel_no, this.form.mob_no,
                                        this.form.email, this.form.website, this.form.postal_add, this.form.location, this.form.about);"/> 
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
                        alert("Processing, please wait... !");
                        window.location.href = './upload.php';
                    </script>

                    <?php
                    //echo "Business Information submitted!";
                    //header('Location: upload.php');
                    //exit();
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
</html>