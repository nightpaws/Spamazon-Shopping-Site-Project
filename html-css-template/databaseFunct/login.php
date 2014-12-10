<?php
	//database login details
	$username = "hwb12179";
	$password = "gichstsu";
	$hostname = "devweb2014.cis.strath.ac.uk";
	$table = "cs312_user";

	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password)
	 or die("Unable to connect to MySQL");
	echo "Connected to MySQL<br>";

	//user submitted details
	$user = $_POST["username"];
	$pass = $_POST["password"];

	//Basic sql injection protection
	// $user = stripslashes('user');
	// $pass = stripslashes('pass');
	// $user = mysql_real_escape_string($user);
	// $pass = mysql_real_escape_string($pass);

	//select a database to work with
	$selected = mysql_select_db("hwb12179",$dbhandle)
	  or die("Could not select examples");
	$sql="SELECT * FROM $table WHERE email='$user' AND
				password='$pass'";
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);
  if($count==1){
		echo "login complete";
		$cookieName = 'user';
		setcookie($cookieName, $user, time() + (86400 * 30), "/");
		echo $_COOKIE[$cookieName];
		// session_start();
		// $_SESSION["user"] = $user;
		// $_SESSION["pass"] = $pass;
		//header("location:../index.php"); uncomment this when finished, will redirect user to index
	} else{
		echo "We either have no user under that email\n
		 			or the password is incorrect";
  }

	//close the connection
	mysql_close($dbhandle);
?>
