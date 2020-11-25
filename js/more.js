$(document).ready(function(){

	$('#more').click(function(e){
		console.log("Hello world!");
		var element = $("<div class='p-3 post'><p>post title</p><p>post tags</p></div>");
		element.appendTo('.postsColumn');
	});

});