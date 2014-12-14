<?php

include('databaseconnection.php');

if (isset($_GET['search']) && $_GET['search'] != '') {
	//Add slashes to any quotes to avoid SQL problems.
	$search = $_GET['search'];
// $searchParsed = mysql_real_escape_string($search, $dbhandle);

$sql = "SELECT distinct(name) FROM cs312_stock WHERE name LIKE '%$search%'
        OR category LIKE '%$search%' OR description LIKE '%$search%' GROUP BY(name) LIMIT 5";
		
		
		//get the result as an array and echo each row
	$result = mysql_query($sql, $dbhandle);
		
	while($suggest = mysql_fetch_array($result, MYSQL_ASSOC)) {
		//Return each page title seperated by a newline.
		echo $suggest['name'] . "\n";
	}
}

?> 