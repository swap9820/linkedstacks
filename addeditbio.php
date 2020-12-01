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







    $qy = " INSERT INTO `bio`(`Bio` `username`) VALUES ( '$bio' '$username')";
    $sql0 = mysqli_query($con ,$qy);
    if ($sql0)
      {
        echo "updated name and bioo"; 
      }
      else{
          echo "failed at name and bio ";
      }

    if(isset($_POST['department']))
    {
      $department=$_POST['department'];
      $querye = "INSERT INTO `bio` (`Dept`) VALUES ('$department')";
      $sql1=mysqli_query($con,$querye);
      if ($sql1)
      {
        echo "updated dept"; 
      }
      else{
          echo "failed at dept ";
      }
       
    }
    if(isset($_POST['year']))
    {
        $year=$_POST['year'];
        $query = "INSERT INTO `bio` (`Year`) VALUES ('$year')";
        $sql2=mysqli_query($con,$query);
        if ($sql2)
      {
        echo "updated year"; 
      }
      else{
          echo "failed at year ";
      }
    }
     
    echo "Done!";
    //header("Location:index.php");




?>