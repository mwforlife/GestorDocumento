<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];
$codigo = $_POST['codigo'];
$codigoPrevired = $_POST['codigoPrevired'];
$nombre = $_POST['nombre'];
$nombre = $c->escapeString($nombre);

$result = $c->actualizarjornada($id, $codigo, $codigoPrevired, $nombre);

if($result == true){
    echo 1;
}else{
    echo 0;
}
