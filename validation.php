<?php

session_start();

$con = mysqli_connect('127.0.0.1:3307', 'root' , '');
if($con)
{
    echo "Connection Sucessful";
}
else 
{
    echo "Connection Failed";
}


mysqli_select_db($con ,'linkedstacks');
$username = $_POST['username'];
$pass = $_POST['pass'];

$q = "SELECT * FROM credentials WHERE username='$username' && password ='$pass' ";

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['USERNAME'] = $username;
    header('location:profile.php');
}
else
{
    header('location:login.php');
}
 

?>