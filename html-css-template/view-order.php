<?php
	//The land of variables
	$page_type = "order";
	$page_title = "Your Order";	//What is displayed As the page title in the browser
	$page_description = "This order was placed on 11/11/2011" //The page description
?>

<?php
	//Check if the user is logged in
	@include('php/logged-in.php');
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
	<article id="view-order" class="l-content">
		<div id="ordered-on">
			<h3>Ordered on 11/11/2011</h3>
		</div>
		<div id="product">
			<?php @include('page-elements/product/product-large.php'); ?>
		</div>
		<div id="address">
			<h3>Delivery address</h3>
			<p>Their address here in all its shittyness</p>
		</div>
		<div id="payment">
			<h3>Payment</h3>
			<p>Payment successfully payed on the 11/11/2011, from the card ending in 4672.</p>
			<p>You can view payment details in <a href="account-man.php">account management</a>.</p>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>