<?php
$page_type = "cart";
$page_title = "Shopping Cart";	//What is displayed As the page title in the browser
$page_description = "Your Spamazon shopping cart"; //The page description
?>
<!DOCTYPE html>
<html>
<head>
  <?php  	include ('page-elements/head.php'); ?>
</head>
<body>
  <header>
    <?php include('page-elements/header.php'); ?>
  </header>
  <article id="cart-page" class="l-content container">
    <div class="group">
      <div class="cart-items col s8">
        <h3>Your cart is empty!</h3>
      </div>
    </div>
  </article>
  <footer>
    <?php include('page-elements/footer.php'); ?>
  </footer>
</body>
</html>
