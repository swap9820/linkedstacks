<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add Post</title>
        <!-- Rich Test Editior CDN -->
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/agate.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

        <!-- Main CSS-->
        <link rel="stylesheet" href="assets/CSS/main.css">
    </head>
    <body class="profile-bg">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">LinkedStacks</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </nav> 


          <br>

        <form action="addnewpost.php" method="POST">

          <div class="form-group align-content-center">
            <label class="col-form-label" for="postTitle">Post Title</label>
            <input type="text" class="form-control" placeholder="Enter Post Title" id="postTitle" name="postTitle">
          </div>
        </div>

        <div class="richtexteditor">
            <textarea name="editor1"  ></textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
        </div>
        <br><br><Br>
        <div class="form-group align-content-center">
          <label class="col-form-label" for="postTitle">Tags</label>
          <select class="form-control" id="tags" name="tags">
                      <option value="Web Development">Web Development</option>
                      <option value="IOT">IOT</option>
                      <option value="Android">Android</option>
                      <option value="Machine Learning">Machine Learning</option>                 
                    </select>
        </div>
      </div>

      <div class="col-md-6 ">
               <input type="submit" class="bio-submit-btn" value="submit">
            </div>

      </form>
    </body>
</html>