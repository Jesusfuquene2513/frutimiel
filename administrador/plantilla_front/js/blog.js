$(document).ready(function() {
	$.ajax({
		type: "POST",
		url: "aplicacion/controllers/routes/routes.php",
		data: {
			peticion: 34
		}
	}).done(function(e) {
		$("#blog-dinamico").html(e), $(".elemento-blog").each(function() {
			var e = $(this).attr("src"),
				t = $(this).attr("id");
			if (3 == t) {
				var i = '<iframe  src="' + e + '" style="width:100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class=" img-blog elemento-blog"></iframe>';
				$(this).replaceWith(i)
			}
		})
	}).fail(function(e, t, i) {
		$("#publicaciones-dinamicas").html("The following error occured: " + t + " " + i)
	});




	



	
	
})