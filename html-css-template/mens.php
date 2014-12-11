<?php
	//The land of variables
	$page_type = "home";
	$page_title = "Mens Home";	//What is displayed As the page title in the browser
	$page_description = "Welcome to the Mens section of Spamazon. Here you can find manly clothing" //The page description
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
	<article class="home subhome">
		<div class="group">
			<div id="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slide welcome">
								<h2>Hello and Welcome to</h2>
								<h1>The Mens Section</h1>
								<p>This is where we hide all our manly clothing for men</p>
								<h3></h3>
							</div>
						</li>
						<li>
							<div class="slide christmas">
								<div>
									<h2>Looking for our</h2>
									<h1>Christmas</h1> 
									<h2>stuff?</h2>
								</div>
								<div>
									<h2>Well we don't have any, bah humbug</h2>
								</div>
							</div>
						</li>
						<li>
							<?php $reversed = false; ?>
							<?php include('databaseFunct/subhome-splash.php'); ?>
						</li>
						<li>
							<?php $reversed = true; ?>
							<?php include('databaseFunct/subhome-splash.php'); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="group l-content cats">
			<ul>
				<li><a href="category.php?cat=mens-tops">Tops</a></li>
				<li><a href="category.php?cat=mens-bottoms">Bottoms</a></li>
				<li><a href="category.php?cat=mens-shoes">Shoes</a></li>
				<li><a href="category.php?cat=mens-stuff">Other Stuff</a></li>
			</ul>
		</div>
		<div class="group todays-deals l-content">

			<?php $cat = "mens"; ?>
			
			<div class="deal-header">
				<h2>Todays Deals:</h2>
				<h3> - 100% guaranteed to be at full price, no matter what!</h3>
			</div>
			<div class="col s4 product">
				<?php include('databaseFunct/subpage-sale.php'); ?>
			</div>
			<div class="col s4 product">
				<?php include('databaseFunct/subpage-sale.php'); ?>
			</div>
			<div class="col s4 procuct">
				<?php include('databaseFunct/subpage-sale.php'); ?>
			</div>
		</div>
		<div class="suggested-items l-content">
			<h2>Based on your browsing:</h2>
			<div class="items">
				<?php include('databaseFunct/reccommend.php'); ?>
			</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>