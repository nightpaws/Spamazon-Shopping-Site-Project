<?php
    
    include('databaseconnection.php');

	$result = mysql_query("	SELECT size 
							FROM cs312_stock 
							WHERE name = '$name'  
							GROUP BY (size);");

	$sizes = array();

	if($result){
		$i = 0;
		while($row = mysql_fetch_array($result)){

			$size = $row{"size"};

			$sizes[$i] = $row{"size"};
			$i += 1;
		}

		sort($sizes);

		$i = 0;
		$size = $sizes[0];
		foreach($sizes as $s):
			if($i == 0): ?>
				<li><button type="button" class="selectedsize sizebutton" name="size" value="<?php echo $s; ?>"><?php echo $s; ?></button></li>
			<?php else: ?>
				<li><button type="button" class="sizebutton" name="size" value="<?php echo $s; ?>"><?php echo $s; ?></button></li>
			<?php endif;
			$i =+ 1;
		endforeach; ?>

		<input class="sizetosend" type="hidden" name="size" value="<?php echo $size; ?>">
		<?php
	}

?>

