$(document).ready(function(){

	
	var nombre = "Usuario Frutimiel";
	var contacto = "573226425722";
	var tipo_consulta = "Consulta sobre frutimiel";
	var url = "https://api.whatsapp.com/send?phone="+contacto+"&text=!!!Hola buenos dias Redepyme, %20 soy "+nombre+" Por favor requiero "+tipo_consulta+"!!!";
	$("#enlace-wasap").attr("href",url);

	$("#btn-whatsapp").click(function(){

		$("#whatsapp").toggle();

	});

	$("#btn-cerrar-whatsapp").click(function(){
$("#whatsapp").toggle();
	});

});