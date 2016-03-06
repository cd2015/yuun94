<?php
require_once("../includes/functions.php");
sec_session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Yuunga | Upload Photo/Image</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/upload.js"></script>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        if (login_check($mysqli) == true) :
            //require_once'../includes/headerLoggedin.php';
            ?>
            <div id="upload-wrapper">
                <div align="center">
                    <h2 style="color:#fff">Upload Photo/Logo.</h2>
                    <span class="upload_type">Image Type allowed: Jpeg, Jpg, Png and Gif. | Maximum Size 4 MB</span>
                    <form action="processupload.php" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
                        <input name="user_id" type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
                        <input name="image_file" id="imageInput" type="file" />
                        <input type="submit"  id="submit-btn" value="Upload" />&nbsp;
                        <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
                    </form>&nbsp;&nbsp;
                    <div id="progressbox" style="display:none;"><div id="progressbar"></div><div id="statustxt">0%</div></div>
                    <div id="output"></div>
                </div>
            </div>
            <?php
            require_once '../includes/footer.php';
        //else: header('Location:../login/');
        else:
            ?>
            <script type="text/javascript">
                alert("Login to upload photo !");
                window.location.href = '../login/';
            </script>
        <?php
        endif;
        ?>
    </body>
</html>