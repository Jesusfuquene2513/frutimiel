<div class="container-fluid p-0" style="position:relative">
     <div class="row">
        <div class="container-fluid p-0 d-flex">   


 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0" style="position:relative; top:2px; background: red">
    <div class="btn-footer-whatsapp" style="display: flex; align-items: center; position:fixed; z-index: 2000; bottom:0; right:0">
          <a href="#" id="enlace-wasap" target="blank_">  <img src="plantilla_front/img/whatsapp.png" alt="" style="width:130px; height:130px;  cursor:pointer; position:relative; top:60px;" id="btn-whatsapp"></a>
    </div>
    <div class="container-fluid" style="height:15px; background: rgb(223,196,183);
background: linear-gradient(90deg, rgba(223,196,183,1) 10%, rgba(120,68,44,1) 29%, rgba(120,68,44,1) 65%, rgba(255,255,255,1) 97%);" >
                
            </div>
                <div class="container-fluid   footer  pt-5 wow fadeIn" data-wow-delay="0.1s"
                    style="background: red ; color:white; font-weight:bolder; position:relative" >
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <h4 class="mb-4"
                                    style="color:#fcc41a; border-left:5px solid #fcc41a; padding-left: 3px;">CONTACTANOS
                                </h4>

                                <div class="position-relative">
                                    <form action="aplicacion/controllers/routes/routes.php" method="post" class="p-0">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left;">
                                            <label for="">Nombre completo</label>
                                            <input type="text" class="form-control" id="nombre_contacto"
                                                name="nombre_contacto" style="color:black; font-weight:bolder">
                                            <input type="text" name="peticion" value="35" class="d-none">
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left">
                                            <label for="">Tipo Identificación</label>
                                            <select name="tipo_documento" id="sel-documento" class="form-control"
                                                style="cursor:pointer; color:black; font-weight:bolder">
                                                <option value="0">Seleccione tipo de identificación</option>
                                                <option value="1">Cedula de ciudadania</option>
                                                <option value="2">Cedula extranjera</option>
                                                <option value="3">Pasaporte</option>
                                                <option value="4">NIT</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left">
                                            <label for="">Numéro de identificación</label>
                                            <input type="text" name="numero_identificacion" class="form-control"
                                                disabled id="documento" style="color:black; font-weight:bolder">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left">
                                            <label for="">Teléfono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" style="color:black; font-weight:bolder">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left">
                                            <label for="">Correo electronico</label>
                                            <input type="text" class="form-control" id="correo" name="correo" style="color:black; font-weight:bolder">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left">
                                            <label for="">Seleccione Departamento</label>
                                            <select class="form-control" id="sel-departamento" style="cursor:pointer; color:black; font-weight:bolder"
                                                name="departamento">

                                            </select>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left">
                                            <label for="">Seleccione Municipio</label>
                                            <select name="municipio" class="form-control" id="sel-municipio"
                                                style="cursor:pointer; color:black; font-weight:bolder">

                                            </select>
                                        </div>
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left">
                                            <textarea name="consulta" id="consulta" rows="3" class="form-control"
                                                style="resize:none; height:150px; color:black; font-weight:bolder"></textarea>
                                        </div>
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  p-1 mt-1 mb-1 formulario-campos"
                                            style="float:left; text-align: center">
                                            <center>
                                                <input type="button" class="btn btn-primary bt" value="Enviar"
                                                    id="enviar-peticion-contacto">
                                            </center>
                                        </div>
                                    </form>

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