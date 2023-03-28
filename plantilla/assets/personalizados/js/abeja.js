var x=0;
        var y=0;

         $(document).mousemove(function(event){
            console.log("Coordenadas en del ratón en la parte visible del navegador: " + event.clientX + ", " + event.clientY);
            console.log("Coordenadas absolutas del ratón en la página actual: " + event.clientX + ", " + event.clientY);

            x =  event.pageX-70;
            y = event.pageY-110;
        });

          

           var contador = 0;
        setInterval(function () {

         $("body").css("background-position","top "+y+"px left "+x+"px");

        }, 100);