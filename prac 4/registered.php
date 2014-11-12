<?php

	// Connect to database server
	mysql_connect("devweb2014.cis.strath.ac.uk", "wlb12153", "ingeduel");

	// Select your database
	mysql_select_db("wlb12153") or die(mysql_error());

	echo "Thank you for registering. Here is a list of all others signed up.<br/><br/>";
	$QUERY = 'SELECT * from registration ORDER BY surname, forename ASC';
	$result = mysql_query($QUERY) or die(mysql_error());
	while($row = mysql_fetch_array($result)) {
		echo $row['forename'] . " " . $row['surname'];
		echo "<br/>";
	}

?>