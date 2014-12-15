<?php

	session_start();
	include("databaseconnection.php");

	$email = $_COOKIE['spamaznauth'];
	$street = $_POST['street'];
	$town = $_POST['town'];
	$county = $_POST['county'];
	$postcode = $_POST['postcode'];
	$cardNo = $_POST['cardNumber'];
	$cardName = $_POST['nameOnCard'];
	$sortCode = $_POST['sortCode'];
	$securityNo = $_POST['securityCode'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$orderQuery = mysql_query("INSERT INTO `cs312_order`(`Id`, `cs312_useremail`, `date`, `street`, `town`, `county`, `postcode`) VALUES (NULL,'$email',CURDATE(),'$street','$town','$county','$postcode')");

	if(count($_SESSION['spamazncart'])>0){
		$itemName = array();
		$itemSize = array();
		$itemColour = array();
		$itemPrice = array();
		$itemImage = array();
		$basket = $_SESSION['spamazncart'];

		$maxID = mysql_query("SELECT MAX(Id) AS Id FROM `cs312_order` WHERE `cs312_useremail` = '$email'");
		$row = mysql_fetch_row($maxID);
		$id = $row[0];

		foreach ($basket as $item) {

			$name = $item["name"];
			$size = $item["size"];
			$colour = $item["colour"];
			$quantity = $item["quantity"];


				$result = mysql_query("INSERT INTO `cs312_orderItem`(`cs312_orderId`, `cs312_stockname`, `cs312_stocksize`, `cs312_stockcolour`, `quantityOrdered`) VALUES (
					$id,'$name','$size','$colour',$quantity)");

		}
	}

	header("Location: ../account-man.php");

?>
