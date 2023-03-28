$(document).ready(function(){
    
	$.ajax({
        type: 'POST',  // Envío con método POST
        url: '../administrador/aplicacion/controllers/routes/routes.php',  // Fichero destino (el PHP que trata los datos)
        data: { peticion: 55 , album_id:6 } // Datos que se envían
    }).done(function (msg) {  // Función que se ejecuta si todo ha ido bien

        $("#albumnes-dinamicos").html(msg);  // Escribimos en el div consola el mensaje devuelto







   

       



    }).fail(function (jqXHR, textStatus, errorThrown) { // Función que se ejecuta si algo ha ido mal
        // Mostramos en consola el mensaje con el error que se ha producido
       // $("#listado-archivos-multimedia").html("The following error occured: " + textStatus + " " + errorThrown);


    });
});