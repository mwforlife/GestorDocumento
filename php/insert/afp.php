<?php
require '../controller.php';
$c = new Controller();
if(isset($_POST['Codigo']) && isset($_POST['CodigoPrevired']) && isset($_POST['Nombre']) && isset($_POST['Tasa'])){
    $codigo = $_POST['Codigo'];
    $codigoPrevired = $_POST['CodigoPrevired'];
    $nombre = $_POST['Nombre'];
    $tasa = $_POST['Tasa'];
    $result = $c->registrarafp($codigo,$codigoPrevired, $nombre, $tasa);

    if($result == true){
        echo 1;
    }else{
        echo 0;
    }
}