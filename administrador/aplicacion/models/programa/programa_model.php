<?php
include_once "../../models/conexion/conexion.php";
class Programa_model{

    public function crear_programa($nombre_programa , $contenido_programa , $portada_programa){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();

        $sentencia = $pdo->prepare("INSERT INTO programas (nombre_programa, contenido_programa , portada_programa , fecha_creacion) VALUES ( :nombre_programa , :contenido , :portada ,  now())");
        $sentencia->bindParam(':nombre_programa', $nombre_programa);
        $sentencia->bindParam(':contenido', $contenido_programa);
        $sentencia->bindParam(':portada', $portada_programa);
       

        $sentencia->execute();
    }

    public function listar_programas(){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();
        $query = "SELECT * FROM `programas`";

        $statement = $pdo->prepare($query);

        $statement->execute();

        return $statement; 
    }

    public function listar_programa_edicion($programa_id){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();
        $query = "SELECT * FROM `programas` WHERE programa_id = '".$programa_id."' ";

        $statement = $pdo->prepare($query);

        $statement->execute();

        return $statement;  
    }

    public function editar_programa($nombre_programa, $contenido_programa, $portada_programa , $programa_id){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();

       
        $sentencia = $pdo->prepare("UPDATE programas SET nombre_programa=:nombre_programa , contenido_programa=:contenido , portada_programa=:portada , fecha_creacion=now()  WHERE programa_id = :programa_id ");
        $sentencia->bindParam(':nombre_programa', $nombre_programa);
        $sentencia->bindParam(':contenido', $contenido_programa);
        $sentencia->bindParam(':portada', $portada_programa); 
        $sentencia->bindParam(':programa_id', $programa_id);  
        
        $sentencia->execute();
    }

    public function  eliminar_programa($programa_id){
        $instancia = new Conexion();
        $pdo = $instancia->establecer_conexion();   
        $sentencia = $pdo->prepare("DELETE FROM programas WHERE programa_id = :programa_id");
       
        $sentencia->bindParam(':programa_id', $programa_id);  
        $sentencia->execute(); 

    }

}
?>