<div class="container-fluid p-0 footer-original" style="position:relative">
     <div class="row">
        <div class="container-fluid p-0 d-flex">   


 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0" id="footer" style="position:relative; top:2px;">
    <div class="btn-footer-whatsapp" style="display: flex; align-items: center; position:fixed; z-index: 2000; bottom:0; right:0">
          <a href="#" id="enlace-wasap" target="blank_">  <img src="../plantilla/assets/img/whatsapp.png" alt="" style="width:130px; height:130px;  cursor:pointer; position:relative; top:0px;" id="btn-whatsapp"></a>
    </div>
   
                <div class="container-fluid   footer  pt-5 wow fadeIn" data-wow-delay="0.1s"
                    style=" color:white; font-weight:bolder" style="position:relative">
                     <div class="row container m-auto" id="contador-visitas">   
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style=""> 
<div class="row">   
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 m-auto cifra p-1" style="float:left; box-sizing: border-box; ">
<div class="card-body p-0" style=""> 

 <span class="counter4" style="position:relative"> 
<span style="margin:auto; display:block"></span></div>
<div class="card-body p-0 text-center"> 
    <br>
    <h1 style="color:white">Visitantes</h1>
<h2 class="indicador"><?php echo $_SESSION["visitantes"]; ?></h2>
<br>
<br>
</div>
</div>




</div>
</div>
<hr>
<br>
<br>
</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <center>    <h3 class="mb-4"
                                    style="color:#fcc41a; border-left:5px solid #fcc41a; padding-left: 3px; border:none">CONTACTANOS
                                </h3></center>

                                <div class="position-relative">
                                    <form action="Contacto/procesar_contacto_index" method="post">
<div class="row container m-auto david    p-1" style="background:none">
   
            <div class="row m-auto" style="color:black">
            
                <div class="col-xl-12 col-lg-11 col-md-12 ">
<div class="row">
   
    <div class="col-xl-12 form-group formulario-campos p-1 mt-1 mb-1" style="text-align: center">   
                <h1  style="color:white" >Formulario de Contacto</h1>
<div class="row">    <div class="form-group col-xl-4 col-lg-6  col-md-4 p-1 mt-1 mb-1 formulario-campos">
                        <label for="" style="">Nombre completo</label>
                        <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto">
                        <input type="text" name="peticion" value="35" class="d-none">
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-4  p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="">Tipo Identificación</label>
                        <select name="tipo_documento" id="sel-documento" class="form-control" style="cursor:pointer">
                            <option value="0">Seleccione tipo de identificación</option>
                            <option value="1">Cedula de ciudadania</option>
                            <option value="2">Cedula extranjera</option>
                            <option value="3">Pasaporte</option>
                            <option value="4">NIT</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6  col-md-4 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="">Numéro de identificación</label>
                        <input type="text" name="numero_identificacion" class="form-control" disabled id="documento">
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                   
                     <div class="form-group col-xl-6 col-lg-4 col-md-6 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="">Seleccione Departamento</label>
                        <select class="form-control" id="sel-departamento" style="cursor:pointer" name="departamento">

                        </select>
                    </div>
                    <div class="form-group col-xl-6 col-lg-4 col-md-6 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="">Seleccione Municipio</label>
                        <select name="municipio" class="form-control" id="sel-municipio" disabled="disabled" style="cursor:pointer">

                        </select>
                    </div>
                     <div class="form-group col-xl-6 col-lg-4 col-md-6  p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="">Correo electronico</label>
                        <input type="text" class="form-control" id="correo" name="correo">
                    </div>
                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <textarea name="consulta" id="consulta" rows="3" class="form-control"
                        style="resize:none; height:150px"></textarea>
                    </div>
                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <center>
                            <input type="button" class="btn btn-primary" value="Enviar" id="enviar-peticion-contacto">
                        </center>
                    </div>

                </div>
            </div>
                    
</div>
                    
                </div>
            </div>


        </div>

                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">

                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"
                                        style="text-align: justify;">
                                        <h4 class=" mb-4"
                                            style="color:#fcc41a; border-left:5px solid #fcc41a; padding-left: 3px;">
                                            FRUTIMIEL</h4>
                                        <span>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum
                                            et lorem et sit, sed
                                            stet lorem sit clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                                            eos. Clita erat ipsum
                                            et lorem et sit.</span>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <h4 class="mb-4"
                                            style="color:#fcc41a;  border-left:5px solid #fcc41a; padding-left: 3px;">
                                            CONTACTANOS</h4>
                                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <h4 class="mb-4"
                                            style="color:#fcc41a; border-left:5px solid #fcc41a; padding-left: 3px;">
                                            MAPA DEL SITIO</h4>
                                        <a class="btn btn-link" href="" style="color:white; font-weight:bolder">About
                                            Us</a>
                                        <a class="btn btn-link" href="" style="color:white; font-weight:bolder">Contact
                                            Us</a>
                                        <a class="btn btn-link" href="" style="color:white; font-weight:bolder">Our
                                            Services</a>
                                        <a class="btn btn-link" href="" style="color:white; font-weight:bolder">Terms &
                                            Condition</a>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <br>
                                        <h4 class="mb-4" style="color:white; padding-left: 3px;">REDES SOCIALES</h4>
                                        <br>
                                        <div class="d-flex container-fluid">
                                            <div class="demo">
                                                <div class="hexa" style="text-align: center">
                                                    <a class="btn btn-square rounded-circle  red" href=""
                                                        style="margin:auto"><i class="fab fa-instagram"></i></a>
                                                </div>
                                                <div class="hexa" style="text-align: center">
                                                    <a class="btn btn-square rounded-circle  red" href=""
                                                        style="margin:auto"><i class="fab fa-facebook-f"></i></a>
                                                </div>
                                                <div class="hexa" style="text-align: center">
                                                    <a class="btn btn-square rounded-circle  red" href=""
                                                        style="margin:auto"><i class="fab fa-youtube"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>

                    </div>
                </div>
            </div>

        </div>
        

     </div>
  </div>
 