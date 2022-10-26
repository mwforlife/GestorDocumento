<?php
class Regiones{
    private $id;
    private $nombre;

    public function Regiones($id, $nombre){
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }
}