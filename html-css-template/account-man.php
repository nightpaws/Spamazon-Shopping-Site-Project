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
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
			</div>
			<div class="col s6 past-orders">
				<h3>Closed Orders</h3>
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
				<div class="order">
					<p>
						<a href="view-order.php">Product Name</a>
						<span> 11/11/2011 </span>
					</p>
				</div>
			</div>			
		</div>
		<div class="group" id="account-settings">
			<h2>Account Settings</h2>
			<div class="col s4">
				<h3>Account Details</h3>
				<div class="details">
						<a href="account-man-email-change.php">Change email</a>
				</div>
				<div class="details">
						<a href="account-man-pass-change.php">Change password</a>
				</div>
				<div class="details">
						<a href="order-page.php">Change I don't know other stuff</a>
				</div>
			</div>
			<div class="col s4">
				<h3>Payment Details</h3>
				<div class="details">
					<a href="order-page.php">Modify card ending in 4672</a>
				</div>
				<div class="details">
					<a href="order-page.php">Modify card ending in 4675</a>
				</div>
			</div>
			<div class="col s4">
				<h3>Address Details</h3>
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