<?php
require 'Class/Regiones.php';
require 'Class/Comunas.php';
require 'Class/Ciudades.php';
require 'Class/Users.php';
require 'Class/Permisos.php';
require 'Class/Cajacompensacion.php';
require 'Class/Mutuales.php';
require 'Class/Empresa.php';

class Controller{
    private $host = "localhost";

    /*Variables*/
    private $user = "root";
    private $pass = "";
    private $bd = "gestordocumentos";

    
    /*Variables BD Remota
    private $user = 'kaiserte_admin';
    private $pass = 'Kaiser2022$';
    private $bd = 'kaiserte_gd';*/
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
    //validar usuario
    public function validarusuario1($correo, $rut, $id){
        $this->conexion();
        $sql = "select * from users where (email = '$correo' or rut = '$rut') and id_usu != $id";
        $result = $this->mi->query($sql);
        if($rs = mysqli_fetch_array($result)){
            $this->desconectar();
            return json_encode(true);
        }else{
            $this->desconectar();
            return json_encode(false);
        }
    }

    //Login
    public function login($user, $pass){
        $this->conexion();
        $sql = "select * from users where rut = '$user' or correo = '$user' and password = sha1('$pass')";
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
            $pass = $rs['password'];
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
        $sql = "select * from users where id_usu = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
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
            $this->desconectar();
            return $user;
        }
        $this->desconectar();
        return null;
    }

    //Buscar Usuario texto
    public function getuser1($id){
    $this->conexion();
    $sql = "select id_usu,rut, users.nombre as nombre, apellidos, email, direccion, regiones.nombre as region, comunas.nombre as comuna, telefono, password, status.nombre as estado, token, created_at, updated_at from users, regiones, comunas, status where regiones.id = users.region and comunas.id = users.comuna and status.id = users.estado and users.id_usu = $id";
    $result = $this->mi->query($sql);
    if ($rs = mysqli_fetch_array($result)) {
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
        $this->desconectar();
        return $user;
    }
    $this->desconectar();
    return null;
    }

    //Listar Usuarios
    public function listarusuarios(){
        $this->conexion();
        $sql = "select * from users";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
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

    //Actualizar Usuario
    public function actualizarusuario($id, $rut, $nombre, $apellido, $correo, $direccion, $region, $comuna, $telefono ){
        $this->conexion();
        $sql = "update users set rut = '$rut', nombre = '$nombre', apellidos = '$apellido', email = '$correo', direccion = '$direccion', region = $region, comuna = $comuna, telefono = '$telefono', updated_at = now() where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Actualizar Estado
    public function actualizarestado($id, $estado){
        $this->conexion();
        $sql = "update users set estado = $estado where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Actualizar Contraseña
    public function actualizarpass($id, $pass){
        $this->conexion();
        $sql = "update users set password = '$pass' where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Usuario
    public function eliminarusuario($id){
        $this->conexion();
        $sql = "delete from users where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
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

    //Validar Permiso de Usuario
    public function validarPermiso($usuario, $permiso){
        $this->conexion();
        $sql = "select * from permisosusuarios where idusuario = $usuario and idpermiso = $permiso";
        $result = $this->mi->query($sql);
        if($rs = mysqli_fetch_array($result)){
            $this->desconectar();
            return true;
        }
        $this->desconectar();
        return false;
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
            $permisoUsuario = new Permisos($id, $permiso, $usuario);
            $lista[] = $permisoUsuario;
        }
        $this->desconectar();
        return $lista;
    }

    //Eliminar Permiso de Usuario
    public function eliminarPermisoUsuario($id){
        $this->conexion();
        $sql = "delete from permisosusuarios where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    ///Eliminar Todos los Permisos de Usuario
    public function eliminarPermisoUsuario1($id){
        $this->conexion();
        $sql = "delete from permisosusuarios where idusuario = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }


    //RegistrarCaja Compensacion
    public function RegistrarCajaCompensacion($nombre){
        $this->conexion();
        $sql = "insert into cajascompensacion values(null, '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Listar Cajas Compensacion
    public function listarCajasCompensacion(){
        $this->conexion();
        $sql = "select * from cajascompensacion";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $caja = new Cajacompensacion($id, $nombre);
            $lista[] = $caja;
        }
        $this->desconectar();
        return $lista;
    }

    //Actualizar Caja Compensacion
    public function actualizarCajaCompensacion($id, $nombre){
        $this->conexion();
        $sql = "update cajascompensacion set nombre = '$nombre' where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Caja Compensacion
    public function eliminarCajaCompensacion($id){
        $this->conexion();
        $sql = "delete from cajascompensacion where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Mutuales
    public function RegistrarMutual($nombre){
        $this->conexion();
        $sql = "insert into mutuales values(null, '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Listar Mutuales
    public function listarMutuales(){
        $this->conexion();
        $sql = "select * from mutuales";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $mutual = new Mutuales($id, $nombre);
            $lista[] = $mutual;
        }
        $this->desconectar();
        return $lista;
    }

    //Actualizar Mutual
    public function actualizarMutual($id, $nombre){
        $this->conexion();
        $sql = "update mutuales set nombre = '$nombre' where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Mutual
    public function eliminarMutual($id){
        $this->conexion();
        $sql = "delete from mutuales where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //validarEmpresa
    public function validarEmpresa($rut){
        $this->conexion();
        $sql = "select * from empresa where rut = '$rut'";
        $result = $this->mi->query($sql);
        if($rs = mysqli_fetch_array($result)){
            $this->desconectar();
            return true;
        }
        $this->desconectar();
        return false;
    }

    //Registrar Empresa
    public function RegistrarEmpresa($rut, $razonsocial, $direccion, $region, $comuna, $ciudad, $telefono, $email, $giro, $cajascompensacion, $mutuales, $cotizacionbasica, $cotizacionleysanna, $cotizacionadicional){
        $this->conexion();
        $sql = "insert into empresa values(null, '$rut', '$razonsocial', '$direccion', $region, $comuna, $ciudad, '$telefono', '$email','$giro', $cajascompensacion, $mutuales, $cotizacionbasica, $cotizacionleysanna, $cotizacionadicional,now(), now());";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Listar Empresas
    public function listarEmpresas(){
        $this->conexion();
        $sql = "select empresa.id as id, rut, razonsocial, direccion, regiones.nombre as region, comunas.nombre as comuna, ciudades.nombre as ciudad, telefono, email, giro, cajascompensacion.nombre as cajascompensacion, mutuales.nombre as mutuales, cotizacionbasica, cotizacionleysanna, cotizacionadicional, created_at, updated_at from empresa, regiones, comunas, ciudades, cajascompensacion, mutuales where empresa.idregion = regiones.id and empresa.idcomuna = comunas.id and empresa.idciudad = ciudades.id and empresa.idcajascompensacion = cajascompensacion.id and empresa.idmutuales = mutuales.id";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $rut = $rs['rut'];
            $razonsocial = $rs['razonsocial'];
            $direccion = $rs['direccion'];
            $region = $rs['region'];
            $comuna = $rs['comuna'];
            $ciudad = $rs['ciudad'];
            $telefono = $rs['telefono'];
            $email = $rs['email'];
            $giro = $rs['giro'];
            $cajascompensacion = $rs['cajascompensacion'];
            $mutuales = $rs['mutuales'];
            $cotizacionbasico = $rs['cotizacionbasico'];
            $cotizacionleysanna = $rs['cotizacionleysanna'];
            $cotizacionadicional = $rs['cotizacionadicional'];
            $created_at = $rs['created_at'];
            $updated_at = $rs['updated_at'];
            $empresa = new Empresa($id, $rut, $razonsocial, $direccion, $region, $comuna, $ciudad, $telefono, $email, $giro, $cajascompensacion, $mutuales, $cotizacionbasico, $cotizacionleysanna, $cotizacionadicional, $created_at, $updated_at);
            $lista[] = $empresa;
        }
        $this->desconectar();
        return $lista;
    }

    //Buscar Empresa
    public function buscarEmpresa($id){
        $this->conexion();
        $sql = "select empresa.id as id, rut, razonsocial, direccion, regiones.nombre as region, comunas.nombre as comuna, ciudades.nombre as ciudad, telefono, email,giro, cajascompensacion.nombre as cajascompensacion, mutuales.nombre as mutuales, cotizacionbasica, cotizacionleysanna, cotizacionadicional, created_at, updated_at from empresa, regiones, comunas, ciudades, cajascompensacion, mutuales where empresa.idregion = regiones.id and empresa.idcomuna = comunas.id and empresa.idciudad = ciudades.id and empresa.idcajascompensacion = cajascompensacion.id and empresa.idmutuales = mutuales.id and empresa.id = $id";
        $result = $this->mi->query($sql);
        $lista = array();
        while($rs = mysqli_fetch_array($result)){
            $id = $rs['id'];
            $rut = $rs['rut'];
            $razonsocial = $rs['razonsocial'];
            $direccion = $rs['direccion'];
            $region = $rs['region'];
            $comuna = $rs['comuna'];
            $ciudad = $rs['ciudad'];
            $telefono = $rs['telefono'];
            $email = $rs['email'];
            $giro = $rs['giro'];
            $cajascompensacion = $rs['cajascompensacion'];
            $mutuales = $rs['mutuales'];
            $cotizacionbasico = $rs['cotizacionbasico'];
            $cotizacionleysanna = $rs['cotizacionleysanna'];
            $cotizacionadicional = $rs['cotizacionadicional'];
            $created_at = $rs['created_at'];
            $updated_at = $rs['updated_at'];
            $empresa = new Empresa($id, $rut, $razonsocial, $direccion, $region, $comuna, $ciudad, $telefono, $email,$giro, $cajascompensacion, $mutuales, $cotizacionbasico, $cotizacionleysanna, $cotizacionadicional, $created_at, $updated_at);
            $lista[] = $empresa;
        }
        $this->desconectar();
        return $lista;
    }
    

    //Actualizar Empresa
    public function actualizarEmpresa($id, $rut, $razonsocial, $direccion, $region, $comuna, $ciudad, $telefono, $email, $giro, $cajascompensacion, $mutuales, $cotizacionbasica, $cotizacionleysanna, $cotizacionadicional){
        $this->conexion();
        $sql = "update empresa set rut = '$rut', razonsocial = '$razonsocial', direccion = '$direccion', idregion = $region, idcomuna = $comuna, idciudad = $ciudad, telefono = '$telefono', email = '$email', giro='$giro', idcajascompensacion = $cajascompensacion, idmutuales = $mutuales, cotizacionbasica = $cotizacionbasica, cotizacionleysanna = $cotizacionleysanna, cotizacionadicional = $cotizacionadicional, updated_at = now() where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Empresa
    public function eliminarEmpresa($id){
        $this->conexion();
        $sql = "delete from empresa where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }



}