<?php

require_once("config.php");


$username=$_POST['username'];
$pass=$_POST['pass'];
$q = "SELECT * FROM credentials WHERE username='$username' && password ='$pass' ";

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num==1)
{
     $loggedUser= mysqli_fetch_array($result);
    $_SESSION['User ID'] = $loggedUser['User ID'];

    header('location:index.php');
}
else
{
    echo "Wrong Username or Password";
   // header('location:login.php');
}
 

?>