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
<meta http-equiv="refresh" content="3; url=account-man-pass-change.php" />
</head>
<body>
  <header>
    <?php
include('page-elements/header.php');
?>
  </header>
  <body>

    <h1>
      Your current password was not entered correctly
    </h1>
    <h2>
      You will be redirected to password change page in a few seconds
    </h2>
  <footer>
    <?php
include('page-elements/footer.php');
?>
  </footer>

</body>
</html>
