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
<?php
session_start();
$username = $_SESSION["username"];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Organic Electronics: Foundations to Applications</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
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
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="courseguide.html">Course Guide</a></li>
			<li><a href="errata.html">Corrections and Additions</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="bookcontact.html">Contact</a></li>
		</ul>
	</div>
<!-- end #menu -->
<div id="page">
	<div id="content-full">
	<div class="page-content"> Welcome <?php echo $username;?></div>
    	<h2>Lecture Notes</h2>
	<p>Lecture notes designed for one and two semester-long organic electronics courses are available those who have registered their name and informaiton. Log in, registration, and more information on the lecture notes are available below.

        <ul><br/>
			<li><h3>One Semester Course&nbsp;&nbsp;</a></h3>
				<a href="README.pdf">Read me</a>&nbsp;&nbsp;<br />
			</li>
			
			<li><h3>Two Semester Course&nbsp;&nbsp;</a></h3>
				<a href="README2.pdf"> Read me</a>&nbsp;&nbsp;<br />
			</li>
			<li><h3>Study Guide&nbsp;&nbsp;</a></h3>
			<a href="studyguide.pdf" content="application/pdf">Click here</a>&nbsp;&nbsp;<br/>
			</li>
		</ul>

	<p><a href="source"><h3 align="left">Register</h3></a></p>
	<p align="center"><a href="source/login.php"><h3 align="left">Login</h3></a></p><br/>
	<p align="center">If you have any questions or comments regaring this material, please fill out this <a href="bookcontact.html">form</a>.</p>		
	<img src="cover.png" width="750" align="center">
	<p>Cover Image: 'Spin-orbit coupling.' Created by Jens Zorn. Illustrated by Boning Qu.</p>
   	</div>
        
	<!-- end #content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
	<div id="footer">
		<p>&nbsp;</p>
        <p align="right"><a class="news-footer" href="links.html"> Links |</a><a class="news-footer" href="logout.php"> Logout</a><font size="5"></p>
		<p align="right">Copyright (c) 2020 Stephen Forrest </p>
		<p align="right">All rights reserved. Design by <a class="news" href=  "http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
    <div id="endbox"></div>
    
<!-- end #footer -->
</body>
</html>
