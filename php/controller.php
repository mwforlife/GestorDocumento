<?php
require 'Class/Regiones.php';
require 'Class/Comunas.php';
require 'Class/Ciudades.php';
require 'Class/Users.php';
class Controller{

    //Variables
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "gestordocumentos";
    private $mi;
    
    private function conexion(){
        $this->mi = new mysqli($this->host, $this->user, $this->pass, $this->bd);
        if($this->mi->connect_errno){
            echo "Error al conectar con la base de datos";
        }
    }
    private function desconectar(){
        $this->mi->close();
    }
    
    public function registrarregiones($nombre){
        $this->conexion();
        $sql = "INSERT INTO regiones VALUES(null, '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    public function registrarcomunas($id, $nombre, $region){
        $this->conexion();
        $sql = "INSERT INTO comunas VALUES($id, '$nombre', $region)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    public function registrarciudad($id, $nombre, $region){
        $this->conexion();
        $sql = "INSERT INTO ciudades VALUES($id, '$nombre', $region)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    public function listarregiones(){
        $this->conexion();
        $sql = "SELECT * FROM regiones";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $region = new Regiones($id, $nombre);
            $lista[] = $region;
        }
        $this->desconectar();
        return $lista;
    }

    public function listarcomunas($id){
        $this->conexion();
        $sql = "SELECT * FROM comunas WHERE region = $id";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $region = $rs['region'];
            $comuna = new Comunas($id, $nombre, $region);
            $lista[] = $comuna;
        }
        $this->desconectar();
        return $lista;
    }

    public function listarcuidades($id){
        $this->conexion();
        $sql = "SELECT * FROM ciudades WHERE region = $id";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $region = $rs['region'];
            $ciudad = new Ciudades($id, $nombre, $region);
            $lista[] = $ciudad;
        }
        $this->desconectar();
        return $lista;
    }

    public function registrarusuario($rut, $nombre, $apellido, $correo, 
    $direccion, $region, $comuna, $telefono, $pass ){   
        $this->conexion();
        $sql = "insert into users values(null, '$rut', '$nombre', '$apellido', '$correo', '$direccion', $region, $comuna, '$telefono', sha1('$pass')), 1, sha1('email'), now(), now()";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    public function login($user, $pass){
        $this->conexion();
        $sql = "select * from users where rut = '$user' or correo = '$user' and pass = sha1('$pass')";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $rut = $rs['rut'];
            $nombre = $rs['nombre'];
            $apellidos = $rs['apellidos'];
            $email = $rs['email'];
            $direccion = $rs['direccion'];
            $region = $rs['region'];
            $comuna = $rs['comuna'];
            $telefono = $rs['telefono'];
            $pass = $rs['pass'];
            $estado = $rs['estado'];
            $token = $rs['token'];
            $registro = $rs['registro'];
            $update = $rs['update'];
            $user = new Users($id, $rut, $nombre, $apellidos, $email, $direccion, $region, $comuna, $telefono, $pass, $estado, $token, $registro, $update);
            $this->desconectar();
            return $user;
        }
        $this->desconectar();
        return null;
    }

    public function getuser($id){
        $this->conexion();
        $sql = "select * from users where id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $rut = $rs['rut'];
            $nombre = $rs['nombre'];
            $apellidos = $rs['apellidos'];
            $email = $rs['email'];
            $direccion = $rs['direccion'];
            $region = $rs['region'];
            $comuna = $rs['comuna'];
            $telefono = $rs['telefono'];
            $pass = $rs['pass'];
            $estado = $rs['estado'];
            $token = $rs['token'];
            $registro = $rs['registro'];
            $update = $rs['update'];
            $user = new Users($id, $rut, $nombre, $apellidos, $email, $direccion, $region, $comuna, $telefono, $pass, $estado, $token, $registro, $update);
            $this->desconectar();
            return $user;
        }
        $this->desconectar();
        return null;
    }


}