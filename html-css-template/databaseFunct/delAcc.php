<?php

include('databaseconnection.php');
$database = "hwb12179";
$cookie_name = "spamaznauth"; //to be added

//do stuff to get user and retrieve data
if(!isset($_COOKIE[$cookie_name])) {
    echo "You are not logged in! Cannot delete account.";
	die();
} else {
  $email = $_COOKIE[$cookie_name];
}


//create the SQL query
  //get orders which match user and delete
$sqlorderItem = "DELETE FROM cs312_orderItem 
  WHERE cs312_orderId IN (SELECT Id from cs312_order WHERE cs312_useremail = '$email');";
  //then delete the rest in reverse order
$sqlorder = "DELETE FROM cs312_order 
  WHERE cs312_useremail = '$email';";
$sqlpayment = "DELETE FROM cs312_payment 
  WHERE cs312_useremail = '$email'";
  $sqluser = "DELETE FROM cs312_user 
  WHERE email = '$email';";

//execute the SQL query
if (!mysql_query($sqlorderItem)) {
    die("Error deleting order item!");
}
if (!mysql_query($sqlorder)) {
    die("Error deleting order!");
}
if (!mysql_query($sqlpayment)) {
    die("Error deleting payment info!");
}
if (!mysql_query($sqluser)) {
    die("Error deleting user!");
}
//close the connection
mysql_close($dbhandle);

//expire the current cookie: set the expiration date to one hour ago
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}else{ 
setcookie("$cookie_name", "", time() - 3600,"/");
session_destroy(); 
}

//respond to user with success notice
echo("Your account has been successfully deleted..");
header( 'Location: ../closeConfirmation.php' ) ;

die();
?>