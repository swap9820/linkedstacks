

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<!-- Rich Test Editior CDN -->
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
         <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="js/more.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

        <!-- Main CSS-->
        <link rel="stylesheet" href="assets/CSS/main.css">
</head>
<body style="color: black; overflow-x:hidden">


<?php
require_once("config.php");
// FETCH POSTS
$sql="SELECT * from project ORDER BY `Timestamp`";

$postInfo=mysqli_query($con,$sql);
if(!mysqli_num_rows($postInfo)>0)
{
    echo "post fetch unsucessfull";
}

?>

	<div class="base profile-bg" style="font-family: OpenSans-Regular;">
		<nav class="navbar navbar-expand-lg navbar-dark nav" style="padding:15px;">
        <a class="navbar-brand " href="index.php">LinkedStacks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor01">
          
          <form class="form-inline my-2 my-lg-0 mr-auto ml-auto" style="color:white;">
            <input class="form-control mr-sm-2" type="text" placeholder="Search Project">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>

          <ul class="navbar-nav ml-auto align-self-center" >
            
            <li class="nav-item  "style="padding-right:10px;">
              <a class="nav-link" href="index.php">Home</a>
            
            <li class="nav-item active "style="padding-right:10px;">
                <a class="nav-link" href="profile.php">My Profile
                  
                </a>
              </li>
              <li class="nav-item "style="padding-right:10px;">
                <a class="nav-link" href="editBio.php">Edit Profile
                  
                </a>
              <li class="nav-item  "style="padding-right:10px;">
                <a class="nav-link" href="#">Logout
                  
                </a>
              </li>
        
           
          </ul>
        </div>
      </nav>
      <div class="d-flex row justify-content-between">
		<div class="newPostSection col-md-7 mt-4">
			<h3 class="ml-5">What's New-</h3>
			<div class="postsColumn">
      <?php 
                   while ($row = mysqli_fetch_assoc($postInfo)){
                       echo
                '<div class="p-3 profile-project-list-item">
                    <div class ="row">
                        <div class="col-md-2 align-content-center"> <div style="margin-top:20px">'.$row["Likes"].' Likes</div></div>
                        <div class="col">
                            <div class="row">
                                <h5>'.$row["Project Name"].'</h5>
                            </div>
                            <div class="row d-flex align-items-center mt-lg-2">
                                <img src="images/avatar/boy-1.svg" height="20px" style="padding-right: 2%;">
                                 <div class="profile-project-list-item-details">'.$row["username"].'</div>
                                 <button type="button" class="btn btn-outline-primary profile-project-list-item-details">'.$row["Project Tags"].'</button>
                                 


                            
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
        


			</div>
			<!-- <p class="ml-5" id="more">more</p> -->
		</div>
		<div class="otherSection ml-sm-5 d-flex flex-column justify-content-star col-md-5 col-lg-4 mt-4">
			<div class="p-3  leaderBoard">
				<h5>Top Contributors</h5><br><hr style="background-color:white;">
				<div class="d-flex flex-column justify-content-around mt-2">
					<div class="mb-2 leaders">
						<span>John Doe</span><br>
					</div>
					<div class="mb-2 leaders">
						<span>Janet Denver</span><br>
					</div>
					<div class="mb-2 leaders">
						<span>James Donald</span>
					</div>
				</div>
			</div>

			<div class="p-3 mt-3 newPost">
				<h5> New Posts </h5><hr style="background-color:white;">
			</div>

			<div class="p-3 mt-3 clanList" style="height:200px;">
				<h5><u>Clans</u></h5><hr style="background-color:white;">
				<div>
				<br>
					<span>Python</span><br><br>
					<span>Web Devlopment</span><br><br>
					<span>C++</span>
				</div>
			</div>

			<br><br><br>

		</div>
	   </div>
	</div>
	<div class="footer px-5 py-4" style="background-color: #343a40;">
		<div class="mt-4 d-flex flex-row justify-content-between">
			<span style="color:white; margin-left:550px">
				Made with <span style="color:red;">❤ </span>in DMCE.
			</span>
			<br>
		</div>
	</div> 
</body>
</html>
