<?php
require '../controller.php';
$c = new Controller();
if(isset($_POST['Codigo']) && isset($_POST['CodigoPrevired']) && isset($_POST['Nombre']) ){
    $codigo = $_POST['Codigo'];
    $codigoPrevired = $_POST['CodigoPrevired'];
    $nombre = $_POST['Nombre'];
    $region = $_POST['Region'];
    $result = $c->registrarcomunas($codigo,$codigoPrevired, $nombre, $region);

    if($result == true){
        echo 1;
        $c->registrarciudad($codigo, $codigoPrevired, $nombre, $region);
    }else{
        echo 0;
    }
}