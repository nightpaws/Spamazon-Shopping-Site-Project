<?php
//The land of variables
$page_type        = "account-man";
$page_title       = "Register"; //What is displayed As the page title in the browser
$page_description = "The registration page for Spamazon" //The page description
    ?>


<!DOCTYPE html>
<html>
<head>
	<?php
include('page-elements/head.php');
?>
</head>
<body>
	<header>
		<?php
include('page-elements/header.php');
?>
	</header>
	<article id="reg">
		<h1 class="page-header">Registration</h1>
		<div class="reg">
			<form name="reg" action="databaseFunct/regmember.php" method="post" onsubmit="return validateRegistration()">
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
							<label for="passwd">Password:</label>
						</td>
						<td>
							<input type="password" name="password">
						</td>
					</tr>
					<tr>
						<td>
							<label for="passwdC">Confirm Password:</label>
						</td>
						<td>
							<input type="password" name="passwordC">
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
							<label for="sname">Surname:</label>
						</td>
						<td>
							<input type="text" name="sname">
						</td>
					</tr>
					<tr>
						<td>
							<label for="dob">Date of Birth:</label>
						</td>
						<td>
							<input type="text" name="dob">
						</td>
					</tr>
				</table>
				<button type="submit" name="createacc">Create Account</button>
			</form>
		</div>
	</article>
	<footer>
		<?php
include('page-elements/footer.php');
?>
	</footer>
</body>
<script type="text/javascript" src="./js/registerValidation.js"></script>
</html>
