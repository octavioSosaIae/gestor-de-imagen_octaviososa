<?php


header("Access-Control-Allow-Origin:*");  //BORRAR


class con{

    function conexion(){

    $host = "localhost";
    $usuario = "root";
    $password = "";  
    $bd = "gestor";    
    $puerto = 3306;  
    $conn = new mysqli($host, $usuario, $password, $bd, $puerto);   

    return $conn;
    
}


}























?>