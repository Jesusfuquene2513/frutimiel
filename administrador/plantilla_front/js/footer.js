$(document).ready(function() {
	
	function t() {
		$.ajax({
			type: "POST",
			url: "aplicacion/controllers/routes/routes.php",
			data: {
				peticion: 32
			}
		}).done(function(n) {
			$("#talento-dinamico").html(n)
		}).fail(function(n, t, i) {
			$("#talento-dinamico").html("The following error occured: " + t + " " + i)
		})
	}
	function i() {
		$.ajax({
			type: "POST",
			url: "aplicacion/controllers/routes/routes.php",
			data: {
				peticion: 33
			}
		}).done(function(n) {
			$(".contenedor-servicios").html(n);
			$(".btn-solicitar").click(function() {
				var n = $(this).attr("id");
				$("#asunto").attr("title", "Consulta sobre programa '" + n + "'");
				$("#asunto").val("Consulta sobre programa '" + n + "'");
				$("#btn-wasap").click()
			})
		}).fail(function(n, t, i) {
			$(".contenedor-servicios").html("The following error occured: " + t + " " + i)
		})
	}
	
	
	$("#graficos").load("graficos.html");
	$(window).resize(function() {
		$("#graficos").load("graficos.html")
	})
});

$(document).ready(function() {
	t();
	function t(n) {
		$.ajax({
			type: "POST",
			url: "aplicacion/controllers/routes/routes.php",
			data: {
				peticion: 27,
				departamento: n
			}
		}).done(function(n) {
			$("#sel-municipio").html(n)
		}).fail(function(n, t, i) {
			$("#sel-municipio").html("The following error occured: " + t + " " + i)
		})
	}
	var n = 0;
	$("#enviar-peticion-contacto").click(function() {
		$("#nombre_contacto").val().length > 0 && $("#consulta").val().length > 0 && $("#documento").val().length > 0 && $("#telefono").val().length > 0 && $("#correo").val().length > 0 && n == 1 ? ($(this).attr("type", "submit"), $(this).click()) : alert("Por favor Diligencie correctamente los datos solicitados")
	});
	
	$("#sel-documento").change(function() {
		var n = $(this).val();
		
		n == 0 ? ($("#documento").val(""), $("#documento").attr("disabled", "disabled")) : $("#documento").removeAttr("disabled")
	});
	
	$("#sel-departamento").change(function() {
		var i = $(this).val();
		
		i == 0 ? (document.ready = document.getElementById("sel-municipio").value = "0", $("#sel-municipio").attr("disabled", "disabled"), n = 0) : ($("#sel-municipio").removeAttr("disabled"), t(i))
	});
	
	$("#sel-municipio").change(function() {
		var t = $(this).val();
		
		n = t == 0 ? 0 : 1
	});
	
	$("#sel-municipio").attr("disabled", "disabled");
	$.ajax({
		type: "POST",
		url: "aplicacion/controllers/routes/routes.php",
		data: {
			peticion: 26
		}
	}).done(function(n) {
		$("#sel-departamento").html(n)
	}).fail(function(n, t, i) {
		$("#sel-departamento").html("The following error occured: " + t + " " + i)
	})
});