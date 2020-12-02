<?php

require_once("config.php");
$user=$_SESSION[`User ID`];
$title = $_POST['postTitle'];
$content = $_POST['editor1'];
$tags = $_POST['tags'];


    $qy = " INSERT INTO `project`(`Project Name`, `Project Info`, `Project Tags`,`User ID`) VALUES ( '$title' '$content' '$tags' '$user')";
    $sql = mysqli_query($con ,$qy);
    if ($sql)
      {
        echo "updated"; 
      }
      else{
          echo "failed";
      }
     
    echo "Done!";
    header("Location:profile.php");

?>