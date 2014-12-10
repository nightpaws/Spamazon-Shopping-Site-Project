<div class="product-extralarge reversed container">
	<a href=<?php echo "product-page.php?item=".str_replace(" ", "+", $name);?>>
		<div class="info">
			<div class="product-info">
				<hgroup>
					<h2>Now Available!</h2>
					<h1><?php $name; ?></h1>
				</hgroup>
				<h2>£<?php $price ?></h2>
				<p>For the first time ever we bring you <? echo $name; ?>. This item is an amazing must buy!</p>
				<h3>Click to View</h3>
			</div>
			<div id="img-slider">
				<img src="<?php echo $image; ?>" alt="Product Image">
			</div>
		</div>
	</a>
</div>