<?php
	session_start();
	include ('databaseFunct/databaseconnection.php');
	$page_type = "cart";
	$page_title = "Shopping Cart";	//What is displayed As the page title in the browser
	$page_description = "Your Spamazon shopping cart"; //The page description
	$cookie_name = "spamazncart";

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
						<?php include('databaseFunct/buildcart.php');?>
				</div>
				<div class="to-checkout col s4">
					<h3>Your total is</h3>
					<?php 

						if(isset($basketTotalPrice)){
							echo "<h4>£$basketTotalPrice</h4>";
						}else{
							echo "<h4>£0.00</h4>";
						} ?>
					<a href="checkout.php" class="a-button">Checkout</a>
				</div>
			</div>
		</article>
<footer>
	<?php include('page-elements/footer.php'); ?>
</footer>
</body>
</html>
