<div class="product-medium-search product-medium">
	<a href="product-page.php">
	<img src='<?php echo $image ?>' alt="Product image">
	<div class="product-info">
		<h4><?php echo $name ?></h4>
		<p><?php echo $price ?></p>
	</div>
	</a>
	<div class="picked-options">
		<ul id="adult-list">
			<li>
				<ul id="child-list">
					<li>Colour:</li>
					<li id="colour"><?php echo $colour ?></li>
				</ul>
			</li>
			<li>
				<ul id="child-list">
					<li>Size:</li>
					<li id="size"><?php echo $size ?></li>
				</ul>
			</li>
			<li>
				<ul id="child-list">
					<li>Quantity:</li>
					<li id="quantity"><?php echo $quantity?></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
