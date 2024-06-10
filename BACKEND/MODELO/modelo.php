<?php
require_once "../CONEXION/conexion.php";


class imagen
{

    function obtenerIMG(){

        $conexion = new con;
        $con = $conexion->conexion();
        $sql = "SELECT * FROM imagen;";
        $respuesta = $con->query($sql);
        $imagen = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagen;

    }



    function agregarIMG($nombre,$extension){

        $conexion = new con;
        $con = $conexion->conexion();
        $sql = "INSERT INTO imagen VALUES( 0 ,'$nombre', '$extension');";
        $respuesta = $con->query($sql);
        return $respuesta;

    }

}






















?>