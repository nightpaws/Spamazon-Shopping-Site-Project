<?php
	//The land of variables
	$page_type = "account-man";
	$page_title = "Changing Your E-mail Address";	//What is displayed As the page title in the browser
	$page_description = "This page is for changing your email address" //The page description
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
	<article id="account-man-email-change" class="l-content">
		<h2>Did you really think this would be a page?</h2>
		<h3>Well aren't you silly!!</h3>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>