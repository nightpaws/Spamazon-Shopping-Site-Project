<?php
//The land of variables
$page_type        = "account-man";
$page_title       = "Register Failed"; //What is displayed As the page title in the browser
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
  <body onLoad="setTimeout('registerRedirect()', 3000)">

    <h1>
      We're Sorry!
    </h1>
    <h2>
      The email you're trying to register is already in use.
    </h2>
  <footer>
    <?php
include('page-elements/footer.php');
?>
  </footer>
    <script type="text/javascript" src="./js/loginValidation.js"></script>
</body>
</html>
