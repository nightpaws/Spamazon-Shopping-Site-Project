<?php
  session_start();
  // get the product and initialise variables
  // $item = $_GET["item"];

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  $name = $_POST["item"];
  $colour = $_POST["colour"];
  $size = $_POST["size"];
  $quantity = $_POST["quantity"];

  $item = array('name' => $name,
                'colour' => $colour,
                'size' => $size,
                'quantity' => $quantity);

  //Check if the session has been created (user already has something in basket)
  if(!isset($_SESSION['spamazncart'])){
    $_SESSION['spamazncart'] = array();
  }
  /* check if the item is in the array, if it is, do not add
  this is to prevent the same item showing up multiple times in the basket
  and customers double clicking the add button to prevent it being added twice */
  array_push($_SESSION['spamazncart'], $item);

  echo "<pre>";
  print_r($_SESSION);
  echo "</pre>";
  header("Location: product-page.php?item=$name");

?>
