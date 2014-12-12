<?php
	//The land of variables
	$page_type = "account-man";
	$page_title = "Your Account";	//What is displayed As the page title in the browser
	$page_description = "This page is for managing your account" //The page description
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
	<article id="account-man" class="container l-content">
		<div class="group orders">
			<h2>Manage Orders</h2>
			<div class="col s6 open-orders">
				<h3>Open Orders</h3>
				<?php include('databaseFunct/viewOpenOrders.php'); ?>
			</div>
			<div class="col s6 past-orders">
				<h3>Closed Orders</h3>
				<?php include('databaseFunct/viewClosedOrders.php'); ?>
			</div>			
		</div>
		<div class="group" id="account-settings">
			<h2>Account Settings</h2>
			<div class="col s6">
				<h3>Account Details</h3>
				<div class="details">
						<a href="account-man-email-change.php">Change email</a>
				</div>
				<div class="details">
						<a href="account-man-pass-change.php">Change password</a>
				</div>
				<div class="details">
						<a href="account-man-other-change.php">Change I don't know other stuff</a>
				</div>
			</div>
			<div class="col s6">
				<h3>Payment Details</h3>
				<?php include('databaseFunct/payment-methods.php') ?>
			</div>
		</div>
		<div class="group danger-zone">
			<h2>Danger Zone</h2>
			<p>The actions in this section are dangerous and can not be undone. If you close your account or delete the interwebs by accident, support can not help you. Please only perform these actions if you are sure you know what you are doing!</p>
			<div id="acc-close">
				<a href="close-account.php" class="a-button">Close account.</a>
			</div>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>