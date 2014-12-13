<?php
    
    include('databaseconnection.php');

	$result = mysql_query("SELECT colour FROM cs312_stock WHERE name = '$name' GROUP BY(colour);");

	if($result){
		$i = 0;
		$selectedcolour = "No colours available";
		while($row = mysql_fetch_array($result)){
			$colour = $row{"colour"};
			
			// style="background-color:rgba(0,0,0,0.1);">
			if($i == 0):
				$selectedcolour = $colour; ?>
				<li><button class="colourbutton selectedcolour" type="button" class="selected" name="color" value="<?php echo $colour; ?>"><span><?php echo $colour; ?></span></button></li>
			<?php else: ?>
				<li><button class="colourbutton" type="button" name="color" value="<?php echo $colour; ?>"><span><?php echo $colour; ?></span></button></li>
			<?php endif;

			$i += 1;?>

			<input class="colourtosend" type="hidden" name="colour" value="<?php echo $selectedcolour; ?>">
			<?php
		}
	}

?>

