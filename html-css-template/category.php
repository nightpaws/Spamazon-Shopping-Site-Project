<?php
	//The land of variables
	$page_type = "category";
	$page_title = "";	//What is displayed as the page title in the browser
	$page_description = "" //The page description
?>

<?php
	include('databaseFunct/databaseconnection.php');
?>

<?php
	$category = $_GET["cat"];

	if(isset($_GET["startat"])){
		$startat = $_GET["startat"];
	}else{
		$startat = 0;
	}

	//If this generates 2 we are to display a larger category such as "mens-tops"
	//if 3 is produced we are to display the results of a smaller search.
	$todisply = substr_count($category, '-');
	$pagination = false;
	$displayingPerPage = 4;
	$result;

	if($todisply == 1){
		$result = mysql_query("
				SELECT DISTINCT name, price, image
				FROM cs312_stock
				WHERE category LIKE '" .$category."%';
			");
	}elseif($todisply ==2){

		$result = mysql_query("
				SELECT DISTINCT name, price, image
				FROM cs312_stock
				WHERE category = " .$category .";
			");
	}else{
		$result = "Invalid category";
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
	<article class="cat-page l-content">
		<div class="group">
			<div class="filters col s3">
			
			</div>
			<div class="results col s9">
				<div class="returned">
					<?php

						if (is_string($result) || mysql_num_rows($result) == 0) { // add this check. ?>
			        		<h3>The entered category of: <?php echo $category; ?>, does not exist in our world.</h3> 
			        		<?php die();
			    		}

			    		if (mysql_num_rows($result) > 4 ){
			    			$pagination=true;
			    		}

			    		$current = 0;
						while ($row = mysql_fetch_array($result)):

							if($pagination == true){
								$display = false;
								if($current >= $startat && $current < ($startat + $displayingPerPage)){
									$display = true;
								}
								$current++;
							}else{
								$display = true;
							}

							if($display == true){
								$name = $row["name"];
								$price = $row["price"];
								$image = $row["image"];

								@include('page-elements/product/product-small.php');
							}

						endwhile;
					?>
				</div>
				<div class="pagination group">
					<?php 

						if($pagination): ?>
	
							<div class="back col s6">
								<?php if($startat >= $displayingPerPage): //display back
									
									$backto = $startat - $displayingPerPage;
									echo "<a href='category.php?cat=$category&startat=$backto'>&#8592; Back</a>";
								endif; ?>
							</div>
							<div class="next col s6">
								<?php if ($startat + $displayingPerPage < mysql_num_rows($result)):

									$nextto = $startat + $displayingPerPage;
									echo "<a href='category.php?cat=$category&startat=$nextto'>Next &#8594;</a>";
								endif; ?>
							</div>
						<?php endif; ?>
				</div>
			</div>
		</div>	
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>