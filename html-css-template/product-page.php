<?php
	//The land of variables
	$page_type = "product";
	$page_title = $_GET["item"];	//What is displayed As the page title in the browser
	$page_description = "Brief product description"; //The page description
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
	<article id="product-page" class="l-content container">
		<div class="group">
			<div class="product-page-info col s9">
				<?php include('page-elements/product/product-large.php'); ?>
			</div>
			<div class="purchase col s3">
				<?php //This section should be modified as needed ?>
				<form action="addtoCart.php" method="post">
					<ul class="size-select select">
						<li>Select Size</li>
						<?php include("databaseFunct/getSizes.php");?>
					</ul>
					</br></br></br>
					<ul class="color-select select">
						<li>Select Colour</li>
						<li><?php include("databaseFunct/getColours.php");?></li>
					</ul>
					<ul>
						<label for="quantity">Quantity</label>
						<select name="quantity">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</ul>
					<?php
					 echo "<a href='addToCart.php?item=$name' class='btn btn-primary'>";
           echo "<span class='glyphicon glyphicon-shopping-cart'></span> Add to cart";
           echo "</a>";
					?>
				</form>
			</div>
		</div>
		<div class="suggested-items">
			<h3>You might also love to wear:</h3>
				<div class="items">
				<?php include('databaseFunct/findSimilar.php');?>
			</div>
		</div>
	</article>
	<footer>
		<?php  include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>
