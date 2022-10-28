<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$lista = $c->listarcomunas($id);

if(count($lista)>0){
foreach ($lista as $comuna) {
    echo "<option value='" . $comuna->getId() . "'>" . $comuna->getNombre() . "</option>";
}
}else{
    echo "<option value='0'>No hay Comunas</option>";
}