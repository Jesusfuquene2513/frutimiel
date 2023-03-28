<?php
session_start();
include_once "../../models/login/login_model.php";
class Login_controller{
    public function login_validation($usuario , $clave){
$instancia = new Login_model();
$peticion_login = $instancia -> login($usuario , $clave);



if($peticion_login == 0){

    echo '<script>
    alert("USUARIO O CONTRASEÑA INCORRECTOS");
 location.href = "../../../login.php";

    </script>';
    $_SESSION['administrador'] = 0;

}
if($peticion_login == 1){

    echo '<script>
    alert("BIENVENIDO AL SISTEMA");
    location.href = "../../../dashboard.php?window=0";
    </script>';
    $_SESSION['administrador'] = $usuario;

}


    }
}