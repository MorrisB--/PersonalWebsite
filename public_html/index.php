<?php 
if(isset($_POST['submit'])){
    $to = "morris.ballenger@yahoo.com";
    $from = "morrizyo@server134.web-hosting.com";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_email = $_POST['email'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . "\n" . $user_email . "\n\nMessage:\n\n" . $_POST['message'];
    $human = $_POST['human'];
    
    $headers = "From:" . $from;/*
	if ($_POST ['submit'] && $human == '4') {
		mail ( $to, $subject, $message, $headers );
		echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
	}else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
    */
    if ($_POST['submit']) {
    	if (first_name != '' && $user_email != '' && last_name != '') {
    		if ($human == '4') {
		mail ( $to, $subject, $message, $headers );
    			echo '<p>Your message has been sent!</p>';
    			} else {
    				echo '<p>Something went wrong, go back and try again!</p>';
    			}
    		} else if ($_POST['submit'] && $human != '4') {
    			echo '<p>You answered the anti-spam question incorrectly!</p>';
    		}
    	} else {
    		echo '<p>You need to fill in all required fields!!</p>';
    	}
    }

?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- This is added so this page will not be indexed by search engines -->
		<meta name="robots" content="noindex, nofollow">

		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Morris Ballenger</title>
		<meta name="author" content="Morris Ballenger">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="shortcut icon" href="../public_ftp/favicon.ico">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="scripts/index.js"></script>

	</head>

	<body>

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Morris Ballenger</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li>
							<a href="#Hello">Hello</a>
						</li>
						<li>
							<a href="#Skills">Skills</a>
						</li>
						<li>
							<a href="#Projects">Projects</a>
						</li>
						<li>
							<a href="#Contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="Hello">
			<p>
				<span id="helloHello">&nbsp;Hello </span>
				<br />
				<span id="helloName">&nbsp;I go by <b>Morris</b>, </span>
				<br />
				<span id="helloTraits">&nbsp;I currently work as <i>Technical Support</i>
					<br />
					&nbsp;for <i>Themis Bar Review</i>
					<br />
					&nbsp;I like <span id="trait-1">Java</span><span id="trait-2">Pineapple Soda</span><span id="trait-3">Snowboarding</span><span id="trait-4">Apple Fritters</span><span id="trait-5">Mountain Biking</span>.
			</p>
		</div>

		<div id="Skills">

			<div class="title">
				<p>
					SKILLS
				</p>
			</div>
			<div id="skillsBrackets">
				<div>
					<img src="images/brackets.png" alt="Brackets" style="width:300px; height:300px;">
				</div>
				<div id="skillsBracketsText">
					<p>
						Languages</br>
						Java/Spring MVC, JavaScript/jQuery, SQL, HTML, CSS, C++
					</p>
				</div>
			</div>
			<div id="skillsSoftware">
				<div>
					<img src="images/lightBulb.png" alt="Brackets" style="width:300px; height:300px">
				</div>
				<div id="skillsSoftwareText">
					<p>
						Software</br>
						Eclipse, Git, Photoshop CS6, Dreamweaver CS6, Premier CS6
					</p>
				</div>
			</div>
			<div style="text-align:center; padding-top:550px; font-size:1.2em">
				<p><span style = "font-weight:bold; font-style:italic; text-shadow: -1px -1px 5px white;">In Progress:</span> PHP, MySQL, Design of Algorithms</p>
				<p><span style = "font-weight:bold; font-style:italic; text-shadow: -1px -1px 5px white;">Coming Soon:</span> C#, ASP.NET, Visual Basic and much more!</p>
			</div>
		</div>

		<div id="Projects" style="margin-bottom: 120px">
			<div class="title"><p>PROJECTS</p></div>
			<div style="text-align:center; padding-top: 20px; font-size:60px; font-weight:bold; padding-top:100px;">
				<a href="javascript:;" id="Java">Java</a>
				<a href="javascript:;" id="JavaScript" style="margin:100px">JavaScript</a>
				<a href="javascript:;" id="SQL">SQL</a>
			</div>
			<div id="JavaDiv" class="divProjects">
				<div style="width:50%; float:left; background-color:white;">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Figcaption placeholder div</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				</div>
				<div style="width:50%; float:right; background-color:white;">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Text placeholder div</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				</div>
				<!-- This is so the inner divs will both adjust the size of the outer div -->
				<div style="clear:both;"></div>
			</div>
			<div id="JavaScriptDiv" class="divProjects">
				<div style="width:50%; float:left; background-color:white;">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Figcaption placeholder div</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				</div>
				<div style="width:50%; float:right; background-color:white;">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Text placeholder div</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				</div>
				<!-- This is so the inner divs will both adjust the size of the outer div -->
				<div style="clear:both;"></div>
			</div>
			<div id="SQLDiv" class="divProjects">
				<div style="width:50%; float:left; background-color:white; margin-bottom:200px;/* padding-left:20%; padding-right:10%*/">
					<figure style="padding-right: 10%; float: right">
						<a href="https://github.com/MorrisB--/RentalsDatabase" target="_blank">
						<img id="rentalsDatabaseImg" src="images/rentalsDatabase.PNG" alt="ENTER ALT HERE" style="width:270px; height:480px; position: absolute;">
						<img id="rentalsDatabaseFadedImg" src="images/rentalsDatabaseFaded.png" alt="ENTER ALT HERE" style="width:270px; height:480px;">
						</a>
						<figcaption>SQL | Java</figcaption>
					</figure>
				</div>
				<div style="width:50%; float:right; background-color:white; padding:0% 10%;/* padding-right:20%; padding-left:10%; padding-top:10%*/">
				<h1>Rentals Database</h1><br />
					<p>This is a database that can handle rentals for multiple stores. It has various views for different needs. ADD MORE TEXT</p>
				</div>
				<!-- This is so the inner divs will both adjust the size of the outer div -->
				<div style="clear:both;"></div>
			</div>
		

		</div>





		<div class="title" style="margin-bottom:100px">
			<p>
				CONTACT
			</p>
		</div>
		<div style="width:50%; float: left">
		<p style="float:right; padding-right:10%">Feel free to follow me on GitHub!<br />
		<img src ="images/GitHubIcon.png" style="padding-right:10%;margin-top:100px;"/>
		</p>
		</div>
		
		<div id="Contact" style="width:50%; float:right">
			<form action="" method="post" style="padding-left: 10%">
			First Name: <input type="text" name="first_name"><br>
			Last Name: <input type="text" name="last_name"><br>
			Email: <input type="text" name="email"><br>
			Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
			What is 2+2: <input type="text" name="human"><br>
            
            <input id="submit" name="submit" type="submit" value="Submit" class="btn">
			</form> 
		</div>

	</body>
</html>
