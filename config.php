<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1658058641175935'; //Facebook App ID
$appSecret = '717615f43af87685ae408999c7dfb3f4'; // Facebook App Secret
$homeurl = 'http://effe.org.in/Perplexus/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret,

));
$fbuser = $facebook->getUser();
?>
