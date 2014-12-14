<?php
	session_start();
	$itemNameToRemove = $_GET["item"];
	$basket = $_SESSION['spamazncart'];

	$found = false;
	foreach ($basket as $item) {

			$name = $item["name"];

			if($name === $itemNameToRemove){

				$key = key($basket);
				$found = true;
				break;
			}

	}

	if (!$found) {
		header('Location: cart-page.php?failed=true');
	}

	// array_push($_SESSION['spamazncart'], $item);
	unset($_SESSION["spamazncart"][$key]);

	header('Location: cart-page.php');

?>
