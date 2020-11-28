$(document).ready(function(){

	$('#more').click(function(e){
		console.log("Hello world!");
		var element = $("<div class='p-3 post'><div class='row'><div class='col-md-2 ml-2 mr-2 align-content-center'> <div style='margin-top:20px'>5 Likes</div></div><div class='col'><div class='row'><h5>Project Title</h5></div><div class='row d-flex align-items-center mt-lg-2'><img src='images/avatar/boy-1.svg' height='20px' style='padding-right: 2%;'><div class='profile-project-list-item-details'>Name</div><button type='button' class='btn btn-outline-primary profile-project-list-item-details'>Tag1</button><button type='button' class='btn btn-outline-primary profile-project-list-item-details'>Tag2</button></div></div></div></div>");		
		element.appendTo('.postsColumn');
	});
});