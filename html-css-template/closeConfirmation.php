<?php
//The land of variables
$page_type        = "account-man";
$page_title       = "Close Account"; //What is displayed As the page title in the browser
$page_description = "Sorry you left us." //The page description
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
      Delete Completed.
    </h1>
    <h2>
      <p>Your account and all transactions have been deleted.</br></br></p>
	  <p>If you had made any orders, they're gone now and there's nothing anyone can do to get them back.</br></br></br></p>
	  <p>Sorry :( </br></br></br>Click <a href="http://www.google.com">here</a> to return to Google. or <a href="index.php">here</a> to return to the homepage.</br></br></p>
	  <p>Thanks for using Spamazon</p>
    </h2>
  <footer>
    <?php
include('page-elements/footer.php');
?>
  </footer>
  <script type="text/javascript" src="./js/loginValidation.js"></script>
</body>
</html>
