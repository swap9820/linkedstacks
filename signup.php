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

$q = "SELECT * FROM credentials where username='$username' ";

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
    
if($num==1)
{
    echo "Duplicate Data";
}
else
{
    $qy = " INSERT INTO `credentials`(`username` , `password`) VALUES ('$username' , '$pass' )";
    mysqli_query($con ,$qy); 
    header('location:login.php');
     
}
 

?>