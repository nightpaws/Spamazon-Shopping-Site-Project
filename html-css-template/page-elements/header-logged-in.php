<?php
$cookie_name = "spamaznauth";
$email = $_COOKIE[$cookie_name];
 ?>
<a href="#user-menu" title="Show navigation">Show navigation<span id="nav-icon user-icon"></a>
<a href="#" title="Hide navigation">Hide navigation<span class="nav-icon user-icon"></a>
<ul>
	<li>
		<a href="account-man.php"><?php echo $email ?></a>
		<ul>
			<li><a href='account-man.php'>Account Management</a></li>
			<li><a href="account-man.php#account-settings">Account Settings</a></li>
			<li><a href='index.php?logout=true'>Log Out</a></li>
		</ul>
	</li>
</ul>
