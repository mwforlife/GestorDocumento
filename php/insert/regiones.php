<?php
require '../controller.php';
$c = new Controller();
if(isset($_POST['Codigo']) && isset($_POST['CodigoPrevired']) && isset($_POST['Nombre']) ){
    $codigo = $_POST['Codigo'];
    $codigoPrevired = $_POST['CodigoPrevired'];
    $nombre = $_POST['Nombre'];
    $nombre = strtoupper($nombre);
    $nombre = $c->escapeString($nombre);
    $result = $c->registrarregiones($codigo,$codigoPrevired, $nombre);

    if($result == true){
        echo 1;
    }else{
        echo 0;
    }
}