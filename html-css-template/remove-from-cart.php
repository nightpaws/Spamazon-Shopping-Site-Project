<?php
  session_start();
  $item = $_GET["item"];
  $key = array_search($item, $_SESSION['spamazncart']);
  if ($key !== false) {
    //There was a bug where an item removed from the middle of the array
    //would corrupt the array, the following code swaps the item to be removed
    //into the last position, and the item in the last position into the original
    //items position.

    $lastPosition = (count($_SESSION['spamazncart'])-1);
    $temp = $_SESSION['spamazncart'][$key];
    $temp2 = $_SESSION['spamazncart'][$lastPosition];
    $_SESSION['spamazncart'][$key] = $temp2;
    $_SESSION['spamazncart'][$lastPosition] = $temp1;
    
    unset($_SESSION['spamazncart'][$lastPosition]);
    array_filter($_SESSION['spamazncart']);
    header('Location: cart-page.php');
  } else{
    echo "failed to remove item";
  }
?>
