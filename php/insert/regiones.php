<?php
require '../controller.php';
$c = new Controller();
if(isset($_POST['RegionName'])){
    $RegionName = $_POST['RegionName'];
    $result = $c->registrarregiones($RegionName);
    if($result == true){
        echo 1;
    }else{
        echo 0;
    }
}