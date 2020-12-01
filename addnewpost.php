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
$title = $_POST['postTitle'];
$content = $_POST['editor1'];
$tags = $_POST['tags'];

    $qy = " INSERT INTO `project`(`Project Name` `Project Info` `Project Tags`) VALUES ( '$title' '$content' '$tags')";
    $sql = mysqli_query($con ,$qy);
    if ($sql)
      {
        echo "updated"; 
      }
      else{
          echo "failed";
      }
     
    echo "Done!";
    //header("Location:index.php");

?>