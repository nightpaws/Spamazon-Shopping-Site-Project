<?php
	//The land of variables
	$page_type = "reviews";
	$page_title = "Product Reviews";	//What is displayed As the page title in the browser
	$page_description = "All the wonderful things people said about our product" //The page description
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
	<article id="reviews-page">
		<nav class="reviews-nav container">
			<div class="col s3">
				<a href="product-page.php">&#8592; Back to product (name)</a>
			</div>
			<div class="col s6">
				<h1>Reviews for Product Name</h1>
			</div>
			<div class="col s3">
				<a href="product-page.php">Leave a Review</a>
			</div>
		</nav>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>