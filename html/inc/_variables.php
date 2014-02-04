<?php 

  // INFORMATION ABOUT BUSINESS USED TO GENERATE WEBTOOLS, PAGE TITLES AND REDIRECT LINK
  $bizName =     'Business Name';
  $bizPhone =    '555-555-5555';
  $bizCity =     'city';
  $bizProvince = 'Ontario';
  $ext =         'ca';
  $bizId =       '13926432';

  // SET THIS TO TRUE FOR REDIRECT TO MOBILE SHOPCITY PROFILE FROM MOBILE DEVICES
  $redirect = "true";

  // CHEKS IF YOU'RE ON THE HOMEPAGE. IF NOT, DECODES THE PAGE VARIABLE SO ITS USABLE IN PAGE TITLE
  if ($page != "Home"){$page = urldecode ($_GET["page"]);}

  // PUTS QUERY STRINGS INTO VARIABLES FOR WEBTOOLS 
  $pageType =    $_GET["pageType"];
  $wPageId =     $_GET["wPageId"];
  $showCat =     $_GET["showCat"];
  $singleCat =   $_GET["singleCat"];
  $galleryId =   $_GET["galleryId"];
  
?>