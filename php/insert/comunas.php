<?php
require '../controller.php';
$c = new Controller();
if(isset($_POST['ComunaName']) && isset($_POST['RegionId']) && isset($_POST['ComunaID'])){
 
    $ComunaName = $_POST['ComunaName'];
    $ComunaName = $c->escapeString($ComunaName);
    $RegionId = $_POST['RegionId'];
    $ComunaId = $_POST['ComunaID'];
    $result = $c->registrarcomunas($ComunaId, $ComunaName, $RegionId);
    if($result == true){
        $c->registrarciudad($ComunaId, $ComunaName, $RegionId);
        echo 1;
    }else{
        echo 0;
    }
}