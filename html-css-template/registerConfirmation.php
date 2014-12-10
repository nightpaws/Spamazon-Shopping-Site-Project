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
  <body onLoad="setTimeout('delayedRedirect()', 3000)">

    <h1>
      Thank you for registering with Spamazon!
    </h1>
    <h2>
      You will be redirected to the home page in a few seconds
    </h2>
  <footer>
    <?php
include('page-elements/footer.php');
?>
  </footer>
  <script type="text/javascript" src="./js/loginValidation.js"></script>
</body>
</html>
