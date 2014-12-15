<?php
	include("databaseconnection.php");
	$email = $_COOKIE['spamaznauth'];
	$endCard = 0;

	$result = mysql_query("SELECT * FROM cs312_payment WHERE cs312_useremail = '$email'");
	if(!$result){
		echo "No cards";
	} else{
		echo '<select name="card">';
		while($row = mysql_fetch_array($result)){
			$endOfCard = substr($row["cardNo"], 12);
			echo "<option value='$endOfCard'>Card ending in $endOfCard</option>";
		}
		echo '</select>';
	}
	
?>