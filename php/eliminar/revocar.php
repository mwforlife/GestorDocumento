<?php
require '../controller.php';
$c = new Controller();

$id = $_POST['id'];
$usuario = $_POST['usuario'];
if($id == 0){
    $valid = $c->eliminarPermisoUsuario1($usuario);
    if($valid == true){
        echo 1;
    }else{
        echo 0;
    }
}else{
    $result = $c->eliminarPermisoUsuario($id);
    if ($result==true) {
        echo 1;
    } else {
        echo 0;
    }
}