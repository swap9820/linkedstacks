<? php
session_start(); 
?>

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

<body class=" profile-bg" style="font-family: OpenSans-Regular;">
    <nav class="navbar navbar-expand-lg navbar-dark nav">
        <a class="navbar-brand" href="index.html">LinkedStacks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">
                  <span><?php echo $_SESSION['username']; ?></span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="profile.html">Profile
                  
              </a>
              
            </li>
            <li class="nav-item align-self-end">
              <a class="nav-link" href="#">Logout</a>
            </li>
        
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

   <div class="container">
       <div class="row mt-lg-4">
           <div class="col-md-3">
               <div class="container profile-bio p-3">
                   <div class="row">
                       <div class="col" style="width: 70%;margin: auto auto;">
                           <img src="images/avatar/boy-1.svg" >
                       </div>
                   </div>
                   <div class="row mt-5">
                       <div class="col">
                           Name
                       </div>
                   </div>
                   <div class="row mt-3">
                    <div class="col-md-6">
                        Year
                    </div>
                       <div class="col-md-6">
                           Department
                       </div>
                   </div>
                   <div class="row mt-3">
                       <div class="col">
                           Bio
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-8 ">
               <div style="text-align: center;">
               <h2>Post</h2></div>
               <div class="container" >
                <div class="container profile-project-list-item">
                    <div class ="row">
                        <div class="col-md-2 align-content-center"> <div style="vertical-align: middle;">5 Likes</div></div>
                        <div class="col">
                            <div class="row">
                                <h5>Project Title</h5>
                            </div>
                            <div class="row d-flex align-items-center mt-lg-2">
                                <img src="images/avatar/boy-1.svg" height="20px" style="padding-right: 2%;">
                                 <div class="profile-project-list-item-details">Name</div>

                                 <button type="button" class="btn btn-outline-primary profile-project-list-item-details">Tag1</button>
                                 <button type="button" class="btn btn-outline-primary profile-project-list-item-details">Tag2</button>


                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container profile-project-list-item">
                    <div class ="row">
                        <div class="col-md-2" style="height: 100%;"> 5 Likes</div>
                        <div class="col">
                            <div class="row">
                                <h5>Project Title</h5>
                            </div>
                            <div class="row d-flex align-items-center mt-lg-2">
                                <img src="images/avatar/boy-1.svg" height="20px" style="padding-right: 2%;">
                                 <div class="profile-project-list-item-details">Name</div>

                                 <button type="button" class="btn btn-outline-primary profile-project-list-item-details">Tag1</button>
                                 <button type="button" class="btn btn-outline-primary profile-project-list-item-details">Tag2</button>


                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
       </div>
   </div>
</body>

</html>