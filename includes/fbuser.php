<?php

$reid = $_GET['id'];

require_once (dirname(__FILE__) . '/functions.php');
sec_session_start(); 

//session_start();
// added in v4.0.0
require_once 'autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '466131310238737','ab8b2af688487a721fb861290b67b3fd' );

// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://www.yuunga.com/includes/fbuser.php?id='.$reid);

try {
  $session = $helper->getSessionFromRedirect();


} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {

 
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
  $fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	$fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
  $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
  $fusername = $graphObject->getProperty('userName'); 

	/* ---- Session Variables -----*/
	$_SESSION['FBID'] = $fbid;           
  $_SESSION['FULLNAME'] = $fbfullname;
	$_SESSION['EMAIL'] =  $femail;
  $_SESSION['usrname'] = $fusername;

    $redUrl = 'http://www.yuunga.com/browse/index.php?id='.$reid;

    header("Location: $redUrl");

      }


else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
  //echo $loginUrl;
}
?>