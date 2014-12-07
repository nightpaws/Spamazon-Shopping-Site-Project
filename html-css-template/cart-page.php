<?php
	//The land of variables
	$page_type = "cart";
	$page_title = "Your shopping cart";	//What is displayed As the page title in the browser
	$page_description = "Your Spamazon shopping cart" //The page description
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
	<article id="cart-page" class="l-content container">
		<div class="group">
			<div class="cart-items col s8">
				<h3>The following items are in your cart:</h3>
				<div class="cart-item">
					<?php include('page-elements/product/product-picked-medium.php'); ?>
				</div>
				<div class="cart-item">
					<?php include('page-elements/product/product-picked-medium.php'); ?>
				</div>
				<div class="cart-item">
					<?php include('page-elements/product/product-picked-medium.php'); ?>
				</div>
				<div class="cart-item">
					<?php include('page-elements/product/product-picked-medium.php'); ?>
				</div>
				<div class="cart-item">
					<?php include('page-elements/product/product-picked-medium.php'); ?>
				</div>
			</div>
			<div class="to-checkout col s4">
					<a href="checkout.php" class="a-button">Checkout</a>
			</div>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>