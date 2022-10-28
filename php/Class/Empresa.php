<?php
class Empresa{
    private $id;
    private $rut;
    private $razonsocial;
    private $direccion;
    private $region;
    private $comuna;
    private $ciudad;
    private $telefono;
    private $email;
    private $giro;
    private $cajascompensacion;
    private $mutuales;
    private $cotizacionbasica;
    private $cotizacionleysanna;
    private $cotizacionadicional;
    private $registro;
    private $update;

    public function Empresa($id, $rut, $razonsocial, $direccion, $region, $comuna, $ciudad, $telefono, $email,$giro, $cajascompensacion, $mutuales, $cotizacionbasica, $cotizacionleysanna, $cotizacionadicional, $registro, $update){
        $this->id = $id;
        $this->rut = $rut;
        $this->razonsocial = $razonsocial;
        $this->direccion = $direccion;
        $this->region = $region;
        $this->comuna = $comuna;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->giro = $giro;
        $this->cajascompensacion = $cajascompensacion;
        $this->mutuales = $mutuales;
        $this->cotizacionbasica = $cotizacionbasica;
        $this->cotizacionleysanna = $cotizacionleysanna;
        $this->cotizacionadicional = $cotizacionadicional;
        $this->registro = $registro;
        $this->update = $update;
    }

    public function getId(){
        return $this->id;
    }

    public function getRut(){
        return $this->rut;
    }

    public function getRazonSocial(){
        return $this->razonsocial;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getRegion(){
        return $this->region;
    }

    public function getComuna(){
        return $this->comuna;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getGiro(){
        return $this->giro;
    }

    public function getCajasCompensacion(){
        return $this->cajascompensacion;
    }

    public function getMutuales(){
        return $this->mutuales;
    }

    public function getCotizacionBasica(){
        return $this->cotizacionbasica;
    }

    public function getCotizacionLeySanna(){
        return $this->cotizacionleysanna;
    }

    public function getCotizacionAdicional(){
        return $this->cotizacionadicional;
    }

    public function getRegistro(){
        return $this->registro;
    }

    public function getUpdate(){
        return $this->update;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setRut($rut){
        $this->rut = $rut;
    }

    public function setRazonSocial($razonsocial){
        $this->razonsocial = $razonsocial;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setRegion($region){
        $this->region = $region;
    }

    public function setComuna($comuna){
        $this->comuna = $comuna;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setGiro($giro){
        $this->giro = $giro;
    }

    public function setCajasCompensacion($cajascompensacion){
        $this->cajascompensacion = $cajascompensacion;
    }

    public function setMutuales($mutuales){
        $this->mutuales = $mutuales;
    }

    public function setCotizacionBasica($cotizacionbasica){
        $this->cotizacionbasica = $cotizacionbasica;
    }

    public function setCotizacionLeySanna($cotizacionleysanna){
        $this->cotizacionleysanna = $cotizacionleysanna;
    }

    public function setCotizacionAdicional($cotizacionadicional){
        $this->cotizacionadicional = $cotizacionadicional;
    }

    public function setRegistro($registro){
        $this->registro = $registro;
    }

    public function setUpdate($update){
        $this->update = $update;
    }

}