<div class="product-picked-medium product-medium">
	<?php echo "<a href=\"product-page.php?item=$name\">";?>
	<?php echo "<img src=\"$image\" alt=\"Image of $name\">";?>
	<div class="product-info">
		<h4><?php echo $name; ?></h4>
		<p><?php echo $price; ?></p>
	</div>
	</a>
	<div class="picked-options">
		<ul id="adult-list">
			<li>
				<ul id="child-list">
					<li>Colour:</li>
					<?php echo "<li id=\"colour\">$colour</li>"; ?>
				</ul>
			</li>
			<li>
				<ul id="child-list">
					<li>Size:</li>
					<?php echo "<li id=\"size\">$size</li>";?>
				</ul>
			</li>
			<li>
				<ul id="child-list">
					<li>Quantity:</li>
					<?php echo "<li id=\"quantity\">$quantity</li>";?>
				</ul>
			</li>
			<li>
				<ul id="child-list">
					<li>Remove:</li>
					<?php echo "<a class=\"a-button\" id=\"remove\" href=\"remove-from-cart.php?item=$name\">Remove</a>";?>
				</ul>
			</li>
		</ul>
	</div>
</div>