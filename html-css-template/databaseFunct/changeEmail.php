<?php
include('databaseconnection.php');
$newEmail    = $_POST["emailNew"];
$newEmailC   = $_POST["emailNewC"];
$cookie_name = "spamaznauth";
$email = $_COOKIE[$cookie_name];
$table="cs312_user";
$result = "
        SELECT *
        FROM cs312_user
        WHERE email = '$newEmail ';
          ";
//check if email address is already in use
$dupcheck = mysql_query($result);
if (mysql_num_rows($dupcheck) > 0) {
  header("Location: ../regUserExists.php");
    die();

}else {
  //success! Email is not in use! Begin Processing...

    //as the primary key for this table is the email address and it is the
    //foreign key in several other tables, we need to store the details stored
    //in other tables, then delete everything, then put it all back in with the
    //new email address..

    // $saveOrder  ="UPDATE cs312_order
    //               SET email='$newEmailC'
    //               WHERE email='$email'";
    // $savePayment="UPDATE cs312_payment
    //               SET email='$newEmailC'
    //               WHERE email='$email'";
    $saveUser   ="UPDATE cs312_user
                  SET email='$newEmailC'
                  WHERE email='$email'";

  $userQuery    =mysql_query( $saveUser, $dbhandle );
  // $orderQuery   =mysql_query( $saveOrder, $dbhandle );
  // $paymentQuery =mysql_query( $savePayment, $dbhandle );
  if(! $userQuery ){
    die('Could not update user data: ' . mysql_error());
  }
  // if(! $orderQuery ){
  //   die('Could not update order data: ' . mysql_error());
  // }
  // if(! $paymentQuery ){
  //   die('Could not update payment data: ' . mysql_error());
  // }
}


//close the connection
mysql_close($dbhandle);



?>
