<?php
	//The land of variables
	$page_type = "info";
	$page_title = "About Us";	//What is displayed As the page title in the browser
	$page_description = "All about Spamazon the home of highish quality clothing" //The page description
?>


<!DOCTYPE html>
<html>
<head>
	<?php  	include ('page-elements/head.php'); ?>
</head>
<body>
	<header>
		<?php include('page-elements/header.php'); ?>
	</header>
	<article id="about-us" class="content">
		<h1 class="page-header">About Us</h1>
		<div id="about">
			<p>
				Spamazon was created as a project for the class CS312 - Web Application Development at the
				University of Strathclyde, more information about the class can be found <a href="http://www.strath.ac.uk/cis/localteaching/localug/cs312/">here</a>.

				The aim of the assignment is gain experience in the following technologies: HTML, CSS, JavaScript, AJAX, PHP and SQL. We are allowed to use other technologies to achieve the goal but must include those mentioned above.

				We had the choice of the following projects:
			</p>
			<ul>
				<li>1 : An online ordering facility for clothing with (at least) ten garment types, each in three sizes, stock control and pseudo payment feature.</li>
				<li>2 : An online seat booking facility for an airline with a range of two daily national flights in each of two routes, two aircraft types, i.e., different passenger capacities, and a booking window of one calendar month.</li>
				<li>3 : An online system for designing, delivering and recording the answers to questionnaires allowing users to define their own questions, answers, page appearance options, etc.</li>
			</ul>
			<h3>
				We chose to work on number one and hence Spamazon was born.
			<h3>
		</div>
		<div id="people">
			<h2 class="page-subheader">The People</h2>
			<p>The people involved in creating <a href="index.php">Spamazon</a> are:</p>
			<ul>
				<li>
					<h3>Thomas Maxwell</h3>
					<p>Oversaw the front end design and development of Spamazon.</p>
					<ul>
						<li><a class="website" href="http://tom-maxwell.com">tom-maxwell.com</a></li>
						<li><a class="email" href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#101;&#108;&#108;&#111;&#64;&#116;&#111;&#109;&#45;&#109;&#97;&#120;&#119;&#101;&#108;&#108;&#46;&#99;&#111;&#109;'>&#77;&#97;&#105;&#108;&#32;&#77;&#101;</a></li>
						<li><a class="twitter" href="https://twitter.com/confuddledpengu">@confuddledpengu</a></li>
						<li><a class="github" href="https://github.com/ConfuddledPenguin">GitHub: ConfuddledPenguin</a></li>
						<li><a class="linkedin" href="https://www.linkedin.com/pub/thomas-maxwell/83/a43/709">LinkedIn</a></li>
					</ul>
				</li>
				<li>
					<h3>Craig Morrison</h3>
					<p>Constructed the database, documentation and queries. </br>
					Built the code behind several pages, lots of server side validation.</br>
					Session management &amp; account termination. Also designed the site logo.</p>
					<ul>
						<li><a class="website" href="http://nightpaws.eu">nightpaws.eu</a></li>
						<li><a class="email" href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#97;&#100;&#109;&#105;&#110;&#64;&#110;&#105;&#103;&#104;&#116;&#112;&#97;&#119;&#115;&#46;&#101;&#117;'>&#77;&#97;&#105;&#108;&#32;&#77;&#101;</a></li>
						<li><a class="twitter" href="https://twitter.com/nightpaws">@nightpaws</a></li>
						<li><a class="github" href="https://github.com/nightpaws">GitHub: Nightpaws</a></li>
						<li><a class="linkedin" href="https://www.linkedin.com/in/craigmorrison1">LinkedIn</a></li>
					</ul>
				</li>
				<li>
					<h3>Stewart Key</h3>
					<p>User input validation, user login(cookies/server validation), and changing email/password. </br>
					 	 Initial basket system and linking with product page through session storage</p>
					<ul>
						<li><a class="github" href="https://github.com/Epailes">GitHub: Epailes</a></li>
						<li><a class="linkedin" href="uk.linkedin.com/pub/stewart-key/a5/3a2/751">LinkedIn</a></li>
					</ul>

				</li>
				<li>
					<h3>Aidan O'Grady</h3>
					<p>Oversaw the PHP for Product Pages, Searching and Checkout Systems.</br></p>
					<ul>
						<li><a class="email" href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#119;&#108;&#98;&#49;&#50;&#49;&#53;&#51;&#64;&#117;&#110;&#105;&#46;&#115;&#116;&#114;&#97;&#116;&#104;&#46;&#97;&#99;&#46;&#117;&#107;'>&#77;&#97;&#105;&#108;&#32;&#77;&#101;</a></li>
						<li><a class="github" href="https://github.com/ANuclearError">GitHub: ANuclearError</a></li>
					</ul>
				</li>
				<li>
					<h3>Chloe Forsyth</h3>
					<p>Helped to find some bugs/errors, wrote the report, helped with the database and ERD. </br>
					Also helped to prioritise tasks and organise who was working on what. </br>
					Programming was never a strong point for me but documentation and testing is.</p>
					<ul>
						<li><a class="github" href="https://github.com/pyrobunny">GitHub: pyrobunny</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="contact">
			<h2 class="page-subheader">Contact Us</h2>
			<p>
				Want to get in touch? Well unfortunately as this is a magical fictional website
				that is not actually possible. There is quite simply no one home to respond.
			</p>
			<p>
				Still want to get in touch? Try the email addresses which can be found <a href="about.php#people">here</a>
			</p>
		</div>
		<div id="press">
			<h2 class="page-subheader">Press</h2>
			<p>
				What did we sell to make you want to talk to us? Oh well since this is a magical
				fictional website there is no press department, those people expect to be paid and we don't actually make any money. So there is quite simply no one home to respond.
				<br/>
				But hey this section makes us look professional at least!
			</p>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>
