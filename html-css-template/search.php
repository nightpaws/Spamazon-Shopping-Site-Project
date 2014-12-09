<?php
        //The land of variables
        $page_type = "search";
        $page_title = "Search";       //What is displayed As the page title in the browser
        $page_description = "Trying to find something nice? Good luck with that." //The page description
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
	<article class="search container">
		<div class="group">
			<div class="col s4">
				
			</div>
			<div class="col s8">
				<?php include('databaseFunct/search.php'); ?>
			</div>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>