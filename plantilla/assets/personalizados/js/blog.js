$(document).ready(function() {

	$.ajax({
		type: "POST",
		url: "../administrador/aplicacion/controllers/routes/routes.php",
		data: {
			peticion: 34
		}
	}).done(function(e) {
		$("#blog-dinamico").html(e);
			
$(".elemento-blog").each(function(){
	var ruta = $(this).attr("src");
			var	id = $(this).attr("title");

			if(id == "1"){
				var ruta_nueva = "../administrador/"+ruta;

					$(this).attr("src",ruta_nueva);
			}

			if(id == "3"){
					var i = '<iframe  src="' + ruta + '" style="width:100%; height:350px" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class=" img-blog elemento-blog"></iframe>';
				$(this).replaceWith(i)
			}
});
				
			//if (3 == t) {
				//var i = '<iframe  src="' + e + '" style="width:100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class=" img-blog elemento-blog"></iframe>';
				//$(this).replaceWith(i)
			//}
			
		
	}).fail(function(e, t, i) {
		//$("#publicaciones-dinamicas").html("The following error occured: " + t + " " + i)
	});




	



	
	
})