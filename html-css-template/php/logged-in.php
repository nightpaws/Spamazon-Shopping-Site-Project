<?php

$cookie_name = "spamaznauth"; //to be added

if(!isset($_COOKIE[$cookie_name])) {
    
    header("Location: login.php");
	die();
}

?>