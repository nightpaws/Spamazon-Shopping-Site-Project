<?php
$username = "hwb12179";
$password = "gichstsu";
$hostname = "devweb2014.cis.strath.ac.uk"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("hwb12179",$dbhandle) 
  or die("Could not select examples");

//close the connection
mysql_close($dbhandle);
?>