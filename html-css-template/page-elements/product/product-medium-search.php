<div class="product-medium-search product-medium">
	<a href=<?php echo "product-page.php?item=".str_replace(" ", "+", $name);?>>
		<div class="img">
			<img src="<?php echo $image; ?>" alt="<?php echo $image; ?>">
		</div>
		<div class="product-info">
			<h4><?php echo $name;?></h4>
			<p><?php echo "£".$price;?></p>
			<p><?php echo $category;?></p>
			<p><?php echo $description;?></p>
		</div>
	</a>
</div>
