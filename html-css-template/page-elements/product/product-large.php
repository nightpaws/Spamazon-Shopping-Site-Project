<?php 
	$item = $_GET["item"];
	include ('databaseFunct/findProduct.php');
?>

<div class="product-large container">
	<div class="group">
		<div id="img-slider">
			<img src="<?php echo $image;?>" alt="<?php //img alt text?>">
			<!-- 
<img src="#" alt="<?php //img alt text?>">
			<img src="#" alt="<?php //img alt text?>">
			<img src="#" alt="<?php //img alt text?>">
			<img src="#" alt="<?php //img alt text?>">
 -->
		</div>

		<div class="product-info">
			<hgroup>
				<h1><?php echo $name;?></h1>
				<!-- <h4>By Product Maker</h4> -->
			</hgroup>
			<h2><?php echo "£".$price;?></h2>
		</div>
	</div>
	<div class="product-details">
		<p><?php echo $description;?></p>
		<!-- <h3>Details</h3>
		<table>
			<tr>
				<td>Materials:</td>
				<td>Cotton</td>
			</tr>
			<tr>
				<td>Country:</td>
				<td>China (duh!)</td>
			</tr>
			<tr>
				<td>Slave Labour?:</td>
				<td>Ha of course!</td>
			</tr>
		</table> -->
	</div>
</div>