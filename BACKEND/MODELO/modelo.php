<?php
require_once "../CONEXION/conexion.php";


class imagen {
    

    public function subirImg($nombre, $imagen){
        $connection = conexion();
        $nomImg = $imagen['name'];
        $extension = pathinfo($nomImg, PATHINFO_EXTENSION);
        $sql = "INSERT INTO imagen VALUES(0,'$nombre', '$extension');";
        $connection->query($sql);
        $id = $connection->insert_id;
        $rutaTemp = $imagen['tmp_name'];
        move_uploaded_file($rutaTemp, "../IMAGENES/$id.$extension");
    }


    public function obtenerImg(){

        $connection = conexion();
        $sql = "SELECT * FROM imagen";
        $respuesta = $connection->query($sql);
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;

    }



}


















?>