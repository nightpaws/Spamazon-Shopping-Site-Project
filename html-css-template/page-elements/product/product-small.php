<div class="product-small">
	<a href=<?php 
	$newname = str_replace("'s","s", $name);
	echo "product-page.php?item=".str_replace(" ", "+", $newname);
	?>>
	<img src="<?php echo $image; ?>" alt="Product Image">
	<div class="product-info">
		<?php if (strlen($name) > 23): ?>
				<h4><?php echo substr($name, 0, 20); ?>...</h4>
			<?php else: ?>
				<h4><?php echo $name; ?></h4>
			<?php endif; ?>
		<p><?php echo "£".$price;?></p>
	</div>
	</a>
	<div></div>
</div>