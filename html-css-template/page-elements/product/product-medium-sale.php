<div class="product-medium product-medium-sale">
	<a href=<?php echo "product-page.php?item=".str_replace(" ", "+", $name);?>>
	<img src="<?php echo $image; ?>" alt="Product Image">
	<div class="product-info">
		<?php if (strlen($name) > 23): ?>
				<h4><?php echo substr($name, 0, 20); ?>...</h4>
			<?php else: ?>
				<h4><?php echo $name; ?></h4>
			<?php endif; ?>
		<p> Was £<?php echo $price; ?></p>
		<h4>Now £<?php echo $price; ?></h4>
	</div>
	</a>
	<div></div>
</div>