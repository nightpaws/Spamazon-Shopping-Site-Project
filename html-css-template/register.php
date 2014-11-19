<!DOCTYPE html>
<html>
<head>
	<?php  	include ('page-elements/head.php'); ?>
</head>
<body>
	<header>
		<?php include('page-elements/header.php'); ?>
	</header>
	<article id="reg">
		<h1 class="page-header">Registration</h1>
		<div class="reg">
			<form name="reg" action="#" method="post">
				<table>
					<tr>
						<td>
							<label for="email">Email:</label>
						</td>
						<td>
							<input type="text" name="email">
						</td>
					</tr>
					<tr>
						<td>
							<label for="password">Password:</label>
						</td>
						<td>
							<input type="password" name="Password">
						</td>
					</tr>
					<tr>
						<td>
							<label for="passwordC">Confirm Password:</label>
						</td>
						<td>
							<input type="password" name="PasswordC">
						</td>
					</tr>
				</table>
				<h2>Personal Details</h2>
				<table>
					<tr>
						<td>
							<label for="fname">First name:</label>
						</td>
						<td>
							<input type="text" name="fname">
						</td>
					</tr>
					<tr>
						<td>
							<label for="sname">Second name:</label>
						</td>
						<td>
							<input type="text" name="sname">
						</td>
					</tr>
				</table>
				<button type="submit" name="createacc">Create Account</button>
			</form>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>