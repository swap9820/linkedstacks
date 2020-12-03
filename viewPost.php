<!DOCTYPE html>

<?php
require_once("config.php");

// FETCH BIO

$pid = $_GET['projectId'];
$sql = "SELECT * from project where `Project ID` = '$pid'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  $record = mysqli_fetch_array($result);
}

?>
<html>

<head>
  <meta charset="utf-8">
  <title>View Post</title>
  <!-- Rich Test Editior CDN -->
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/agate.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Main CSS-->
  <link rel="stylesheet" href="assets/CSS/dummy.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    *,
    :after,
    :before {
      box-sizing: border-box;
    }

    .main-container>.container {
      font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, sans-serif !important;
    }

    .bg {
      background-color: #222;
    }

    .box {
      background-color: #1d3747de;
      padding: 30px !important;
      margin: auto auto;
      width: 65%;
    }

    .postedby-box {
      border-bottom: 1px dashed #4d4d56;
      border-top: 1px dashed #4d4d56;
      padding: 2px;
      margin-bottom: 1px;
    }

    .fa {
      font-size: 20px;
      cursor: pointer;
      user-select: none;
      padding: 20px;
    }

    .fa:hover {
      color: darkblue;
    }

    .signin-heading {
      font-size: 30px;
      font-family: "Frank Ruhl Libre", serif;
      color: #fff;
      padding: 10px;
    }

    .text-muted {
      color: #6c757d !important;
    }

    .post-comment {
      width: 35em;
      margin: 8px 0;
      margin-bottom: 14px;
      border: none;
      outline: none;
      border-bottom: 1px solid #ff5f87;
      text-decoration: none;
      background-color: transparent;
      color: #fff;
    }

    .post-comment-btn {
      color: #fff;
      text-align: center;

      background-size: 200% auto;
      font-weight: 600;
      border-radius: 5px;
      transition: .5s;
      padding: 6px;
      background-image: linear-gradient(270deg, #ff5f87 0, #ff4242 55%, #ff53a9);
      border: none;
      margin-right: 10px;
    }

    .draft-post-btn {
      border: 1px solid #ff5f87;
      color: #cfcfcf;


      background-color: transparent;
      font-weight: 600;
      border-radius: 5px;
      margin-right: 10px;
    }

    .ml-3,
    .mx-3 {
      margin-left: 1rem !important;
    }
  </style>
</head>

<body style="background-color: #222;font-family: OpenSans-Regular;font-size: 19px; color:white;">

  <nav class="navbar navbar-expand-lg navbar-dark nav">
    <a class="navbar-brand " href="index.html">LinkedStacks</a>
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

  <br>

  <div id="root" style="background-color: #222;">
    <div class="main-container" style="color: white;">
      <div class="class=" mt-3 post-display style="font-size: 19px;">
        <div class="box">


          <label class="signin-heading" style="font-size: 40px; color: white;">Career Buddy</label>
          <div class="postedby-box">
            <span class="text-muted"> Posted By: Sid</span>
          </div>
          <div style="line-height: 1.9em; font-size: 19px;margin-top: 1.8em;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat ex odio, sed pretium tellus iaculis ac. Fusce non venenatis tortor. Cras bibendum finibus tristique. Sed in ultricies tortor. Duis ornare mattis suscipit. Etiam non molestie purus. Pellentesque ac magna nec ipsum posuere dictum sit amet vitae velit. In scelerisque quam in metus tempus, a efficitur leo dignissim. Vivamus malesuada turpis arcu, vitae pharetra nisl elementum sed. Integer blandit mauris libero, quis tincidunt ante ultrices quis. Duis finibus vulputate orci. Pellentesque ac egestas diam, id condimentum orci. Mauris eros enim, faucibus a posuere fermentum, interdum et risus. Nam faucibus consectetur nulla, quis pulvinar dolor euismod nec. Curabitur ornare nibh libero, mattis aliquam felis consectetur vel.

              Donec at leo nec felis hendrerit tincidunt sed ac tortor. Praesent eget diam et leo maximus commodo et ac quam. Vestibulum ut eros lectus. Vestibulum sed facilisis ipsum, quis congue nibh. Vestibulum vel porttitor risus, sit amet scelerisque tortor. Donec a arcu pulvinar, consequat tortor sed, imperdiet felis. Pellentesque luctus vitae velit eu semper. In ullamcorper iaculis nisi, ac mollis nulla sollicitudin nec. Nullam aliquam porta arcu vel suscipit. Nam congue ex sed convallis eleifend. Maecenas a odio a augue pellentesque volutpat. Quisque nisi augue, accumsan at pretium ut, ornare vitae enim. Morbi placerat convallis neque ac varius. Phasellus rhoncus est ut sem malesuada porttitor. Donec pretium molestie est eu varius.

              Sed commodo lectus ut ipsum tempus ullamcorper. Donec vitae augue eget nibh dignissim mattis ut a massa. Aliquam lacinia tincidunt felis, eu rhoncus tortor tincidunt gravida. Nam lacinia sodales lectus. Aenean magna orci, efficitur eget maximus eu, tincidunt nec nibh. Sed et est eget lacus vehicula efficitur sit amet at ligula. Suspendisse potenti. Aenean vitae molestie risus. Nam id sapien arcu. Fusce malesuada felis vel orci auctor facilisis. Duis non dictum magna. Nulla fringilla eget eros vel vulputate. Nulla facilisi. Nam vel nibh in leo laoreet egestas eget sed leo. Maecenas hendrerit congue urna, ac cursus enim vehicula et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
              <iframe width="560" height="315" style="margin-left:100px ;" src="https://www.youtube.com/embed/vcAIZ4axYZU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <br><br>
          <div class="d-flex mt-3">
            <h4 style="color: white;margin-right:1em;">Tags: </h4>
            <a class="text-decoration-none">
              <button type="button" class="btn btn-dark post-tag-button align-self-center" style="font-size: 0.8em;">Web Development</button>
            </a>
          </div>

          <i onclick="myFunction(this)" class="fa fa-thumbs-up"> Like </i>
          <script>
            function myFunction(x) {
              x.classList.toggle("fa-thumbs-down");
            }
          </script>
          <div>
            <div class="Toastify"></div>
          </div>

          <div>
            <label class="signin-heading text-muted">Comments</label>
          </div>
          <form>
            <div class="ml-md-3">
              <div class="profile-items">
                <div class="d-flex">
                  <div class="profile-icon">
                    <img src="images/avatar/boy-1.svg" style="width: 26px; height: 26px; border-radius: 12px; ">
                  </div>
                  <fieldset class="com-box ml-3 flex-grow-1">
                    <input name="commentundefined" class="post-comment" type="text" placeholder="Type your reply here." value="">
                  </fieldset>
                </div>
                <div class="row">
                  <div class="d-flex ml-auto mt-1 ">
                    <button class="post-comment-btn px-4" action="submit">Post</button>
                    <div class="Toastify"></div>
                    <button class="draft-post-btn ml-3 p-3" action="cancel">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      
      </div>
    </div>
  </div>
  <div class="footer px-5 py-4">
    <hr style="background-color: #375a7f;">
    <div class="mt-4 d-flex flex-row justify-content-between">
      <div class="socialMedia">
        <a href="https://www.linkedin.com">
          <span class="icon  icon--linkedin">
            <svg viewBox="0 50 512 512">
              <path fill="#828282" d="M150.65,100.682c0,27.992-22.508,50.683-50.273,50.683c-27.765,0-50.273-22.691-50.273-50.683
                  C50.104,72.691,72.612,50,100.377,50C128.143,50,150.65,72.691,150.65,100.682z M143.294,187.333H58.277V462h85.017V187.333z
                  M279.195,187.333h-81.541V462h81.541c0,0,0-101.877,0-144.181c0-38.624,17.779-61.615,51.807-61.615
                  c31.268,0,46.289,22.071,46.289,61.615c0,39.545,0,144.181,0,144.181h84.605c0,0,0-100.344,0-173.915
                  s-41.689-109.131-99.934-109.131s-82.768,45.369-82.768,45.369V187.333z" />
            </svg>
          </span>
        </a>
      </div>
      <p>
        Made with ❤ in India.
      </p>
    </div>
  </div>
</body>

</html>