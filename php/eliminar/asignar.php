<?php
require '../controller.php';
$c = new Controller();

$id = $_POST['id'];
$usuario = $_POST['usuario'];

if($id == 0){
    $valid = $c->validarPermiso($usuario,1);
    if($valid == false){
        $c->asignarPermisos($usuario, 1);
    }

    $valid = $c->validarPermiso($usuario,2);
    if($valid == false){
        $c->asignarPermisos($usuario, 2);
    }

    $valid = $c->validarPermiso($usuario,3);
    if($valid == false){
        $c->asignarPermisos($usuario, 3);
    }

    $valid = $c->validarPermiso($usuario,4);
    if($valid == false){
        $c->asignarPermisos($usuario, 4);
    }
    echo 1;
}else{
    $result = $c->asignarPermisos($usuario, $id);
    if ($result==true) {
        echo 1;
    } else {
        echo 0;
    }
}