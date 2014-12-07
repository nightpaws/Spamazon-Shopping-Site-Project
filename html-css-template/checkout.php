<?php
	//The land of variables
	$page_type = "checkout";
	$page_title = "Checkout";	//What is displayed as the page title in the browser
	$page_description = "Checkout" //The page description
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
	<article>
		<?php include('page-elements/checkout/address.php') ?>
		<?php include('page-elements/checkout/card.php') ?>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>