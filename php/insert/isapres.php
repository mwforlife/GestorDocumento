<?php
require '../controller.php';
$c = new Controller();
if(isset($_POST['Codigo']) && isset($_POST['CodigoPrevired']) && isset($_POST['Nombre'])){
    $codigo = $_POST['Codigo'];
    $codigoPrevired = $_POST['CodigoPrevired'];
    $nombre = $_POST['Nombre'];
    $tipo = $_POST['Tipo'];
    $result = $c->registrarisapre($codigo,$codigoPrevired, $nombre, $tipo);

    if($result == true){
        echo 1;
    }else{
        echo 0;
    }
}