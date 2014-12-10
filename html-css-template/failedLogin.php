<?php
//The land of variables
$page_type        = "account-man";
$page_title       = "Failed Login"; //What is displayed As the page title in the browser
$page_description = "The login page for Spamazon" //The page description
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
  <body onLoad="setTimeout('loginRedirect()', 3000)">

    <h1>
      The username/password combination you entered was incorrect
    </h1>
    <h2>
      You will be redirected to the login page in a few seconds
    </h2>
  <footer>
    <?php
include('page-elements/footer.php');
?>
  </footer>
  <script type="text/javascript" src="./js/loginValidation.js"></script>
</body>
</html>
