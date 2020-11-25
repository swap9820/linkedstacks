<? php
session_start(); 
?>

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

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

        <!-- Main CSS-->
        <link rel="stylesheet" href="assets/CSS/main.css">
</head>
<body>
	<div class="base mt-1 d-flex row justify-content-between">
		<div class="newPostSection col-md-7 mt-4">
			<p class="ml-md-5">What's New-</p>
			<div class="postsColumn d-flex flex-column justify-content-start">
				<div class="p-3 post">
					<p>post title</p>
					<p>post tags</p>
				</div>
				<div class="post">
					
				</div>
				<div class="post">
					
				</div>
				<div class="post">
					
				</div>
			</div>
		</div>
		<div class="otherSection d-flex flex-column justify-content-star col-md-5 col-lg-4 mt-4">
			<div class="p-3 leaderBoard">
				<p>Top Contributors</p>
				<div class="d-flex flex-column justify-content-around mt-2">
					<p>lead</p>
					<p>er</p>
					<p>board</p>
				</div>
			</div>
			<div class="p-3 mt-3 newPost">
				<p>New Post</p>
			</div>
			<div class="p-3 mt-3 clanList">
				<p>Clans</p>
				<div>
					<p>Python</p>
					<p>Web Devlopment</p>
					<p>C++</p>
				</div>
			</div>			
		</div>
	</div>
	<div class="footer px-5 py-4">
		<hr style="background-color: red;">
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
	</div>
</body>
</html>