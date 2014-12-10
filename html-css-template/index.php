<?php
	//The land of variables
	$page_type = "home";
	$page_title = "Home Page";	//What is displayed As the page title in the browser
	$page_description = "Welcome to Spamazon the home of highish quality clothing" //The page description
?>
<?php
function logout(){
$cookie_name = "spamaznauth";
setcookie("$cookie_name", "", time() - 3600,"/");
session_destroy(); 
header( 'Location: ./index.php' ) ;
}
if (isset($_GET['logout'])) {
    logout();
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
	<article class="home">
		<div id="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slide welcome">
							<h2>Hello and Welcome to</h2>
							<h1>Spamazon</h1>
							<p>We hope you love our products as much as we are meant to</p>
							<h3>If you register we promise to send you a sensible amount of mail</h3>
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
						<div class="slide men">
							<a href="mens.php">
								<div>
									<h2>Are you a </h2>
									<h1>Man?</h1>
								</div>
								<div>
									<h2>Then visit our overpriced mens section</h2>
									<h3>It has clothes but for men . . . </h3>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="group todays-deals l-content">
			<div class="deal-header">
				<h2>Todays Deals:</h2>
				<h3> - 100% guaranteed to be at full price, no matter what!</h3>
			</div>
			<div class="col s4 product">
				<?php include('databaseFunct/index-sale.php'); ?>
			</div>
			<div class="col s4 product">
				<?php include('databaseFunct/index-sale.php'); ?>
			</div>
			<div class="col s4 procuct">
				<?php include('databaseFunct/index-sale.php'); ?>
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