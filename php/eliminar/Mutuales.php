<?php
require '../controller.php';
$c = new Controller();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $value = $c->eliminarMutual($id);
    if($value == true){
        echo 1;
    }else{
        echo 0;
    }
}