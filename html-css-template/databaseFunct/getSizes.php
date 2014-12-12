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

		foreach($sizes as $s):?>
			<li><button name="size" value="<?php echo $s; ?>"><?php echo $s; ?></button></li>
		<?php endforeach;
	}

?>

