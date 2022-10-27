<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$lista = $c->listarcomunas($id);

foreach ($lista as $comuna) {
    echo "<option value='" . $comuna->getId() . "'>" . $comuna->getNombre() . "</option>";
}
