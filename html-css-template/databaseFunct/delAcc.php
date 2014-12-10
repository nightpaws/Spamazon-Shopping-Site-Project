<?php

include('databaseconnection.php');

//create the SQL query
$email = "";


//Requires cookies to populate user email
$sqluser = "DELETE FROM cs312_user 
  WHERE email = '$email';"; //need users email
$sqlpayment = "DELETE FROM cs312_payment 
  WHERE cs312_useremail = '$email'";
$sqlorder = "DELETE FROM cs312_order 
  WHERE Id = ?;";
$sqlorderItem = "DELETE FROM cs312_orderItem 
  WHERE cs312_orderId = ? AND cs312_stockname = ? AND cs312_stocksize = ? AND cs312_stockcolour = ?;";


//execute the SQL query
if (!mysql_query($sql)) {
    die("An unexpected error has occurred!");
}

//respond to user with success notice

//close the connection
mysql_close($dbhandle);
die();
?>