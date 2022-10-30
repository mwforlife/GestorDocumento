<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];
$codigo = $_POST['codigo'];
$codigoPrevired = $_POST['codigoPrevired'];
$nombre = $_POST['nombre'];
$nombre = $c->escapeString($nombre);
$tipo = $_POST['tipo'];

$result = $c->actualizarisapre($id, $codigo, $codigoPrevired, $nombre, $tipo);

if($result == true){
    echo 1;
}else{
    echo 0;
}
