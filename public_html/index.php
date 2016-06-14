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
    $headers = "From:" . $from;
    
    if ($_POST['submit']) {
    	if (first_name != '' && $user_email != '' && last_name != '') {
    		if ($human == '4') {
		mail ( $to, $subject, $message, $headers );
    			echo "<script>
    					alert('Your message has been sent!');
    					</script>";
    			} else {
    				echo "<script>
    						alert('Something went wrong, go back and try again!');
    						</script>";
    			}
    		} else if ($_POST['submit'] && $human != '4') {
    			echo "<script>
    					alert('You answered the anti-spam question incorrectly!');
    					</script>";
    		}
    	} else {
    		echo "<script>
    				alert('You need to fill in all required fields!');
    				</script>";
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
<link rel="stylesheet"
	href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script
	src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="jquery.hexagonprogress.js"></script>
<script src="scripts/index.js"></script>
<script src="scripts/jquery.hexagonprogress.js"></script>


</head>

<body>

	<nav class="navbar navbar-default"
		style="position: fixed; top: 0; width: 100%;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Morris Ballenger</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#Hello">Hello</a></li>
					<li><a href="#Skills">Skills</a></li>
					<li><a href="#Projects">Projects</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">

		<!-- Hello -->

		<div class="row" id="Hello">
			<div class="col-lg-9 col-md-10 col-sm-11 col-xs-12 hello-col">
				<h1>
					<span id="helloHello">&nbsp;Hello&nbsp;</span>
				</h1>
				<div id="hello-desktop">
					<p>
						<span id="helloName">&nbsp;I go by <b>Morris</b>,
						</span> <br /> <span id="helloTraits">&nbsp;I currently work as <i>Technical
								Support</i> <br /> &nbsp;for <i>Themis Bar Review</i> <br />
							&nbsp;I like <span id="trait-1">Java</span><span id="trait-2">Pineapple
								Soda</span><span id="trait-3">Snowboarding</span><span id="trait-4">Apple
								Fritters</span><span id="trait-5">Mountain Biking</span>.
						</span>
					</p>
				</div>
				<div id="hello-mobile">
					<p>
						<span id="helloName">&nbsp;I go by <b>Morris</b>,
						</span> <br /> <span id="helloTraits">&nbsp;I currently work
							as&nbsp;<br> <i>&nbsp;Technical Support&nbsp;</i> <br />
							&nbsp;for <i>Themis Bar Review</i> <br /> &nbsp;I like <span
							id="trait-mobile-1">Java</span><span id="trait-mobile-2">Pineapple
								Soda</span><span id="trait-mobile-3">Snowboarding</span><span
							id="trait-mobile-4">Apple Fritters</span><span
							id="trait-mobile-5">Mountain Biking</span>.
						</span>
					</p>
				</div>
			</div>
		</div>

		<!-- Skills -->

		<div id="Skills">

			<div class="row">
				<div class="title">
					<p>SKILLS</p>
				</div>
			</div>

			<div class="row">
				<div class="favorites">
					<div>
						<h1>&nbsp;My favorites:&nbsp;</h1>
					</div>
					<div id="javaProgress">
						<p>Java</p>
					</div>
					<div id="sqlProgress">
						<p>SQL</p>
					</div>
					<div id="jsProgress">
						<p>JavaScript/jQuery</p>
					</div>
					<br style="clear: left;" />
				</div>
			</div>

			<div class="skills-brackets">
				<div>
					<img src="images/brackets.png" alt="Brackets">
				</div>
				<div class="skills-brackets-text">
					<p>
						<b>Languages</b><br> Java/JDBC, JavaScript/jQuery, SQL, HTML,
						CSS/Bootstrap
					</p>
				</div>
			</div>
			<div class="skills-software">
				<div>
					<img src="images/lightBulb.png" alt="Light Bulb">
				</div>
				<div class="skills-software-text">
					<p>
						<b>Software</b><br> Eclipse, Git, MySQL Workbench, Photoshop
						CS6
					</p>
				</div>
			</div>

			<div class="coming-soon">
				<p>
					<span>In Progress:</span> PHP, Algorithms, AngularJS, C#, Unity 3D,
					MonoDevelop
				</p>
				<p>
					<span>Coming Soon:</span> ASP.NET, Visual Basic, XML, and much
					more!
				</p>
			</div>
		</div>

		<!--  Projects -->

		<div id="Projects" class="row">

			<div class=row>
				<div class="title">
					<p>PROJECTS</p>
				</div>
			</div>

			<div class="row projects-header">
				<a href="javascript:;" id="Java">&nbsp;Java&nbsp;</a> <a
					href="javascript:;" id="JavaScript">&nbsp;JavaScript&nbsp;</a> <a
					href="javascript:;" id="SQL">&nbsp;SQL&nbsp;</a>
			</div>

			<div id="JavaDiv" class="row divProjects">
				<div class="projects-text-small">
					<h1>
						<span>&nbsp;Collections Framework&nbsp;</span>
					</h1>
				</div>
				<div
					class="projects-image col-xl-7 col-xl-offset-0 col-lg-7 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
					<figure>
						<a href="https://github.com/MorrisB--/Collections" target="_blank">
							<img src="images/collections.PNG" class="img-responsive"
							alt="ENTER ALT HERE">
						</a>
						<figcaption>Java</figcaption>
					</figure>
				</div>
				<div class="projects-text col-xl-5 col-lg-5 col-md-12 col-sm-12">
					<h1>
						<span>&nbsp;Collections Framework&nbsp;</span>
					</h1>
					<br />
					<p>This is my implementation of the Java Collections Framework.
						This framework contains a Linked List, Stack, Queue, Binary Search
						Tree, and Hash Table data structures.</p>
				</div>
			</div>

			<div id="JavaScriptDiv" class="row divProjects">
				<div class="projects-text-small">
					<h1>
						<span>&nbsp;Game of Life&nbsp;</span>
					</h1>
				</div>
				<div
					class="projects-image col-xl-7 col-xl-offset-0 col-lg-7 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
					<figure>
						<a href="https://github.com/MorrisB--/GameOfLife" target="_blank">
							<img src="images/gameOfLife.PNG" class="img-responsive"
							alt="ENTER ALT HERE">
						</a>
						<figcaption>JavaScript</figcaption>
					</figure>
				</div>
				<div class="projects-text col-xl-5 col-lg-5 col-md-12 col-sm-12">
					<h1>
						<span>&nbsp;Game of Life&nbsp;</span>
					</h1>
					<br />
					<p>This is my implementation of Conway's Game of Life. It is a
						game of cellular automaton where its evolution is determined by
						its initial state.</p>
				</div>
			</div>

			<div id="SQLDiv" class="row divProjects">
				<div class="projects-text-small">
					<h1>
						<span>&nbsp;Rentals Database&nbsp;</span>
					</h1>
				</div>
				<div
					class="projects-image col-xl-7 col-xl-offset-0 col-lg-7 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
					<figure>
						<a href="https://github.com/MorrisB--/RentalsDatabase"
							target="_blank"> <img src="images/rentalsDatabase.PNG"
							class="img-responsive" alt="ENTER ALT HERE">
						</a>
						<figcaption>SQL | Java</figcaption>
					</figure>
				</div>
				<div class="projects-text col-xl-5 col-lg-5 col-md-12 col-sm-12">
					<h1>
						<span>&nbsp;Rentals Database&nbsp;</span>
					</h1>
					<br />
					<p>This is a database that can handle rentals for multiple
						stores. SQL is used to manipulate the tables and provide
						information, while Java is used to provide the user interface.</p>
				</div>
			</div>

		</div>

		<!-- Contact -->

		<div id="Contact" class="row">

			<div class="title row" style="margin-bottom: 100px">
				<p>CONTACT</p>
			</div>

			<div class="row contact-content">
				<div class="contact-text col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<p>
						<span>&nbsp;Chicago, IL 60647&nbsp;</span><br /> <br /> I
						currently live in Chicago and am interested in opportunities in
						the Chicagoland area until I graduate. If you are interested in
						working with me please fill out the form and I will get back to
						you as soon as possible. Also feel free to follow me on GitHub!<br />
					</p>
					<div style="width: 120px; margin: 0 auto 20px;">
						<a href="https://github.com/MorrisB--" target="_blank"><img
							src="images/GitHubIcon.png" class="gitHubImage" /></a>
					</div>
				</div>

				<div class="contact-form col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="contact-form-form">
						<form action="" method="post">
							<input type="text" name="first_name" placeholder="First Name"><br>
							<input type="text" name="last_name" placeholder="Last Name"><br>
							<input type="text" name="email" placeholder="Email"><br>
							<textarea rows="5" name="message" cols="30" placeholder="Message"></textarea>
							<br> What is 2+2? <br /> <input type="text" name="human"><br>

							<input id="submit" name="submit" type="submit" value="Submit"
								class="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
