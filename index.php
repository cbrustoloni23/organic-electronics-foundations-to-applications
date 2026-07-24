<?php 
use Phppot\Member;

session_start();
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
<script src="./vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>

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
    	<h2>Lecture Notes</h2>
	<p>Lecture notes designed for one and two semester-long organic electronics courses are available to those who have registered their name and information. Registration is free and is only for the purpose of record keeping. You may log in or register below.
        <ul><br/>
	<img src="cover.png" width="750" align="center">
	<p>Cover Image: 'Spin-orbit coupling.' Created by Jens Zorn. Illustrated by Boning Qu.</p>
   	</div>
        
	<!-- end #content -->
	<div style="clear: both;">&nbsp;</div>
</div>
	<div class="phppot-container">
	<?php require_once "login-form.php";
	?>
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

