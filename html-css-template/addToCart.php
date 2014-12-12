<?php
  session_start();
  // get the product and initialise variables
  $item = $_GET["item"];
  //Check if the session has been created (user already has something in basket)
  if(!isset($_SESSION['spamazncart'])){
    $_SESSION['spamazncart'] = array();
  }
  /* check if the item is in the array, if it is, do not add
  this is to prevent the same item showing up multiple times in the basket
  and customers double clicking the add button to prevent it being addded twice */
  array_push($_SESSION['spamazncart'], $item);
  $newItem = str_replace(" ","+",$item);
  header('Location: product-page.php?item=' . $newItem);

?>
