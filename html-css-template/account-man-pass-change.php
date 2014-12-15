<?php
	//The land of variables
	$page_type = "account-man";
	$page_title = "Changing Your Password";	//What is displayed As the page title in the browser
	$page_description = "This page is for changing your password" //The page description
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
	<article id="account-man-pass-change" class="l-content">
		<form name="pass-change" action="databaseFunct/changePass.php" method="post" onsubmit="return newPassword()">
				<h2>Change Password</h2>
				<table>
					<tr>
						<td>
							<label id="current-pass" for="password">Current Password:</label>
						</td>
						<td>
							<input type="password" name="CurrentPassword">
						</td>
					</tr>
					<tr>
						<td>
							<label for="passwordNew">New Password:</label>
						</td>
						<td>
							<input type="password" name="PasswordNew">
						</td>
					</tr>
					<tr>
						<td>
							<label for="passwordNewC">Confirm New Password:</label>
						</td>
						<td>
							<input type="password" name="PasswordNewC">
						</td>
					</tr>
				</table>
				<button type="submit" name="pass-change">Change Password</button>
			</form>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
	<script type="text/javascript" src="./js/changeDetailsValidation.js"></script>
</body>
</html>
