<?php

	$returnToAcc = false;
	if(isset($_GET["acc"])){

		$returnToAcc = $_GET["acc"];

		if($returnToAcc === "true"){
			$returnToAcc = true;
		}
	}

	include("databaseconnection.php");

	$email = $_COOKIE['spamaznauth'];
	$cardNo = $_POST['cardNumber'];
	$cardName = $_POST['nameOnCard'];
	$sortCode = $_POST['sortCode'];
	$securityNo = $_POST['securityCode'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$cardQuery = mysql_query("INSERT INTO `cs312_payment`(`cs312_useremail`, `cardNo`, `cardName`, `sortcode`, `securityNo`, `expiryMonth`, `expiryYear`) VALUES ('$email',$cardNo,'$cardName',$sortCode,$securityNo,$month,$year)");

	if($returnToAcc){
		header("location: ../account-man.php");
	}else{
		header("Location: ../checkout.php");
	}

?>
