<?php
require '../controller.php';
$c = new Controller();

$lista = $c->listarregiones();

foreach ($lista as $region) {
    echo "<option value='" . $region->getId() . "'>" . $region->getNombre() . "</option>";
}
