<h1 class="page-header">Address</h1>
<div class="reg">
	<form name="address" action="#" method="post">
		<table>
			<tr>
				<td>
					<label for="addressLine1">Address Line 1:</label>
				</td>
				<td>
					<input type="text" name="AddressLine1">
				</td>
			</tr>
			<tr>
				<td>
					<label for="addressLine2">Address Line 2:</label>
				</td>
				<td>
					<input type="text" name="AddressLine2">
				</td>
			</tr>
			<tr>
				<td>
					<label for="town">Town/City:</label>
				</td>
				<td>
					<input type="text" name="Town">
				</td>
			</tr>
			<tr>
				<td>
					<label for="postcode">Post Code:</label>
				</td>
				<td>
					<input type="text" name="Postcode">
				</td>
			</tr>
			<tr>
				<td>
					<label for="country">Country:</label>
				</td>
				<td>
					<?php include('page-elements/checkout/countries.php');?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="phone">Phone Number:</label>
				</td>
				<td>
					<input type="text" name="Phone">
				</td>
			</tr>
		</table>
		
		<button type="submit" name="deliver">Deliver to this Address</button>
	</form>
</div>