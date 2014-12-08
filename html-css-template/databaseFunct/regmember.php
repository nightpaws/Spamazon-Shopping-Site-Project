<?php
$username = "hwb12179";
$password = "gichstsu";
$hostname = "devweb2014.cis.strath.ac.uk"; 

$email = $_POST["email"];
$passwd = $_POST["password"];
$passwdC = $_POST["passwordC"];
$firstname = $_POST["fname"];
$surname = $_POST["sname"];
$dob = $_POST["dob"];

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("hwb12179",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
  $dob = STR_TO_DATE('$dob', '%m/%d/%Y');
  if($passwd == $passwordC && $dob!=null || $dob!=''){
  	//DOB IN UK IS DD-MM-YYYY
  	//DB NEEDS YYYY-MM-DD
	$result = mysql_query("INSERT INTO 'cs312_user'('email', 'fname', 'sname', 'dob', 'password')
	 VALUES ('$email','$firstname','$surname','$dob','$passwd');");
  }
  else{
	echo "Something went wrong with the database insertion. ".
	die();
  }
  
//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   echo "ID:".$row{'email'}." First Name:".$row{'fname'}."Surname: ". //display the results
   $row{'sname'}."Date of Birth:".$row{'dob'}."Password:".$row{'password'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>