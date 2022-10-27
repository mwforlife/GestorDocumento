<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$region = $c->buscarcomuna($id);

if($region != null){
    echo "<div class='row'";
        echo "<div class='col-md-12'>";
        echo "<label>Nombre</label>";
        echo "<input type='text' class='form-control' id='nombre' value='".$region->getNombre()."'>";
        echo "</div>";
        echo "<div class='col-md-12 text-right mt-3'>";
        echo "<button class='btn btn-primary' onclick='actualizarcomuna(".$region->getId().")'> <i class='fa fa-refresh'></i> Actualizar</button>";
        echo "</div>";
    echo "</div>";
}else{
    echo "<div class='alert alert-danger'>No se encontro la region</div>";
}