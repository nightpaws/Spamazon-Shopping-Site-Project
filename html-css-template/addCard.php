<?php
	//Check if the user is logged in
	@include('php/logged-in.php');
	//The land of variables
		$page_type = "card";
		$page_title = "Add Card";	//What is displayed as the page title in the browser
		$page_description = "Entering a new payment method."; //The page description


	$returnToAcc = "false";
	if(isset($_GET["acc"])){

		$returnToAcc = $_GET["acc"];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php  	include ('page-elements/head.php'); ?>
</head>
<body>
	<header>
		<?php include('page-elements/header.php'); ?>
	</header>
	<article>
	<h1 class="page-header">Add Card</h1>
		<div class="reg">
			<?php echo "<form name=\"card\" action=\"databaseFunct/addCard.php?acc=$returnToAcc\" method=\"post\" onsubmit=\"return checkoutValidation()\">";?>
				<table>
					<tr>
						<td>
							<label for="cardNumber">Card Number:</label>
						</td>
						<td>
							<input type="text" name="cardNumber" maxlength="16">
						</td>
					</tr>
					<tr>
						<td>
							<label for="nameOnCard">Name on Card:</label>
						</td>
						<td>
							<input type="text" name="nameOnCard">
						</td>
					</tr>
					<tr>
						<td>
							<label for="securityCode">Security Code:</label>
						</td>
						<td>
							<input type="text" name="securityCode" maxlength="3">
						</td>
					</tr>
					<tr>
						<td>
							<label for="sortCode">Sort Code:</label>
						</td>
						<td>
							<input type="text" name="sortCode" maxlength="6">
						</td>
					</tr>
					<tr>
						<td>
							<label for="expiry">Expiry Date:</label>
						</td>
						<td>
							<?php include('page-elements/checkout/date.php');?>
						</td>
					</tr>
				</table>
					<button type="submit" name="card">Add Card</button>
			</form>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
	  <script type="text/javascript" src="./js/checkoutValidation.js"></script>
</body>
</html>
