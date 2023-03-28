$(document).ready(function () {




  $.ajax({
      type: "POST",
      url: "aplicacion/controllers/routes/routes.php",
      data: {
        peticion: 32
      }
    }).done(function(n) {
      $("#talento-dinamico").html(n);
     
$(".service-item").mouseover(function(){
    $(".cinta-producto").css("display","none");
$(this).children(".cinta-producto").css("display","block");

$(this).css("border","solid 3px #167c47");
  });

  $(".service-item").mouseout(function(){
$(this).css("border","solid 0px gray");
$(".cinta-producto").css("display","none");
$(this).children(".cinta-producto").css("display","none");
  });
      
      
    }).fail(function(n, t, i) {
      //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)

      



    })





  
});
