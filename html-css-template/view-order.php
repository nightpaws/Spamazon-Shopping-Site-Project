<?php
	//The land of variables
	$page_type = "order";
	$page_title = "Your Order";	//What is displayed As the page title in the browser
	$page_description = "This order was placed on 11/11/2011" //The page description
?>

<?php
	//Check if the user is logged in
	@include('php/logged-in.php');

	include('databaseFunct/databaseconnection.php');
	$id = $_GET["id"];
	$result = mysql_query("SELECT * from cs312_order WHERE Id = $id");
	while($row = mysql_fetch_array($result)){
		$date = $row{"date"};
		$street = $row{"street"};
		$town = $row{"town"};
		$county= $row{"county"};
		$postcode = $row{"postcode"};
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
	<article id="view-order" class="l-content">
		<div id="ordered-on">
			<h3>Ordered on <?php echo $date;?></h3>
		</div>
		<div id="product">
			<?php @include('page-elements/product/product-large.php'); ?>
		</div>
		<div id="address">
			<h3>Delivery address</h3>
			<p><?php echo $street;?></p>
			<p><?php echo $town;?></p>
			<p><?php echo $county;?></p>
			<p><?php echo $postcode;?></p>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>