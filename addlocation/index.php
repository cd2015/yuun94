<?php 
    require_once("../includes/functions.php");
    sec_session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>
        <title>Yuunga | Add Location </title>
        <link rel="icon" href="../images/yungaIcon.gif" type="image/x-icon" />
        <link rel="stylesheet" media="all" href="../styles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/yunga_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/onlinedirectory.css" />
        <link rel="stylesheet" type="text/css" href="../styles/form_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/tabs_styles.css" />
        <link rel="stylesheet" type="text/css" href="../styles/font-awesome.min.css"/>
        <script type="text/javascript" src="../scripts/sha512.js"></script> 
        <script type="text/JavaScript" src="../scripts/forms.js"></script>
        <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
        <script>window.jQuery || document.write("<script src='../scripts/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>
        <script type="text/javascript" src="../scripts/business.js"></script>
        <script type="text/javascript" src="../dashboard/js/categories.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3qQHOQs5kwLp4ieJoH4IxqASVwzBJQSk"
            type="text/javascript">
        </script>

        <script type="text/javascript">
            var marker;
            var infowindow;

            function initialize() {
            
              var latlng = new google.maps.LatLng(0.3310038,32.5826348);//Retrieve map of Kampala
              var options = {
                zoom: 13,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              }
              var map = new google.maps.Map(document.getElementById("mapAdd"), options);
              var html = "<table>" +
                         "<tr><td><fieldset style='margin-bottom: 2px;' class='name'><input placeholder='Business Name' type='text' id='name' /></fieldset> </td> </tr>" +
                         "<tr><td><fieldset style='height:50px;margin-bottom: 2px;' class='location' <td><input placeholder='Location' type='text' id='address' /></td></fieldset></tr>" +
                         "<tr><td>"+
                         "<lable>Pick your Category</label>"+
                            "<select id='category' name='category' style='width: 230px;'>"+
                                "<option value='' selected='selected'>*********ACCOMODATION*********</option>"+
                                "<option value='Apartment'>Apartment</option><option value='Camping/Back Packer'>Camping/Back Packer</option><option value='Cottage/Country Club'>Cottage/Country Club</option><option value='Hotel/Suite'>Hotel/Suite</option><option value='Real Estate/Rental'>Real Estate/Rental</option>"+
                                "<option value=''>**********BUSINESS**********</option>"+
                                "<option value='Advertisement/Branding'>Advertisement/Branding</option><option>Beauty Saloon/Spa</option><option value='Banks & Forex Bureas'>Banks & Forex Bureas</option><option value='Bridal Services/Cars'>Bridal Services/Cars</option><option value='Courier'>Courier</option><option value='Boutiques & Tailoring'>Boutiques & Tailoring</option><option value='Furniture'>Furniture</option><option value='Garden/Interior Designs'>Garden/Interior Designs</option><option value='ICT/Software/Computing'>ICT/Software/Computing</option><option value='Insurance'>Insurance</option><option value='Mobile & Online Payments'>Mobile & Online Payments</option><option value='Phones/Accessories'>Phones/Accessories</option><option value='Photography/Video'>Photography/Video</option><option value='Telecom'>Telecom</option><option value='Travel/Tourism'>Travel/Tourism</option>"+
                                "<option value='3'>**********EDUCATION**********</option>"+
                                "<option value='Day Care Center'>Day Care Center</option><option value='High School'>High School</option><option value='International School'>International School</option><option value='Language School'>Language School</option><option value='Pre/Primary School'>Pre/Primary School</option><option value='University/College'>University/College</option>"+
                                "<option value='4'>**********ENTERTAINMENT*********</option>"+
                                "<option value='Bar/Lounge'>Bar/Lounge</option><option value='Casino'>Casino</option><option value='Cinema/Theatre'>Cinema/Theatre</option><option value='Night Club'>Night Club</option>"+
                                "<option value='5'>*************FOOD & DRINKS***********</option>"+
                                "<option value='Coffe Cade'>Coffee Cafe</option><option value='Delicatessen'>Delicatessen</option><option value='Pastry/Confectionary'>Pastry/Confectionary</option><option value='Restaurant'>Restaurant</option>"+
                                "<option value='6'>************HEALTH*************</option>"+
                                "<option value='Ambulance'>Ambulance</option><option value='Clinic'>Clinic</option><option value='Health Specialist'>Health Specialist</option><option value='Hospital'>Hospital</option>"+
                                "<option value='7'>************SHOPPING***********</option>"+
                                "<option value='African Crafts/Art Gallery'>African Crafts/Art Gallery</option><option value='Butchery/Abattoir'>Butchery/Abattoir</option><option value='Computers/Electronics'>Computers/Electronics</option><option value='Flowers/Gifts'>Flowers/Gifts</option><option value='Shop'>Shop</option><option value='Stationery'>Stationery</option><option value='Supermarket/Mall'>Supermarket/Mall</option>"+
                                "<option value='8'>**********SPORTS & OUTDOOR***********</option>"+
                                "<option value='Boxing/Kick Boxing/Martial Arts'>Boxing/Kick Boxing/Martial Arts</option><option value='Climbing/Cycling/Biking'>Climbing/Cycling/Biking</option><option value='Gym/Health Club'>Gym/Health Club</option><option value='Hockey/Golf/Cricket'>Hockey/Golf/Cricket</option><option value='Soccer/Rugby/Athletics'>Soccer/Rugby/Athletics</option><option value='Swimming/Boats/Water Sports'>Swimming/Boats/Water Sports</option><option value='Tennis/Badminton/Squash'>Tennis/Badminton/Squash</option><option value='Volleyball/Basketball'>Volleyball/Basketball</option>"+
                                "<option value='9'>************TOUR & TRAVEL***********</option>"+
                                "<option value='Embassy'>Emabssy</option><option value='Travel Agent/Tour Operator'>Travel Agent/Tour Operator</option><option value='Vehicle'>Vehicle Hire</option>"+
                                "<option value='10'>************VEHICLE***************</option>"+
                                "<option value='Batteries/Spare Parts'>Batteries/Spare Parts</option><option value='Garage'>Garage</option><option value='Tyre/Wheel Alignment'>Tyre/Wheel Alignment</option>"+
                                "<option value='11'>*************WORSHIP****************</option>"+
                                "<option value='Anglican'>Anglican</option><option value='Bahia'>Bahia</option><option value='Catholic'>Catholic</option><option value='Envagelical/Pentecostal'>Envagelical/Pentecostal</option><option value='Hindu'>Hindu</option><option value='Muslim'>Muslim</option>"+
                            "</select>"+
                        "</td> </tr>" +
                         "<tr><td><input style='background-color:#662046;border-radius:6px' type='button' value='Submit Location' onclick='saveData()'/></td></tr>" +
                         "</table>";
            infowindow = new google.maps.InfoWindow({
             content: html
            });

            google.maps.event.addListener(map, "click", function(event) {
                marker = new google.maps.Marker({
                  position: event.latLng,
                  map: map
                });
                google.maps.event.addListener(marker, "click", function() {
                  infowindow.open(map, marker);
                });
            });
            
            
            }

            function saveData() {
              var name = escape(document.getElementById("name").value);
              var address = escape(document.getElementById("address").value);
              var type = document.getElementById("category").value;
              var latlng = marker.getPosition();

              var url = "addlocation.php?name=" + name + "&address=" + address +
                        "&type=" + type + "&lat=" + latlng.lat() + "&lng=" + latlng.lng();
                
              downloadUrl(url, function(data, responseCode) {
                if (responseCode == 200 && data.length >= 1) {
                  infowindow.close();
                  var msg = document.getElementById("message");
                  msg.style.display = "block";
                  msg.innerHTML = data;
                }
              });
            }
            
            function changeLocation(){
                
                var delLoc = escape(document.getElementById("loc2Del").value);
                var urlDel = "deletelocation.php?locid=" + delLoc;
                
                deleteUrl(urlDel, function(data, responseCode) {
                if (responseCode == 200 && data.length >= 1) {
                    //infowindow.close();
                    //var msg = document.getElementById("message");
                    //msg.style.display = "block";
                    //msg.innerHTML = data;
                }
              });
                
            }

            function downloadUrl(url, callback) {
                
              var request = window.ActiveXObject ?
                  new ActiveXObject('Microsoft.XMLHTTP') :
                  new XMLHttpRequest;

              request.onreadystatechange = function() {
                if (request.readyState == 4) {
                
                  request.onreadystatechange = doNothing;
                  
                  callback(request.responseText, request.status);
                }
              };
              
              request.open('GET', url, true);
              request.send(null);
            
            }
            
            function deleteUrl(url, callback) {
                
              var delRequest = window.ActiveXObject ?
                  new ActiveXObject('Microsoft.XMLHTTP') :
                  new XMLHttpRequest;

              delRequest.onreadystatechange = function() {
                if (delRequest.readyState == 4) {
                
                  delRequest.onreadystatechange = doNothing;
                  
                  callback(delRequest.responseText, delRequest.status);
                }
              };

              delRequest.open('GET', url, true);
              delRequest.send(null);
                
            }

            function doNothing() {}
        </script>
        

    </head>
    <body onload="initialize()">
        <?php if ((login_check($mysqli) || ($_SESSION['FBID'])) == true) :
            require_once'../includes/headerLoggedin.php';
        ?>


        <section class="pageHeading">
            <div class="container">
                <article>
                    <div id="pageTitle">
                        <div id="pageTitleIcon">
                            <i class="fa fa-map-marker" id="locIcon"></i>
                        </div>
                        <div id="title">
                            <h1 id="Tit">Add Location</h1>
                        </div>
                    </div>
                </article>
                <article>
                    
                </article>
            </div>
            <!-- / container -->
        </section>


	   <section class="mainSection">
            
            <article class="LocationResults">
                
                <h4>How to add your location to Yuunga</h4>
                  
                  <img src="images/addlocGuide.gif" style="width:100%"></img>
    
            </article>
            <article class="CentreSection">
                <section class="mono-mainSec">
                    <article class="monoSec1">
		              
                        <?php 
                            require_once (dirname(__FILE__).'/addlocation.html');
                        ?> 
                	</article>
                </section>
            </article>
            <article class="RightAds">
                Right Ads   
            </article>
                
                
        </section>
            
        <?php
            include_once '../includes/footer.php';
            include_once '../includes/fancy.php';
        ?>
    </body>
        <?php 
            else : 
                header ('Location: ../login/');
            endif; 
        ?>       
</html>
