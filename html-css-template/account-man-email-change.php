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
		<form name="email-change" action="#" method="post">
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
				<button type="submit" name="changeemail">Change Email</button>
			</form>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>