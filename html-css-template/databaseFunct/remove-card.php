<?php

	if(!isset($_GET["card"])){
	}

	$card = $_GET["card"];

	include('databaseconnection.php');

	$email = $_COOKIE["spamaznauth"];

	$result = mysql_query("
					SELECT *
					FROM cs312_payment
					WHERE cs312_useremail = '$email';			
						");

	if(mysql_num_rows($result) == 0){
		//fail
	}else{

		while ($row = mysql_fetch_array($result)){

			$cardNo = $row["cardNo"];

			$endOfCard = substr($cardNo, 12);

			if($endOfCard === $card){

				mysql_query("
						DELETE
						FROM cs312_payment
						WHERE cs312_useremail = '$email' AND cardNo = '$cardNo';
							");
			}
		}
	}

	header("Location: ../account-man.php");

?>