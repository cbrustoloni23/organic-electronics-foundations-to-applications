<?PHP
if (! empty($_POST["login-btn"])) {
	require_once './Model/Member.php';
	$member = new Member();
	$loginResult = $member->loginMember();
?>
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
<meta name="keywords" content="" />
<meta name="description" content="" />
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
			<li><a href="../index.html">Home</a></li>
			<li class="current_page_item"><a href="book/onesemster.html">One Semester Course</a></li>
			<li><a href="twosemester.html">Two Semester Course</a></li>
			<li><a href="../about.html">About</a></li>
			<li><a href="../bookcontact.html">Contact</a></li>
		</ul>
	</div>
<!-- end #menu -->
<div id="page">
	<div id="content-full">
        
    	<h2>Lecture Notes - One Semester Course</h2>
        <ul>
	                 <li><a href="week1.pdf" content="application/pdf" ><h3>Week 1&nbsp;&nbsp;</a></h3>
                                Introduction to Organic Electronics<br />
				<br/>
				<br/>
                                <a href="week4.pdf" content="application/pdf"><h3>Week 4&nbsp;&nbsp;</a></h3>
                                Optical Properties - Excitons, Spin, Energy Transfer<br />
				<br/>
				<a href="week7.pdf" content="application/pdf"><h3>Week 7&nbsp;&nbsp;</a></h3>
				Growth and Patterning<br/>
				<br/>
				<a href="week10.pdf" content="application/pdf"><h3>Week 10&nbsp;&nbsp;&nbsp;</a></h3>
				Light Emitters -<br/> 
				Outcoupling, Reliability<br/>
				
				<a href="week13.pdf" content="application/pdf"><h3>Week 13&nbsp;&nbsp;</a></h3>
				Light Detectors - Multijunction, Reliability, Modules<br/>
                        	</li>

	                 <li><a href="week2.pdf" content="application/pdf"><h3>Week 2&nbsp;&nbsp;</a></h3>
				Language, Structure, and Binding<br/>
				<br/>
				<br/>
                                <a href="week5.pdf" content="application/pdf"><h3>Week 5&nbsp;&nbsp;</a></h3>
                                Optical Properties - Exciton Diffusion<br />
				<br/>
				<br/>
				<a href="week8.pdf" content="application/pdf"><h3>Week 8&nbsp;&nbsp;</a></h3>
				Light Emitters- Basics, Fluorescence, Phosphorescence, TADF<br/>
				<a href="week11.pdf" content="application/pdf"><h3>Week 11&nbsp;&nbsp;</a></h3>
				Light Detectors - Basics, Photoconductors, Photodetectors<br/>
				<a href="week14.pdf" content="application/pdf"><h3>Week 14&nbsp;&nbsp;</a></h3>
				Thin Film Transistors - Architecture, Morphology, Reliability, Applications<br/>
                        	</li>

	                 <li><a href="week3.pdf" content="application/pdf"><h3>Week 3&nbsp;&nbsp;</a></h3>
				Optical Properties - Born-Oppenheimer, Franck-Condon, Fermi's Golden Rule, Transitions, Selection Rules
                                <a href="week6.pdf" content="application/pdf"><h3>Week 6&nbsp;&nbsp;</a></h3>
                                Electronic Properties - Conduction, Doping, Recombination, Heterojunctions<br />
				<a href="week9.pdf" content="application/pdf"><h3>Week 9&nbsp;&nbsp;</a></h3>
				Light Emitters - Roll-off, WOLEDS, Outcoupling<br/>
				<a href="week12.pdf" content="application/pdf"><h3>Week 12&nbsp;&nbsp;</a></h3>
				Light Detectors - Effeciency, Architecture, Transparency<br/>
				<a href="week15.pdf" content="application/pdf"><h3>Week 15&nbsp;&nbsp;</a></h3>
				Review<br/>
                        	</li>

		</ul>
 <p>&nbsp</p><br>
	<p align="center">Please feel free to downoad the notes, and use and distribute them as you wish. I only ask that you acknowledge their source.</p>
	<p align="center">If you have any questions or comments regaring this material, please fill out this <a href="../bookcontact.html">form</a>.</p>		
   	</div>
        
	<!-- end #content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
	<div id="footer">
		<p>&nbsp;</p>
        <p align="right"><a class="news-footer" href="../links.html"> Links</a> <font size="5"></p>
		<p align="right">Copyright (c) 2020 Stephen Forrest</p>
		<p align="right">All rights reserved. Design by <a class="news" href=  "http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
    <div id="endbox"></div>
    
<!-- end #footer -->
</body>
</html>
