<?php

//do stuff to get user and retrieve data
if(!isset($_SESSION['spamazncart']) || count($_SESSION['spamazncart'] == 0)){ ?>
	<div class="cart-item">
    	<p>You have not added anything to your basket.</p>
    </div>
    <?php
} else {


	if(count($_SESSION['spamazncart'])>0){

		// get the product ids
		$itemName = array();
		$itemSize = array();
		$itemColour = array();
		$itemPrice = array();
		$itemImage = array();
		$basket = $_SESSION['spamazncart'];

		$basketTotalPrice = 0;

		foreach ($basket as $item) {

			$name = $item["name"];
			$size = $item["size"];
			$colour = $item["colour"];
			$quantity = $item["quantity"];

			$result = mysql_query("
								SELECT * 
								FROM cs312_stock 
								WHERE name LIKE '$name' 
								LIMIT 1;
								");

			if(mysql_num_rows($result) == 0){
				echo "Sorry we don't stock this product. Did you play with the cookies?, bad person!";

			}else{
				$row = mysql_fetch_array($result);
				$image = $row["image"];
				$price = $row["price"];
				$basketTotalPrice += $price;

				?>
				<div class="cart-item">
					<?php include('page-elements/product/product-picked-medium.php'); ?>
				</div>
				<?php
			}
		}
	}
}
?>