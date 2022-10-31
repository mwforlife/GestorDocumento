<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$result = $c->eliminarcomuna($id);

if($result == true){
    echo 1;
    $c->eliminarciudad($id);
}else{
    echo 0;
}