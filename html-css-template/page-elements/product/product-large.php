<?php 
	$item = $_GET["item"];
	include ('databaseFunct/findProduct.php');

?>

<div class="product-large container">
	<div class="group">
		<div id="img-slider">
			<img src="<?php echo $image;?>" style="max-width:313px;" alt="<?php //img alt text?>">
		</div>

		<div class="product-info">
			<hgroup>
				<h1><?php echo $name;?></h1>
				<?php $formattedCat = str_replace("-", " ", $category); ?>
				<?php echo "<h4>Category: <a href=\"category.php?cat=$category\">$formattedCat</a></h4>";?>
			</hgroup>
			<h2><?php echo "£".$price;?></h2>
		</div>
	</div>
	<div class="product-details">
		<p><?php echo $description;?></p>
	</div>
</div>