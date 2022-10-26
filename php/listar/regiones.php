<?php
require '../controller.php';
$c = new Controller();

$lista = $c->listarregiones();

foreach($lista as $region){
    echo $region->getId();
    echo $region->getNombre();
}