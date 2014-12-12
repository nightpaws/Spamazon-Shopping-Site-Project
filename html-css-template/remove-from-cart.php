<?php
  session_start();
  $item = $_GET["item"];
  if (($key = array_search($item, $_SESSION['spamazncart'])) !== false) {
    unset($$_SESSION['spamazncart'][$key]);
  }

  header('Location: cart-page.php');

?>
