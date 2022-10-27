<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$nombre = $c->escapeString($nombre);

$result = $c->actualizarregion($id, $nombre);

if($result == true){
    echo 1;
}else{
    echo 0;
}
