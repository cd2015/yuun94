<?php 
	require_once("../includes/functions.php");
	sec_session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <title>Yuunga | Dashboard </title>
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
            <script type="text/javascript" src="../scripts/sha512.js"></script> 
            <script type="text/JavaScript" src="../scripts/forms.js"></script>
			<link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
            <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
			
			<script type="text/javascript">
           jQuery(document).ready(function() {
			   
		jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});      
   </script>
            
    </head>
	<body>
	
        <?php if (login_check($mysqli) == true) :
				require_once'../includes/headerLoggedin.php';
		?>
		
		<div id="middle">
        <div id="headEvent">
            <div id="pageTitle">
                <div id="pageTitleIcon">
                    <i class="fa fa-tachometer" id="locIcon"></i>
                </div>
                <div id="title">
                    <h1 id="Titt">ACCOUNT MANAGEMENT</h1>
                </div>
            </div>
        </div>
        <div id="leftAds">
                        
        </div>
		
        <div id="browseSection">
		            		
			    <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab1">Add Business</a></li>
					<!--<li><a href="#tab2">Add photo or Logo</a></li>-->
                    <li><a href="#tab3">View Business</a></li>
                    <li><a href="#tab4">Add Event</a></li>
                    <li><a href="#tab5">View Events</a></li>
					
                    
				</ul>
				
				<div class="tab-content">
						<div id="tab1" class="tab active">
							<?php
								require_once (dirname(__FILE__).'/add_business.php');
							?>
						</div>
						<div id="tab2" class="tab">
							<?php
								//require_once (dirname(__FILE__).'/upload.php');
                        ?>
						</div>
						<div id="tab3" class="tab">
							<?php
								require_once (dirname(__FILE__).'/view_business.php');
							?>
						</div>
						<div id="tab4" class="tab">
							<?php
								require_once (dirname(__FILE__).'/add_event.php');
							?>
						</div>
						<div id="tab5" class="tab">
							<?php
								require_once (dirname(__FILE__).'/view_event.php');
                        ?>
						</div>
						
				</div>

            
			</div>
			</div>
        
    <div id="rightAds">
            
        </div>
	</div>
	<?php
	require_once '../includes/footer.php';
	?>
	<footer id="footer">
            <div id="copyright">&copy; yunga | Cyber Dynamics | 2015</div>
	</footer>
    </body>
<?php else : 
				header ('Location: ../login/');
		endif; ?>    	
	
</html>