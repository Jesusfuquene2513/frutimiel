$(document).ready(function () {




  $.ajax({
      type: "POST",
      url: "../administrador/aplicacion/controllers/routes/routes.php",
      data: {
        peticion: 33
      }
    }).done(function(n) {
      $("#servicios-dinamicos").html(n);

    

     

  $(".service-item").mouseout(function(){
$(this).css("border","solid 1px gray");
$(".cinta-producto").css("display","none");
$(this).children(".cinta-producto").css("display","none");
  });
     
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
      
      
    }).fail(function(n, t, i) {
      //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)

      



    })



 visitantes(); 
 

            function visitantes(){
                  const counterUp = window.counterUp.default

const callback = entries => {
    entries.forEach( entry => {
        const el = entry.target
        if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
            counterUp( el, {
                duration: 2000,
                delay: 16,
            } )
            el.classList.add( 'is-visible' )
        }
    } )
}

const IO = new IntersectionObserver( callback, { threshold: 1 } )

const el = document.querySelector( ' .counter4' )
IO.observe( el )

            }  

           

      

  
});
