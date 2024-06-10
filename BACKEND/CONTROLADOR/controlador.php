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



function obtener($nombreIMG)
{
    $extension = pathinfo($_FILES['img']['nom'], PATHINFO_EXTENSION);

    move_uploaded_file($archivo['tmp_nom'], "/img/" . $nombreIMG . $extension);
}


function subir()
{
    $nombre = $_POST['nombre'];
    $extension = $_POST['extension'];

    $extension = pathinfo($_FILES['img']['nom'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['img']['tmp_nom'], "/img/" . $nombre . "." . $extension);

    $resutado = (new imagen())->agregarIMG($nombre, $extension);
    echo json_encode($resutado);
}
