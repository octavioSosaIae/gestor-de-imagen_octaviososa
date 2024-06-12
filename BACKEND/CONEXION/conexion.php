<?php
header("Access-Control-Allow-Origin:*");  //  POLITICAS CORS  ----->>>  CUANDO SE TERMINA DE PROGRAMAR SE BORRAN POR SEGURIDAD  

function conexion(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "gestorimagenes";
    $puerto = 3306;

    $mysqli = new mysqli($host, $user, $pass, $db, $puerto);
    return $mysqli;
}

?>