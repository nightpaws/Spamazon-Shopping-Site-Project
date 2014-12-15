<?php
	session_start();
	if(!isset($_SESSION['spamazncart']) || count($_SESSION['spamazncart']) == 0){
		header("Location: index.php");
		die();
	} else{
		
?>

<?php
	//Check if the user is logged in
	@include('php/logged-in.php');
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
	<h1 class="page-header">Order Details</h1>
		<div class="reg">
			<form name="order" action="databaseFunct/purchase.php" method="post">
				<h2 class="page-header">Address Details</h1>
				<?php include('page-elements/checkout/address.php') ?>
				<h2 class="page-header">Card Details | <a href="addCard.php">Add New Card </a></h1>
					<?php include('databaseFunct/getCards.php'); ?>
				<button type="submit" name="order">Place Order</button>
			</form>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
	  <script type="text/javascript" src="./js/checkoutValidation.js"></script>
</body>
</html>

<?php } ?>