<h1 class="page-header">Card Details</h1>
<div class="reg">
	<form name="card" action="#" method="post">
		<table>
			<tr>
				<td>
					<label for="cardNumber">Card Number:</label>
				</td>
				<td>
					<input type="text" name="cardNumber">
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
					<label for="expiry">Expiry Date:</label>
				</td>
				<td>
					<?php include('page-elements/checkout/date.php');?>
				</td>
			</tr>
		</table>
		
		<button type="submit" name="deliver">Choose this card.</button>
	</form>
</div>