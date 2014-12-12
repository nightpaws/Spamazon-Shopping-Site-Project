<?php
	session_start();
	include ('databaseFunct/databaseconnection.php');
	$page_type = "cart";
	$page_title = "Shopping Cart";	//What is displayed As the page title in the browser
	$page_description = "Your Spamazon shopping cart"; //The page description
	$cookie_name = "spamazncart";

//do stuff to get user and retrieve data
if(!isset($_COOKIE[$cookie_name])) {
    echo "You are not logged in! Cannot Display Basket.";
	die();
} else {
	if(count($_SESSION['spamazncart'])>0){

		// get the product ids
		$itemName = array();
		$itemSize = array();
		$itemColour = array();
		$itemPrice = array();
		$itemImage = array();
		$basket = $_SESSION['spamazncart'];
		for($x = 0; $x<count($basket); $x++){
			$result = mysql_query("SELECT * FROM cs312_stock WHERE name LIKE '$basket[$x]' LIMIT 1;");
			$row = mysql_fetch_array($result);

					$name = $row{"name"};
					$size = $row{"size"};
					$colour = $row{"colour"};
					$category = $row{"category"};
					$description = $row{"description"};
					$quantity = $row{"quantity"};
					$price = $row{"price"};
					$image = $row{"image"};
					array_push($itemName, $name);
					array_push($itemSize, $size);
					array_push($itemColour, $colour);
					array_push($itemPrice, $price);
					array_push($itemImage, $image);
		}

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<?php  	include ('page-elements/head.php'); ?>
		</head>
		<body>
			<header>
				<?php include('page-elements/header.php'); ?>
			</header>
			<article id="cart-page" class="l-content container">
				<div class="group">
					<div class="cart-items col s8">
						<h3>The following items are in your cart:</h3>

	<?php	$total_price=0;
				for($x = 0; $x<count($itemName); $x++){
					?>




										<div class="cart-item">
											<div class="product-picked-medium product-medium">
												<a href="#">
												<img src="<?php echo $itemImage[$x];?>" alt="Product image">
												<div class="product-info">
													<h4><?php echo $itemName[$x] ?></h4>
													<p> <?php echo $itemPrice[$x] ?></p>
												</div>
												</a>
												<div class="picked-options">
													<ul id="adult-list">
														<li>
															<ul id="child-list">
																<li>Colour:</li>
																<li id="colour">Black</li>
															</ul>
														</li>
														<li>
															<ul id="child-list">
																<li>Size:</li>
																<li id="size">XL</li>
															</ul>
														</li>
														<li>
															<ul id="child-list">
																<li>Quantity:</li>
																<li id="quantity">2</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</div>





						<?php $total_price+=$price;
				}
				?>
				<h3> Total basket value = £<?php echo $total_price ?> </h3>
			</div>
				<div class="to-checkout col s4">
					<a href="checkout.php" class="a-button">Checkout</a>
				</div>
			</div>
		</article>
<footer>
	<?php include('page-elements/footer.php'); ?>
</footer>
</body>
</html>
				<?php
}
else{
		echo "<div class='alert alert-danger'>";
				echo "<strong>No products found</strong> in your cart!";
		echo "</div>";
}
}
?>
