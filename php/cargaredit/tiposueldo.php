<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$isapre = $c->buscartiposueldo($id);

if($isapre != null){
    echo "<div class='row'>";
        echo "<div class='col-md-12'>";
        echo "<label>Codigo</label>";
        echo "<input type='text' class='form-control' id='codigo' value='".$isapre->getCodigo()."'/>";
        echo "</div>";

        echo "<div class='col-md-12'>";
        echo "<label>Codigo (PREVIRED)</label>";
        echo "<input type='text' class='form-control' id='codigoPrevired' value='".$isapre->getCodigoPrevired()."'/>";
        echo "</div>";

        echo "<div class='col-md-12'>";
        echo "<label>Nombre</label>";
        echo "<input type='text' class='form-control' id='nombre' value='".$isapre->getNombre()."'/>";
        echo "</div>";

        echo "<div class='col-md-12 text-right mt-3'>";
        echo "<button class='btn btn-primary' onclick='Actualizar(".$isapre->getId().")'> <i class='fa fa-refresh'></i> Actualizar</button>";
        echo "</div>";

    echo "</div>";
}else{
    echo "<div class='alert alert-danger'>No se encontro la region</div>";
}