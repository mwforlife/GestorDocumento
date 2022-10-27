<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$result = $c->eliminarcomuna($id);
if($result == true){
    $c->eliminarciudad($id);
    echo 1;
}else{
    echo 0;
}