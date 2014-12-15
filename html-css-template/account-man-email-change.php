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
		<form name="email-change" action="databaseFunct/changeEmail.php" method="post" onsubmit="return newEmail()">
				<h2>Change Email</h2>
				<table>
					<tr>
						<td>
							<label for="emailNew">New Email Address:</label>
						</td>
						<td>
							<input type="text" name="emailNew">
						</td>
					</tr>
					<tr>
						<td>
							<label for="emailNewC">Confirm New Address:</label>
						</td>
						<td>
							<input type="text" name="emailNewC">
						</td>
					</tr>
				</table>
				<button type="submit" name="email-change">Change Email</button>
			</form>
	</article>
	<footer>
	</footer>
	<script type="text/javascript" src="./js/changeDetailsValidation.js"></script>
</body>
</html>
