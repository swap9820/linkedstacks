<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/CSS/main.css">
</header>

<body class=" profile-bg" style="font-family: OpenSans-Regular; color:white">   
<?php
require_once("config.php");

// FETCH BIO
    $user=$_SESSION['User ID'];
    $sql="SELECT * from bio where `User ID` = '$user'";

    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
            
                $record=mysqli_fetch_array($result);        
    }
    else{
        echo "bio fetch unsucessfull";
    }
// TODO: Add join methods
    // FETCH POSTS
    $sql="SELECT * from project where `User ID` = '$user'";

    $postInfo=mysqli_query($con,$sql);
    if(!mysqli_num_rows($postInfo)>0)
    {
        echo "post fetch unsucessfull";
    }

?>
    

    <nav class="navbar navbar-expand-lg navbar-dark nav">
        <a class="navbar-brand " href="index.php">LinkedStacks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor01">
          
          <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
            <input class="form-control mr-sm-2" type="text" placeholder="Search Project">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>

          <ul class="navbar-nav ml-auto align-self-center">
            
            <li class="nav-item  ">
              <a class="nav-link" href="index.php">Home</a>
            
            <li class="nav-item active ">
                <a class="nav-link" href="profile.php">My Profile
                  
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="editBio.php">Edit Profile
                  
                </a>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Logout
                  
                </a>
              </li>
        
           
          </ul>
        </div>
      </nav>

   <div class="container">
       <div class="row mt-lg-4">
           <div class="col-md-3">
               <div class="container profile-bio p-3">
                   <div class="row">
                       <div class="col mr-auto ml-auto" style="margin: auto; max-width: 210px;">
                           <img src="images/avatar/boy-1.svg" style=" max-width: 200px;">
                       </div>
                   </div>
                   <div class="row mt-5">
                       <div class="col">
                           <?php echo $record['username'];
                           ?>
                       </div>
                   </div>
                   <div class="row mt-3">
                    <div class="col-md-6">
                    <?php echo $record['Year'];
                           ?>
                    </div>
                       <div class="col-md-6">
                       <?php echo $record['Dept'];
                           ?>
                       </div>
                   </div>
                   <div class="row mt-3">
                       <div class="col">
                       <?php echo $record['Bio'];
                           ?>
                       </div>
                   </div>
               </div>
               <div >
                <a href="addPost.php"><button type="button" class="btn btn-primary btn-lg">New Post</button></a>
               </div>
           </div>
           <div class="col-md-8 ">
               <div style="text-align: center;">
               <h1>Posts</h1></div>
               <div class="container profile-project-list example" >
                   <?php 
                   while ($row = mysqli_fetch_assoc($postInfo)){
                       echo
                '<div class="container profile-project-list-item">
                    <div class ="row">
                        <div class="col-md-2 align-content-center"> <div style="margin-top:20px">'.$row["Likes"].' Likes</div></div>
                        <div class="col">
                            <div class="row">
                                <h5>'.$row["Project Name"].'</h5>
                            </div>
                            <div class="row d-flex align-items-center mt-lg-2">
                                <img src="images/avatar/boy-1.svg" height="20px" style="padding-right: 2%;">
                                 <div class="profile-project-list-item-details">'.$row["username"].'</div>
                                 <button type="button" class="btn btn-outline-primary profile-project-list-item-details"><a href="'.$row["Project Tags"].'.php">'.$row["Project Tags"].'</button>
                                 


                            
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
                <button type="button" class="btn btn-outline-primary profile-project-list-item-details" ><a href="index.php">hello</a></button>
                
                
            </div>
           </div>
       </div>
   </div>
   <!-- <hr style="background-color: #375a7f;"> -->
   <!-- <div class="footer px-5 py-4" style="background-color: transparent;">
   
    <div class="mt-4 d-flex flex-row justify-content-between">
      <div class="socialMedia">
        <a href="https://www.linkedin.com">
            <span class="icon  icon--linkedin">
                <svg viewBox="0 50 512 512" >
                  <path fill="#828282" d="M150.65,100.682c0,27.992-22.508,50.683-50.273,50.683c-27.765,0-50.273-22.691-50.273-50.683
                  C50.104,72.691,72.612,50,100.377,50C128.143,50,150.65,72.691,150.65,100.682z M143.294,187.333H58.277V462h85.017V187.333z
                  M279.195,187.333h-81.541V462h81.541c0,0,0-101.877,0-144.181c0-38.624,17.779-61.615,51.807-61.615
                  c31.268,0,46.289,22.071,46.289,61.615c0,39.545,0,144.181,0,144.181h84.605c0,0,0-100.344,0-173.915
                  s-41.689-109.131-99.934-109.131s-82.768,45.369-82.768,45.369V187.333z"/>
                </svg>
            </span>
          </a>
      </div>
      <p>
        Made with ❤ in India.
      </p>
    </div>
  </div> -->
</body>

</html>