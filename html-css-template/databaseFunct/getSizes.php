<?php
    
    include('databaseconnection.php');

	$result = mysql_query("SELECT size FROM cs312_stock WHERE name = '$name' GROUP BY(size);");

	if($result){
		while($row = mysql_fetch_array($result)){
			$size = $row{"size"};
			?>
			<li><button name="size" value="<?php echo $size; ?>"><?php echo $size; ?></button></li>
			<?php
		}
	}

?>

