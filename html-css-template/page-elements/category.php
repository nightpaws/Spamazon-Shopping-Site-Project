<?php
	//The land of variables
	$page_type = "category";
	$page_title = "";	//What is displayed as the page title in the browser
	$page_description = "" //The page description
?>

<?php
	//database connection
	$username = "hwb12179";
    $password = "gichstsu";
    $hostname = "devweb2014.cis.strath.ac.uk"; 
?>

<?php
	$category = $_GET["cat"];

	//If this generates 2 we are to display a larger category such as "mens-tops"
	//if 3 is produced we are to display the results of a smaller search.
	$todisply = echo substr_count($category, '-');

	$result;

	if($todisply == 2){

		$result = mysql_query("
				SELECT name, quantity, price, image
				From cs312_stock
				where INSTR('category', '{$category}') > 0;
			")
	}elseif($todisply ==3){

		$result = mysql_query("
				SELECT name, quantity, price, image
				From cs312_stock
				where category = %$category%;
			")
	}else{
		$result = "Invalid category";
	}

	echo <pre>
	print_r($result);
	echo </pre>
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
		
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>