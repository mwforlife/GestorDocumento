<?php
require 'Class/Regiones.php';
require 'Class/Comunas.php';
require 'Class/Ciudades.php';
require 'Class/Users.php';
require 'Class/Permisos.php';
class Controller{

    //Variables
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "gestordocumentos";
    private $mi;
    
    //Conexion
    private function conexion(){
        $this->mi = new mysqli($this->host, $this->user, $this->pass, $this->bd);
        if($this->mi->connect_errno){
            echo "Error al conectar con la base de datos";
        }
    }

    //Desconexion
    private function desconectar(){
        $this->mi->close();
    }

    //Escape String 
    public function escapeString($text){
        $this->conexion();
        $text = $this->mi->real_escape_string($text);
        $this->desconectar();
        return $text;
    }
    
    //Registrar Regiones
    public function registrarregiones($nombre){
        $this->conexion();
        $sql = "INSERT INTO regiones VALUES(null, '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registar Comunas
    public function registrarcomunas($id, $nombre, $region){
        $this->conexion();
        $sql = "insert into comunas values($id, '$nombre', $region)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Ciudades
    public function registrarciudad($id, $nombre, $region){
        $this->conexion();
        $sql = "INSERT INTO ciudades VALUES($id, '$nombre', $region)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Listar Regiones
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
    //Buscar Region
    public function buscarregion($id){
        $this->conexion();
        $sql = "SELECT * FROM regiones WHERE id = $id";
        $result = $this->mi->query($sql);
        if($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $region = new Regiones($id, $nombre);
            $this->desconectar();
            return $region;
        }else{
            $this->desconectar();
            return null;
        }
    }

    //Actualizar REgiones
    public function actualizarregion($id, $nombre){
        $this->conexion();
        $sql = "update regiones set nombre = '$nombre' where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Regiones
    public function eliminarregion($id){
        $this->conexion();
        $sql = "delete from regiones where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Listar Comunas
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

    //Buscar Comuna
    public function buscarcomuna($id){
        $this->conexion();
        $sql = "SELECT * FROM comunas WHERE id = $id";
        $result = $this->mi->query($sql);
        if($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $region = $rs['region'];
            $comuna = new Comunas($id, $nombre, $region);
            $this->desconectar();
            return $comuna;
        }else{
            $this->desconectar();
            return null;
        }
    }

    //actualizar Comunas
    public function actualizarcomuna($id, $nombre){
        $this->conexion();
        $sql = "update comunas set nombre = '$nombre' where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Comunas
    public function eliminarcomuna($id){
        $this->conexion();
        $sql = "delete from comunas where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }




    //Listar Ciudades
    public function listarcuidades($id){
        $this->conexion();
        $sql = "select * from ciudades where region = $id";
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

    //actualizar Ciudad
    public function actualizarciudad($id, $nombre){
        $this->conexion();
        $sql = "update ciudades set nombre = '$nombre' where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Ciudad
    public function eliminarciudad($id){
        $this->conexion();
        $sql = "delete from ciudades where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Usuarios
    public function registrarusuario($rut, $nombre, $apellido, $correo, 
    $direccion, $region, $comuna, $telefono, $pass ){   
        $this->conexion();
        $sql = "insert into users values(null, '$rut', '$nombre', '$apellido', '$correo', '$direccion', $region, $comuna, '$telefono', sha1('$pass'), 1, sha1('$correo'), now(), now());";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //validar usuario
    public function validarusuario($correo, $rut){
        $this->conexion();
        $sql = "select * from users where email = '$correo' or rut = '$rut'";
        $result = $this->mi->query($sql);
        if($rs = mysqli_fetch_array($result)){
            $this->desconectar();
            return true;
        }else{
            $this->desconectar();
            return false;
        }
    }

    //Login
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

    //Buscar Usuario
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
            $registro = $rs['created_at'];
            $update = $rs['updated_at'];
            $user = new Users($id, $rut, $nombre, $apellidos, $email, $direccion, $region, $comuna, $telefono, $pass, $estado, $token, $registro, $update);
            $this->desconectar();
            return $user;
        }
        $this->desconectar();
        return null;
    }

    //listar usuarios
    public function listarusuarios(){
        $this->conexion();
        $sql = "select * from users";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id_usu'];
            $rut = $rs['rut'];
            $nombre = $rs['nombre'];
            $apellidos = $rs['apellidos'];
            $email = $rs['email'];
            $direccion = $rs['direccion'];
            $region = $rs['region'];
            $comuna = $rs['comuna'];
            $telefono = $rs['telefono'];
            $pass = $rs['password'];
            $estado = $rs['estado'];
            $token = $rs['token'];
            $registro = $rs['created_at'];
            $update = $rs['updated_at'];
            $user = new Users($id, $rut, $nombre, $apellidos, $email, $direccion, $region, $comuna, $telefono, $pass, $estado, $token, $registro, $update);
            $lista[] = $user;
        }
        $this->desconectar();
        return $lista;
    }

    //Permisos
    public function listarPermisos(){
        $this->conexion();
        $sql = "select * from permisos";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $descripcion = $rs['descripcion'];
            $permiso = new Permisos($id, $nombre, $descripcion);
            $lista[] = $permiso;
        }
        $this->desconectar();
        return $lista;
    }

    //Asignar Permiso a Usuario
    public function asignarPermisos($usuario, $permiso){
        $this->conexion();
        $sql = "insert into permisosusuarios values(null, $usuario, $permiso)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Listar Permisos de Usuario
    public function listarPermisosUsuario($usuario){
        $this->conexion();
        $sql = "select permisosusuarios.id as id, nombre from permisosusuarios,permisos where permisosusuarios.idpermiso = permisos.id and idusuario = $usuario";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $permiso = $rs['nombre'];
            $permisoUsuario = new Permisos($id, $usuario, $permiso);
            $lista[] = $permisoUsuario;
        }
        $this->desconectar();
        return $lista;
    }


}