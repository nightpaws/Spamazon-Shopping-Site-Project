<?php
	//The land of variables
	$page_type = "account-man";
	$page_title = "Close your account";	//What is displayed as the page title in the browser
	$page_description = "While we are sorry to see you go, we don't understand, please don't leave us!" //The page description
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
	<article id="account-man-close" class="l-content">
		<h2>Account Closure</h2>
		<p>Hey! We will be sad to see you go, please stay . . .</p>
		<p>
			This action can not be undone. By closing your account, your account will be gone
			for the rest of time. It can not be reopened!
		</p>
		<form action="#">
			<button type="submit" name="closeacc">Close Account</button>
		</form>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>