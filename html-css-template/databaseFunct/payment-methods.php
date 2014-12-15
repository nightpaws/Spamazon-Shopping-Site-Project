<?php

	include('databaseconnection.php');

	$email = $_COOKIE[$cookie_name];

	$result = mysql_query("
					SELECT *
					FROM cs312_payment
					WHERE cs312_useremail = '$email';			
						");

	if(mysql_num_rows($result) == 0):?>

		<div class="details">
			<p>You don't have any stored payment information</p>
		</div>
	
	<?php else:

		while ($row = mysql_fetch_array($result)):

			$endOfCard = substr($row["cardNo"], 12);

			?>

			<div class="details">
				<?php echo "<a href=\"databaseFunct/remove-card.php?card=$endOfCard\">Remove card ending in $endOfCard</a>"; ?>
			</div>

<?php	endwhile;
		endif;
?>