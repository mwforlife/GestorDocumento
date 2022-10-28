<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$lista = $c->listarcuidades($id);

if (count($lista)>0) {
    foreach ($lista as $ciudad) {
        echo "<option value='" . $ciudad->getId() . "'>" . $ciudad->getNombre() . "</option>";
    }
}else{
    echo "<option value='0'>No hay ciudades</option>";
}