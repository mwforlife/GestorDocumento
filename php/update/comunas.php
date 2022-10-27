<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$nombre = $c->escapeString($nombre);
$result = $c->actualizarcomuna($id, $nombre);
if($result == true){
    $c->actualizarciudad($id, $nombre);
    echo 1;
}else{
    echo 0;
}
