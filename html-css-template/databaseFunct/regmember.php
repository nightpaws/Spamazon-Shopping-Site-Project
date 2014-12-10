<?php
include('databaseconnection.php');

$email     = $_POST["email"];
$passwd    = $_POST["password"];
$passwdC   = $_POST["passwordC"];
$firstname = $_POST["fname"];
$surname   = $_POST["sname"];
$dob       = $_POST["dob"];

//execute the SQL query and return records
if ($passwd == $passwdC && $dob != null || $dob != '') {
    if (strtotime($dob) < strtotime(date("d-m-Y"))) {
        //Database uses DB formatted date. STR_TO_DATE converts from d-m-y to y-m-d
        $sql = "INSERT INTO cs312_user(email, fname, sname, dob, password)
	 VALUES ('$email','$firstname','$surname',STR_TO_DATE('$dob','%d-%m-%Y'),'$passwd');";
    } else {
       die("Date of birth cannot be in the future!");
    }
} else {
   die("Data values are incorrectly formatted.");
}

// Execute the query
if (!mysql_query($sql)) {
    die("An unexpected error has occurred!");
}

//close the connection
mysql_close($dbhandle);

sleep(3);
header("Location: ../registerConfirmation.php");
die();
?>