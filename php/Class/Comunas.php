<?php
class Comunas{
    private $id;
    private $nombre;
    private $region;

    public function Comunas($id, $nombre, $region){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->region = $region;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getRegion(){
        return $this->region;
    }
}