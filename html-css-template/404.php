<?php
	//The land of variables
	$page_type = "error";
	$page_title = "404 - Page Lost in Space";	//What is displayed as the page title in the browser
	$page_description = "Page not found" //The page description
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
	<article id="error">
		<h1 id="code">404!</h1>
		<h1>Opps it seems this page doesn't exist, sorry about that!</h1>
		<h2>Possible reasons include:</h2>
		<ul>
			<li>A black hole sucked it up</li>
			<li>The aliens invaded, again</li>
			<li>We made a mistake</li>
			<li>The URL was typed wrongly</li>
		</ul>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>