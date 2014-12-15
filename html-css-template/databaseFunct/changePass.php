<?php
include('databaseconnection.php');
$currPass    = $_POST["CurrentPassword"];
$newPass    = $_POST["PasswordNew"];
$newPassC   = $_POST["PasswordNewC"];
$cookie_name = "spamaznauth";
$email = $_COOKIE[$cookie_name];
$table="cs312_user";
$sql="SELECT * FROM cs312_user WHERE email='$email'";

$retval = mysql_query( $sql, $dbhandle );
if(! $retval ){
  die('Could not get data: ' . mysql_error());
}
$databasePass="";
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    $databasePass = $row['password'];
         }
// $result = mysql_query($sql);
if ($databasePass != $currPass) {
  die("<script>location.href = '../failedPassChangeRedirect.php'</script>");
} else {
  //success! Email is not in use! Begin Processing...

  $sql="UPDATE cs312_user
        SET password='$newPassC'
        WHERE email='$email'";
  $retval = mysql_query( $sql, $dbhandle );
  if(! $retval ){
    die('Could not update data: ' . mysql_error());
  }
  header("Location: ../index.php");
}
?>
