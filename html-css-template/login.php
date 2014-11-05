<!DOCTYPE html>
<html>
<head>
	<?php  	include ('head.php'); ?>
</head>
<body>
	<header>
		<?php include('header.php'); ?>
	</header>
	<article id="log-in">
		<div class="log-in">
			<form name="login" action="#" method="get">
				<div><label for="username">Username:</label><input type="text" name="username"></div>
				<div><label for="password">Password:</label><input id ="password-box" type="password" name="password"></div>
				<div><button type="submit" name="login">Log in</button></div>
			</form>
			<p>Not a member?</p>
			<a class="a-button" href="register.php"><span>Join Us!</span></a>
		</div>
	</article>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>