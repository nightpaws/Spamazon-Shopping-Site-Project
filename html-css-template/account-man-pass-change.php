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
		<form name="pass-change" action="#" method="post">
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
				<button type="submit" name="changepass">Change Password</button>
			</form>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>