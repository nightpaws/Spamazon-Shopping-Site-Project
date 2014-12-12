<?php
    
    include('databaseconnection.php');

	$result = mysql_query("SELECT colour FROM cs312_stock WHERE name = '$name' GROUP BY(colour);");

	if($result){
		while($row = mysql_fetch_array($result)){
			$colour = $row{"colour"};
			?>
			<li><button name="color" value="<?php echo $colour; ?>" style="background-color:rgba(0,0,0,0.1);"><span><?php echo $colour; ?></span></button></li>
			<?php
		}
	}

?>

