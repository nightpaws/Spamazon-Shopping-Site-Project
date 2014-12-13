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
