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
	<article class="search container l-content">
		<div class="group">
			<div class="col s12 result">
				<?php include('databaseFunct/search.php'); ?>
			</div>
		</div>
		<div class="pagination group">
			<?php if($pagination): ?>

					<div class="back col s6">
						<?php if($startat >= $displayingPerPage): //display back
							
							$backto = $startat - $displayingPerPage;
							echo "<a href='search.php?term=$term&startat=$backto'>&#8592; Back</a>";
						endif; ?>
					</div>
					<div class="next col s6">
						<?php if ($startat + $displayingPerPage < mysql_num_rows($result)):

							$nextto = $startat + $displayingPerPage;
							echo "<a href='search.php?term$term&startat=$nextto'>Next &#8594;</a>";
						endif; ?>
					</div>
				<?php endif; ?>
		</div>
	</article>
	<footer>
		<?php include('page-elements/footer.php'); ?>
	</footer>
</body>
</html>