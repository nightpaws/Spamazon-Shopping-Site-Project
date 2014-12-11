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
							<input type="text" name="email" placeholder="Email" >
						</td>
					</tr>
					<tr>
						<td>
							<label for="passwd">Password:</label>
						</td>
						<td>
							<input type="password" name="password" placeholder="********">
						</td>
					</tr>
					<tr>
						<td>
							<label for="passwdC">Confirm Password:</label>
						</td>
						<td>
							<input type="password" name="passwordC" placeholder="********">
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
							<input type="text" name="fname" placeholder="e.g. John">
						</td>
					</tr>
					<tr>
						<td>
							<label for="sname">Surname:</label>
						</td>
						<td>
							<input type="text" name="sname" placeholder="e.g. Smith">
						</td>
					</tr>
					<tr>
						<td>
							<label for="dob">Date of Birth:</label>
						</td>
						<td>
							<input type="text" name="dob" placeholder="e.g. 23-06-1984">
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
  <script type="text/javascript" src="./js/registerValidation.js"></script>
</body>
</html>
