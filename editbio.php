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
$bio = $_POST['bio'];





if(isset($_POST['submit'])){

    $qy = " INSERT INTO `bio`(`username` , `bio`) VALUES ('$username' , '$bio' )";

    if(isset($_POST['department']))
    {
      $department=$_POST['department'];
      $querye = "INSERT INTO `bio` (`dept`) VALUES ('$department')";
      $sql=mysqli_query($dbb,$querye);
    }
    if(isset($_POST['year']))
    {
        $year=$_POST['year'];
        $querye = "INSERT INTO `bio` (`dept`) VALUES ('$year')";
        $sql=mysqli_query($dbb,$querye);
    }
    mysqli_query($con ,$qy); 
    //header('location:login.php');
}
?>