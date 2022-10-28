<?php
require '../controller.php';
$c = new Controller();

if(isset($_POST['id']) && isset($_POST['pass'])){
    $id = $_POST['id'];
    $password = $_POST['pass'];
    if(strlen($password) <=0){
        echo "La contraseña no puede estar vacia";
        return;
    }
    $password = sha1($password);
    $result = $c->actualizarpass($id, $password);
    if($result==true){
        echo 1;
    }else{
        echo 0;
    }
}