<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jsprings@umich.edu";
    $email_subject = "Comments on Textbook Webpage";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
 
 if(strlen($comments) < 2) {
    $error_message .= 'The comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Other Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
 
<!-- include your own success html here -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
Name       : Thermal 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20080613
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Organic Electronics: Foundations to Applications</title>
	<meta name="keywords" content="thin film,photonics,organic,semiconductor,organic light emitting diode,organic photovoltaic,artificial eye,OVPD,OMBD,OLED,OPV,Forrest,textbook"/>
	<meta name="description" content="Organic Electronics: Foundations to Applicaitons by Prof. Stephen Forrest is a graduate-level text covering the fundaments of organic electronics followed by an in-depth look at organic electronic devices and their applications."/>
	
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

	
</head>
<body>
    <div class="header-wrapper">
        <div> 
            <div id="titletextbox">
            <div class="site-name">
                <h1>Organic Electronics: Foundations to Applications</h1>
                <h2>By: Prof. Stephen Forrest</h2>
            </div>
            </div>
        </div>
    </div>

   
	<!-- end #header -->
 <!--   <div class="menu-wrapper"
        <div>-->
	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="book/onesemester.html">One Semester Course</a></li>
			<li><a href="book/twosemester.html">Two Semester Course</a></li>
			<li><a href="about.html">About</a></li>
			<li class="current_page_item"></li><a href="bookcontact.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<p>&nbsp</p>
        <p align="center">Thank you for your feedback!</p><br/>
<!-- end #page -->
	<div id="footer">
		<p>&nbsp;</p>
        <p align="right"><a class="news-footer" href="links.html"> Links</a> <font size="5"></p>
		<p align="right">Copyright (c) 2020 Stephen Forrest </p>
		<p align="right">All rights reserved. Design by <a class="news" href=  "http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
    <div id="endbox"></div>
	<!-- end #footer -->
</body>
</html> 
 
<?php
 
}
?>
