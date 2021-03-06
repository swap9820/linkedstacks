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
<body class="profile-bg">
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
            
            <li class="nav-item  ">
                <a class="nav-link" href="profile.php">My Profile
                  
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="editBio.php">Edit Profile
                  
                </a>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Logout
                   
                </a>
              </li>
        
           
          </ul>
        </div>
      </nav>
   <div class="container" id="editBio-page">
       <div class="editBio-form-container">
           <form action="addeditbio.php" method="POST">
           <div class="row">
            
                <div class="col mr-auto ml-auto" style="margin: auto; max-width: 210px;">
                    <img src="images/avatar/boy-1.svg" style=" max-width: 200px;">
                </div>
               
           </div>
           <div class="row">
              <div class="col-md-12">
            <div class="form-group align-content-center">
                <label class="col-form-label" for="username">Name</label>
                <input type="text" class="form-control" placeholder="Enter Your name" id="username" name="username">
              </div>
            </div>
           
           </div>
           <div class="row">
               <div class="col-12 col-md-5">
                <div class="form-group">
                    <label for="year">Year</label>
                    <select class="form-control" id="year" name="year">
                      <option value="FE">FE</option>
                      <option value="SE">SE</option>
                      <option value="TE">TE</option>
                      <option value="BE">BE</option>                 
                    </select>
                  </div>
               </div>
               <div class="col-12 col-md-7">
                <div class="form-group">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="department">
                      <option value="COMP">Computer</option>
                      <option value="IT">IT</option>
                      <option value="CIVIL">Civil</option>
                      <option value="ELECTRONICS">Electronics</option>                 
                    </select>
                  </div>
               </div>
           </div>
           <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" rows="3" name="bio"></textarea>
              </div>
              </div>
           </div>
           <div class="row">
               <div class="col-md-4">
            <button type="button" class="btn btn-primary">Back</button>
           </div>
           <div class="col-md-6 ">
               <input type="submit" class="bio-submit-btn" value="submit">
            </div>
           </div>
        </form>
       </div>
   </div>
</body>
</html>