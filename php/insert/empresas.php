<?php
require '../controller.php';
$c = new Controller();

if(isset($_POST['EnterpriseRut']) && isset($_POST['EnterpriseNombre']) && isset($_POST['EnterpriseDireccion']) && isset($_POST['EnterpriseRegion']) && isset($_POST['EnterpriseComuna']) && isset($_POST['EnterpriseCiudad']) && isset($_POST['EnterpriseTelefono']) && isset($_POST['EnterpriseCorreo']) && isset($_POST['EnterpriseGire']) && isset($_POST['EnterpriseCaja']) && isset($_POST['EnterpriseMutual']) && isset($_POST['EnterpriseCotizacionB']) && isset($_POST['EnterpriseCotizacionL']) && isset($_POST['EnterpriseCotizacionC'])){
    $EnterpriseRut = $_POST['EnterpriseRut'];
    $EnterpriseNombre = $_POST['EnterpriseNombre'];
    $EnterpriseNombre = $c->escapeString($EnterpriseNombre);
    $EnterpriseNombre = strtoupper($EnterpriseNombre);
    $EnterpriseDireccion = $_POST['EnterpriseDireccion'];
    $EnterpriseDireccion = $c->escapeString($EnterpriseDireccion);
    $EnterpriseDireccion = strtoupper($EnterpriseDireccion);
    $EnterpriseRegion = $_POST['EnterpriseRegion'];
    $EnterpriseComuna = $_POST['EnterpriseComuna'];
    $EnterpriseCiudad = $_POST['EnterpriseCiudad'];
    $EnterpriseTelefono = $_POST['EnterpriseTelefono'];
    $EnterpriseTelefono = $c->escapeString($EnterpriseTelefono);
    $EnterpriseCorreo = $_POST['EnterpriseCorreo'];
    $EnterpriseCorreo = $c->escapeString($EnterpriseCorreo);
    $EnterpriseGire = $_POST['EnterpriseGire'];
    $EnterpriseGire = $c->escapeString($EnterpriseGire);
    $EnterpriseGire = strtoupper($EnterpriseGire);
    $EnterpriseCaja = $_POST['EnterpriseCaja'];
    $EnterpriseMutual = $_POST['EnterpriseMutual'];
    $EnterpriseCotizacionB = $_POST['EnterpriseCotizacionB'];
    $EnterpriseCotizacionB = floatval($EnterpriseCotizacionB);
    $EnterpriseCotizacionL = $_POST['EnterpriseCotizacionL'];
    $EnterpriseCotizacionL = floatval($EnterpriseCotizacionL);
    $EnterpriseCotizacionC = $_POST['EnterpriseCotizacionC'];
    $EnterpriseCotizacionC = floatval($EnterpriseCotizacionC);
    
    $valid = $c->validarEmpresa($EnterpriseRut);
    if($valid==true){
        echo 2;
    }else{
        $result = $c->RegistrarEmpresa($EnterpriseRut, $EnterpriseNombre, $EnterpriseDireccion, $EnterpriseRegion, $EnterpriseComuna, $EnterpriseCiudad, $EnterpriseTelefono, $EnterpriseCorreo, $EnterpriseGire, $EnterpriseCaja, $EnterpriseMutual, $EnterpriseCotizacionB, $EnterpriseCotizacionL, $EnterpriseCotizacionC);
        if($result==true){
            echo 1;
        }else{
            echo 0;
        }
    }
    
}