<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frutimiel</title>
    <link rel="icon" href="../plantilla/assets/img/icon.ico" type="image/x-icon"/>

    <!-- Google Web Fonts -->

  

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../plantilla/assets/personalizados/css/animate.min.css" rel="stylesheet">
    <link href="../plantilla/assets/personalizados/css/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../plantilla/assets/personalizados/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../plantilla/assets/personalizados/css/style.css" rel="stylesheet">
    <link href="../plantilla/assets/personalizados/css/colores.css" rel="stylesheet">
    <link href="../plantilla/assets/personalizados/css/redes.css" rel="stylesheet">
      <link href="../plantilla/assets/personalizados/css/tamano.css" rel="stylesheet">
      <link href="../plantilla/assets/personalizados/css/talento.css" rel="stylesheet">

         <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
          <link href="../plantilla/assets/personalizados/css/whatsapp.css" rel="stylesheet">
           <link href="../plantilla/assets/personalizados/css/cifras_index.css" rel="stylesheet">
        
            <link href="../plantilla/assets/personalizados/css/header.css" rel="stylesheet">
           <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
           <style>  
           .fondo{
    background-image: url("../plantilla/assets/personalizados/img/panal2.png");
    background-size: cover;
    background-attachment: fixed;}
#footer{
    background: rgb(120, 68, 44 , 0.8);
    background-image: url("../plantilla/assets/personalizados/img/panal2.png");
    background-size: cover;
    background-attachment: fixed;
}
           </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<section>
				<?php
$this->load->view('vistas/header');
				?>
			</section>
			<section class="p-0" style="position:relative; display: table;">
				<div class="container-fluid p-0">
      <?php
$this->load->view('vistas/portafolio');
        ?>    
        </div>
			</section>
			<section class="p-0" style="position: relative; top:-10px">

				<?php
$this->load->view('vistas/footer');
				?>
				
			</section>
			<section>
				  <script src="../plantilla/assets/personalizados/js/librerias/js/jquery.min.js"></script>
        <script src="../plantilla/assets/personalizados/js/librerias/boostrap/js/bootstrap.bundle.min.js"></script>
        <script src="../plantilla/assets/personalizados/js/wow/wow.min.js"></script>
        <script src="../plantilla/assets/personalizados/js/easing/easing.min.js"></script>
        <script src="../plantilla/assets/personalizados/js/waypoints/waypoints.min.js"></script>
        <script src="../plantilla/assets/personalizados/js/owlcarousel/owl.carousel.min.js"></script>
        <script src="../plantilla/assets/personalizados/js/counterup/counterup.min.js"></script>

           <script src="../plantilla/assets/personalizados/js/servicios.js"></script>
           <script src="../plantilla/assets/personalizados/js/footer.js"></script>
           <script type="text/javascript">
           	$(document).ready(function(){

	
	
      $(".footer-original label").css("color","white");

       $(".footer-original .form-control").css("color","black");
        $(".footer-original .form-control").css("font-weight","bolder");
  

});
           </script>
			</section>
		</div>
	</div>
	
</body>
</html>