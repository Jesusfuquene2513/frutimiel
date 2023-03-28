<?php
if(isset($_SESSION['cliente'])){
    
}else{
   $_SESSION['cliente'] = 1;
    contadorvisitas();
  
}
$_SESSION['user']= 1;
if(!isset($_SESSION['user'])){// Esta logeado?.
 header("Location: logout.php"); 
}
// La variable $_SESSION['usuario'] es un ejemplo.

//Verifico el tiempo si esta seteado, caso contrario lo seteo.
if(isset($_SESSION['time'])){
 $tiempo = $_SESSION['time'];
}else{
 $tiempo = strtotime(date("Y-m-d H:i:s"));
}

$inactividad =100;   //Exprecion en segundos.

$actual =  strtotime(date("Y-m-d H:i:s"));

if( ($actual-$tiempo) >= $inactividad){
 contadorvisitas();
 // En caso que este sea mayor del tiempo seteado lo deslogea.
}else{
 $_SESSION['time'] =$actual;
}



//contadorvisitas();
function contadorvisitas()
    {
       
     $ruta_archivo = 'contadorvisitas.txt';
    $path = 'application/contador/'.$ruta_archivo;
  $archivo = file_get_contents($path);
  $suma = $archivo + 1;
  
    
    $archivo2 = file_get_contents($path);
$fp = fopen($path, 'w');
fwrite($fp, $suma ); 
    $_SESSION["visitantes"] = $suma;
    fclose($fp);  
       
    }
$direccion = "Direccion Fupdeco";
$_SESSION["direccion"]=$direccion;

$telefono = "Telefono Fupdeco";
$_SESSION["telefono"] = $telefono;



$dia = date('d');

$mes = date('m');

switch ($mes) {
    case '01':
       $mes = "Enero";
        break;
    
   case '02':
       $mes = "Febrero";
       break;
       case '03':
           $mes = "Marzo";
           break;

           case '04':
               $mes = "Abril";
               break;
               case '05':
                   $mes = "Mayo";
                   break;
                   case '06':
                       $mes = "Junio";
                       break;
                       case '07':
                           $mes = "Julio";
                           break;
                           case '08':
                               $mes = "Agosto";
                               break;
                               case '09':
                                   $mes = "Septiembre";
                                   break;
                                   case '10':
                                       $mes = "Octubre";
                                       break;
                                       case '11':
                                           $mes = "Noviembre";
                                           break;
                                           case '12':
                                               $mes = "Diciembre";
                                               break;

                                               
}
$year = date('Y');
?>
<nav class="navbar navbar-expand-custom navbar-mainbg fixed-top pt-2 pb-2"  style="display: flex; align-items: center; width:100%;">
       
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="menu-1" style="color:#167c47; border:none">
        <i class="fas fa-bars"></i>
        </button>
         <span class="nav-item m-auto p-0 logo-superior" style="background-color: none; border:none; position:relative;">
                  <a href="index.php"> <img src="../plantilla/assets/img/logo.png" alt="" class="img-fluid" style="width:230px;"></a>
                </span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
               
                <li class="nav-item">
                    <a class="nav-link" href="../index.php/Home"></i> Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php/About"></i>Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php/Portafolio">  </i>Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php/Publicaciones">   </i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php/Blog"> </i>Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php/Contacto"></i>Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>