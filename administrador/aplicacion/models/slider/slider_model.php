<?php
include_once "../../models/conexion/conexion.php";
class Slider_model{
    public function crear_banner($nombre_banner , $portada){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();

       $sentencia = $pdo->prepare("INSERT INTO slider (slider_nombre , slider_imagen , fecha_creacion) VALUES ( :nombre_banner , :portada ,  now())");
        $sentencia->bindParam(':nombre_banner', $nombre_banner);
      
        $sentencia->bindParam(':portada', $portada);

        $sentencia->execute();
    }

    public function listar_banners(){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();
        $query = "SELECT * FROM `slider`";

        $statement = $pdo->prepare($query);

        $statement->execute();

        return $statement;  

    }

    public function consulta_banner_edicion($banner_id){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();
        $query = "SELECT * FROM `slider` WHERE slider_id = '".$banner_id."' ";

        $statement = $pdo->prepare($query);

        $statement->execute();

        return $statement; 
    }

    public function editar_banner($nombre_banner , $portada , $slider_id){

        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();

       
        $sentencia = $pdo->prepare("UPDATE slider SET slider_nombre=:slider_nombre ,  slider_imagen=:portada , fecha_creacion=now()  WHERE slider_id = :slider_id ");
        $sentencia->bindParam(':slider_nombre', $nombre_banner);
        
        $sentencia->bindParam(':portada', $portada); 
        $sentencia->bindParam(':slider_id', $slider_id);  
        
        $sentencia->execute();

    }

    public function eliminar_banner($slider_id){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();   
        $sentencia = $pdo->prepare("DELETE FROM slider WHERE slider_id = :slider_id");
       
        $sentencia->bindParam(':slider_id', $slider_id);  
        $sentencia->execute(); 
    }
}
?>