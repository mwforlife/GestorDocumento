<?php
require '../controller.php';
$c = new Controller();

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $nombre = strtoupper($nombre);
    $result = $c->RegistrarCajaCompensacion($nombre);
    if($result == true){
        echo 1;
    }else{
        echo 0;
    }
}