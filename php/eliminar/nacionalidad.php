<?php
require '../controller.php';
$c = new Controller();
$id = $_POST['id'];

$result = $c->eliminarnacionalidad($id);

if($result == true){
    echo 1;
}else{
    echo 0;
}