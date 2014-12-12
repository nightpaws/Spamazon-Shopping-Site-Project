<?php
	//The land of variables
	$page_type = "product";
	$page_title = "Product Name";	//What is displayed As the page title in the browser
	$page_description = "Brief product description" //The page description
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
				<form action="#" method="post">
					<ul class="size-select select">
						<li>Select Size</li>
						<li><button class="selected" name="size" value="s">S</button></li>
						<li><button name="size" value="m">M</button></li>
						<li><button name="size" value="l">L</button></li>
						<li><button name="size" value="xl">XL</button></li>
					</ul>
					<ul class="color-select select">
						<li>Select Colour</li>
						<li><button name="color" value="blue" style="background-color:rgba(0,0,0,0.1);"><span>blue</span></button></li>
						<li><button name="color" value="red" style="background-color:rgba(0,0,0,0.1)"><span>red</span></button></li>
						<li><button name="color" value="black" style="background-color:rgba(0,0,0,0.1)"><span>black</span></button></li>
						<li><button name="color" value="purple" style="background-color:rgba(0,0,0,0.1)"><span>purple</span></button></li>
						<li><button name="color" value="yellow" style="background-color:rgba(0,0,0,0.1)"><span>yellow</span></button></li>
					</ul>
					<label for="quantity">Quantity</label>
					<select name="quantity" >
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
					<button type="submit"></button>
				</form>
			</div>
		</div>
		<div class="suggested-items">
			<h3>You might also love to wear:</h3>
			<div class="items">
				<?php include('databaseFunct/findSimilar.php');?>
			</div>
		</div>
		<div class="reviews">
			<h3>Raving reviews about this product:</h3>
			<div class="container">
				<div class="group">
					<div class="main-reviews col s8">
						<?php include('page-elements/review.php'); ?>
						<?php include('page-elements/review.php'); ?>
					</div>
					<div class="col s4">
						<div class="sub-reviews">
							<?php include('page-elements/review.php'); ?>
						</div>
					</div>
				</div>
				<div class="group more">
					<a class="a-button col s3" href="#">Read More Reviews</a>
					<a class="a-button col s3" href="#">Leave a Review</a>
				</div>
			</div>
		</div>
	</article>
	<footer>
		<?php  include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>