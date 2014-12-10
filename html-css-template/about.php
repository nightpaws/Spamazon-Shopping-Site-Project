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
						<li><a class="email"> Email Address Goes Here<?php //hello@tom-maxwell.com ?></a></li>
						<li><a class="twitter" href="https://twitter.com/confuddledpengu">@confuddledpengu</a></li>
						<li><a class="github" href="https://github.com/ConfuddledPenguin">GitHub: ConfuddledPenguin</a></li>
						<?php //can do linkedin with the class of linkedin ?>
					</ul>
				</li>
				<li>
					<h3>Craig Morrison</h3>
					<p>Constructed the database, documentation and queries. </br>
					Also built the code behind several pages, lots of server side validation.</br>
					Designed the site logo.</p>
					<ul>
						<li><a class="website" href="http://nightpaws.eu">nightpaws.eu</a></li>
						<li><a class="email"> Email Address Goes Here <?php //admin@nightpaws.eu ?></a></li>
						<li><a class="twitter" href="https://twitter.com/nightpaws">@nightpaws</a></li>
						<li><a class="github" href="https://github.com/nightpaws">GitHub: Nightpaws</a></li>
						<li><a class="linkedin" href="https://www.linkedin.com/in/craigmorrison1">LinkedIn</a></li>
					</ul>
				</li>
				<li>
					<h3>Stewart Key</h3>
					<p>Done fuck all so far.</p>
					<ul>
						<li><a class="github" href="https://github.com/Epailes">GitHub: Epailes</a></li>
					</ul>
					
				</li>
				<li>
					<h3>Aidan O'Grady</h3>
					<p>Oversaw the PHP for Product Pages, Searching and Checkout Systems.</br></p>
					<ul>
						<li><a class="github" href="https://github.com/ANuclearError">GitHub: ANuclearError</a></li>
					</ul>
				</li>
				<li>
					<h3>Chloe Forsyth</h3>
					<p>Done fuck all so far.</p>
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
