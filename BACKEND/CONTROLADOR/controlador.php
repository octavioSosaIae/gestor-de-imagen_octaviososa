<?php
require_once "../MODELO/modelo.php";


$function = $_GET['function'];


switch ($function) {

    case "obtenerImagen":

        obtener();

        break;

    case "subirImagen":

        subir();
        break;
}



function obtener()
{
    $imagenes = (new imagen())->obtenerImg();
    echo json_encode($imagenes);

}


function subir()
{
    $nombre = $_POST ['nombre'];
    $imagen = $_FILES ['imagen'];
   $resultado = (new imagen())->subirImg($nombre,$imagen);
   echo json_encode($resultado);

}

?>