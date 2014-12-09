<?php
	$username = "hwb12179";
	$password = "gichstsu";
	$hostname = "devweb2014.cis.strath.ac.uk";

	$username = $_POST["username"];
	$passowrd = $_POST["password"];

	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password) 
	 or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";

	//select a database to work with
	$selected = mysql_select_db("hwb12179",$dbhandle) 
	  or die("Could not select examples");

    $result = mysql_query("SELECT email, password FROM cs312_user WHERE 
    	email LIKE $username AND password LIKE $password");

    if(!$result){
    	echo "Sorry, but your login details were incorrect. Perhaps you mispelt?";
    } else{
    	//SESSION STUFF HERE
    }

	//close the connection
	mysql_close($dbhandle);
?>