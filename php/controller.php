<?php

// Include the classes
require 'Class/Afp.php';
require 'Class/Cajacompensacion.php';
require 'Class/Cargos.php';
require 'Class/CausalTermino.php';
require 'Class/Ciudades.php';
require 'Class/Nacionalidad.php';
require 'Class/Comunas.php';
require 'Class/Empresa.php';
require 'Class/Isapres.php';
require 'Class/Jornadas.php';
require 'Class/Mutuales.php';
require 'Class/Permisos.php';
require 'Class/Regiones.php';
require 'Class/TipoContrato.php';
require 'Class/TipoSueldo.php';
require 'Class/TipoDocumento.php';
require 'Class/Trabajadores.php';
require 'Class/Tramos.php';
require 'Class/Users.php';

//Class definition
class Controller
{
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
    private function conexion()
    {
        $this->mi = new mysqli($this->host, $this->user, $this->pass, $this->bd);
        if ($this->mi->connect_errno) {
            echo "Error al conectar con la base de datos";
        }
    }

    //Desconexion
    private function desconectar()
    {
        $this->mi->close();
    }
    /*********************************************************************************** */
    /**Validations */
    //Escape String 
    public function escapeString($text)
    {
        $this->conexion();
        $text = $this->mi->real_escape_string($text);
        $this->desconectar();
        return $text;
    }

    //validar usuario
    public function validarusuario($correo, $rut)
    {
        $this->conexion();
        $sql = "select * from users where email = '$correo' or rut = '$rut'";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $this->desconectar();
            return true;
        } else {
            $this->desconectar();
            return false;
        }
    }
    //validar usuario
    public function validarusuario1($correo, $rut, $id)
    {
        $this->conexion();
        $sql = "select * from users where (email = '$correo' or rut = '$rut') and id_usu != $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $this->desconectar();
            return json_encode(true);
        } else {
            $this->desconectar();
            return json_encode(false);
        }
    }

    //Login
    public function login($user, $pass)
    {
        $this->conexion();
        $sql = "select * from users where rut = '$user' or email = '$user' and password = sha1('$pass')";
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

    public function crearsesion($usuario, $token){
        $this->conexion();
        $sql = "delete from sesionusuario where id_usu = $usuario";
        $result = $this->mi->query($sql);
        $sql = "insert into sesionusuario values(null, $usuario, '$token', now(), now())";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    public function validarsesion($usuario, $token){
        $this->conexion();
        $sql = "select * from sesionusuario where id_usu = $usuario and token = '$token'";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $this->desconectar();
            return true;
        } else {
            $this->desconectar();
            return false;
        }
    }

    //Validar Permiso de Usuario
    public function validarPermiso($usuario, $permiso)
    {
        $this->conexion();
        $sql = "select * from permisosusuarios where idusuario = $usuario and idpermiso = $permiso";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $this->desconectar();
            return true;
        }
        $this->desconectar();
        return false;
    }



    //validarEmpresa
    public function validarEmpresa($rut)
    {
        $this->conexion();
        $sql = "select * from empresa where rut = '$rut'";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $this->desconectar();
            return true;
        }
        $this->desconectar();
        return false;
    }


    //Function to Insert information in the database
    //Registrar Regiones
    public function registrarregiones($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into regiones values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registar Comunas
    public function registrarcomunas($codigo, $codigoPrevired, $nombre, $region)
    {
        $this->conexion();
        $sql = "insert into comunas values (null, '$codigo', '$codigoPrevired', '$nombre', $region)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Ciudades
    public function registrarciudad($codigo, $codigoPrevired, $nombre, $region)
    {
        $this->conexion();
        $sql = "insert into ciudades values (null, '$codigo', '$codigoPrevired', '$nombre', $region)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    
    //Registrar Nacionalidad
    public function registrarnacionalidad($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into nacionalidad values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Afp
    public function registrarafp($codigo, $codigoPrevired, $nombre, $tasa)
    {
        $this->conexion();
        $sql = "insert into afp values (null, '$codigo', '$codigoPrevired', '$nombre', '$tasa')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Isapre
    public function registrarisapre($codigo, $codigoPrevired, $nombre, $tipo)
    {
        $this->conexion();
        $sql = "insert into isapre values (null, '$codigo', '$codigoPrevired', '$nombre', $tipo)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Jornadas
    public function registrarjornada($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into jornadas values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Tipo Sueldo
    public function registrartiposueldo($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into tiposueldo values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Cargos
    public function registrarcargo($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into cargos values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Cajas Compensacion
    public function registrarcajacompensacion($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into cajascompensacion values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Mutuales
    public function registrarmutual($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into mutuales values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Tramos Asignación Familiar
    public function registrartramos($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into tramosasignacionfamiliar values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Tipo Contrato
    public function registrartipocontrato($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into tipocontrato values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Causal Termino Contrato
    public function registrarcausaltermino($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into causalterminocontrato values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Tipo Documento
    public function registrartipodocumento($codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "insert into tipodocumento values (null, '$codigo', '$codigoPrevired', '$nombre')";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Usuarios
    public function registrarusuario($rut, $nombre, $apellido, $correo, $direccion, $region, $comuna, $telefono, $pass)
    {
        $this->conexion();
        $sql = "insert into users values(null, '$rut', '$nombre', '$apellido', '$correo', '$direccion', $region, $comuna, '$telefono', sha1('$pass'), 1, sha1('$correo'), now(), now());";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Asignar Permiso a Usuario
    public function asignarPermisos($usuario, $permiso)
    {
        $this->conexion();
        $sql = "insert into permisosusuarios values(null, $usuario, $permiso)";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Registrar Empresa
    public function RegistrarEmpresa($rut, $razonsocial, $direccion, $region, $comuna, $ciudad, $telefono, $email, $giro, $cajascompensacion, $mutuales, $cotizacionbasica, $cotizacionleysanna, $cotizacionadicional)
    {
        $this->conexion();
        $sql = "insert into empresa values(null, '$rut', '$razonsocial', '$direccion', $region, $comuna, $ciudad, '$telefono', '$email','$giro', $cajascompensacion, $mutuales, $cotizacionbasica, $cotizacionleysanna, $cotizacionadicional,now(), now());";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }
    /********************************************************************************** */
    //Function to get information from the database
    //Listar Regiones
    public function listarregiones()
    {
        $this->conexion();
        $sql = "select * from regiones";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $region = new Regiones($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $region;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Comunas
    public function listarcomunas($id)
    {
        $this->conexion();
        $sql = "select * from comunas where region = $id";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $comuna = new Comunas($id, $codigo, $codigoPrevired, $nombre, $id);
            $lista[] = $comuna;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Ciudades
    public function listarciudades($id)
    {
        $this->conexion();
        $sql = "select * from ciudades where region = $id";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $ciudad = new Ciudades($id, $codigo, $codigoPrevired, $nombre, $id);
            $lista[] = $ciudad;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Ciudades
    public function listarnacionalidad()
    {
        $this->conexion();
        $sql = "select * from nacionalidad";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $ciudad = new Nacionalidad($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $ciudad;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Afp
    public function listarafp()
    {
        $this->conexion();
        $sql = "select * from afp";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tasa = $rs['tasa'];
            $afp = new Afp($id, $codigo, $codigoPrevired, $nombre, $tasa);
            $lista[] = $afp;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Isapre
    public function listarisapre()
    {
        $this->conexion();
        $sql = "select * from isapre";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipo = $rs['tipo'];
            $isapre = new ISAPRES($id, $codigo, $codigoPrevired, $nombre, $tipo);
            $lista[] = $isapre;
        }
        $this->desconectar();
        return $lista;
    }
    //Listar Isapre
    public function listarisapre1()
    {
        $this->conexion();
        $sql = "select isapre.id as id, codigo, codigoprevired, isapre.nombre as nombre, tipoisapre.nombre as tipo from isapre, tipoisapre where isapre.tipo = tipoisapre.id;";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipo = $rs['tipo'];
            $isapre = new ISAPRES($id, $codigo, $codigoPrevired, $nombre, $tipo);
            $lista[] = $isapre;
        }
        $this->desconectar();
        return $lista;
    }



    //Listar Jornada
    public function listarjornada()
    {
        $this->conexion();
        $sql = "select * from jornadas";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipojornada = new Jornadas($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $tipojornada;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Tipo Sueldo
    public function listartiposueldo()
    {
        $this->conexion();
        $sql = "select * from tiposueldo";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tiposueldo = new Tiposueldo($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $tiposueldo;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Cargos
    public function listarcargos()
    {
        $this->conexion();
        $sql = "select * from cargos";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $cargo = new Cargos($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $cargo;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Cajas Compensacion
    public function listarcajascompensacion()
    {
        $this->conexion();
        $sql = "select * from cajascompensacion";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $caja = new Cajacompensacion($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $caja;
        }
        $this->desconectar();
        return $lista;
    }


    //Listar Mutuales
    public function listarmutuales()
    {
        $this->conexion();
        $sql = "select * from mutuales";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $mutual = new Mutuales($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $mutual;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Tramos Asignación Familiar
    public function listartramosasignacionfamiliar()
    {
        $this->conexion();
        $sql = "select * from tramosasignacionfamiliar";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tramo = new Tramos($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $tramo;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Tipo Contrato
    public function listartipocontrato()
    {
        $this->conexion();
        $sql = "select * from tipocontrato";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipocontrato = new Tipocontrato($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $tipocontrato;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Causal Terminación Contrato
    public function listarcausalterminacioncontrato()
    {
        $this->conexion();
        $sql = "select * from causalterminocontrato";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $causal = new CausalTermino($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $causal;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Tipo Documento
    public function listartipodocumento()
    {
        $this->conexion();
        $sql = "select * from tipodocumento";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoPrevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipodocumento = new TipoDocumento($id, $codigo, $codigoPrevired, $nombre);
            $lista[] = $tipodocumento;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Usuarios
    public function listarusuarios()
    {
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

    //Permisos
    public function listarPermisos()
    {
        $this->conexion();
        $sql = "select * from permisos";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $nombre = $rs['nombre'];
            $descripcion = $rs['descripcion'];
            $permiso = new Permisos($id, $nombre, $descripcion);
            $lista[] = $permiso;
        }
        $this->desconectar();
        return $lista;
    }


    //Listar Permisos de Usuario
    public function listarPermisosUsuario($usuario)
    {
        $this->conexion();
        $sql = "select permisosusuarios.id as id, nombre from permisosusuarios,permisos where permisosusuarios.idpermiso = permisos.id and idusuario = $usuario";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $permiso = $rs['nombre'];
            $permisoUsuario = new Permisos($id, $permiso, $usuario);
            $lista[] = $permisoUsuario;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Permisos de Usuario
    public function listarPermisosUsuario1($usuario)
    {
        $this->conexion();
        $sql = "select permisos.id as id, nombre from permisosusuarios,permisos where permisosusuarios.idpermiso = permisos.id and idusuario = $usuario";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $permiso = $rs['nombre'];
            $permisoUsuario = new Permisos($id, $permiso, $usuario);
            $lista[] = $permisoUsuario;
        }
        $this->desconectar();
        return $lista;
    }

    //Listar Empresas
    public function listarEmpresas()
    {
        $this->conexion();
        $sql = "select empresa.id as id, rut, razonsocial, direccion, regiones.nombre as region, comunas.nombre as comuna, ciudades.nombre as ciudad, telefono, email, giro, cajascompensacion.nombre as cajascompensacion, mutuales.nombre as mutuales, cotizacionbasica, cotizacionleysanna, cotizacionadicional, created_at, updated_at from empresa, regiones, comunas, ciudades, cajascompensacion, mutuales where empresa.region = regiones.id and empresa.comuna = comunas.id and empresa.ciudad = ciudades.id and empresa.cajascompensacion = cajascompensacion.id and empresa.mutuales = mutuales.id";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
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
            $cotizacionbasico = $rs['cotizacionbasica'];
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



    /****************************************************************************** */
    //Update Information in Database
    //Actualizar Region
    public function actualizarregion($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update regiones set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Comuna
    public function actualizarcomuna($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update comunas set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Ciudades
    public function actualizarciudad($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update ciudades set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Nacionalidad
    public function actualizarnacionalidad($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update nacionalidad set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }
    //Actualizar AFP
    public function actualizarafp($id, $codigo, $codigoPrevired, $nombre, $tasa)
    {
        $this->conexion();
        $sql = "update afp set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre', tasa='$tasa' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar isapre
    public function actualizarisapre($id, $codigo, $codigoPrevired, $nombre, $tipo)
    {
        $this->conexion();
        $sql = "update isapre set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre', tipo=$tipo where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }


    //Actualizar Jornada
    public function actualizarjornada($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update jornadas set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar tipo Sueldo
    public function actualizartiposueldo($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update tiposueldo set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Cargo
    public function actualizarcargo($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update cargos set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Caja Compensacion
    public function actualizarcajacompensacion($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update cajascompensacion set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Mutual
    public function actualizarmutual($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update mutuales set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Tramos Asignacion Familiar
    public function actualizartromosasignacionfamiliar($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update tramosasignacionfamiliar set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Tipo Contrato
    public function actualizartipocontrato($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update tipocontrato set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Causal Termino Contrato
    public function actualizarcausalterminocontrato($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update causalterminocontrato set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar tipo Documento
    public function actualizartipodocumento($id, $codigo, $codigoPrevired, $nombre)
    {
        $this->conexion();
        $sql = "update tipodocumento set codigo='$codigo', codigoprevired='$codigoPrevired', nombre='$nombre' where id=$id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return $result;
    }

    //Actualizar Usuario
    public function actualizarusuario($id, $rut, $nombre, $apellido, $correo, $direccion, $region, $comuna, $telefono)
    {
        $this->conexion();
        $sql = "update users set rut = '$rut', nombre = '$nombre', apellidos = '$apellido', email = '$correo', direccion = '$direccion', region = $region, comuna = $comuna, telefono = '$telefono', updated_at = now() where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Actualizar Estado
    public function actualizarestado($id, $estado)
    {
        $this->conexion();
        $sql = "update users set estado = $estado where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Actualizar Contraseña
    public function actualizarpass($id, $pass)
    {
        $this->conexion();
        $sql = "update users set password = '$pass' where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }


    //Actualizar Empresa
    public function actualizarEmpresa($id, $rut, $razonsocial, $direccion, $region, $comuna, $ciudad, $telefono, $email, $giro, $cajascompensacion, $mutuales, $cotizacionbasica, $cotizacionleysanna, $cotizacionadicional)
    {
        $this->conexion();
        $sql = "update empresa set rut = '$rut', razonsocial = '$razonsocial', direccion = '$direccion', idregion = $region, idcomuna = $comuna, idciudad = $ciudad, telefono = '$telefono', email = '$email', giro='$giro', idcajascompensacion = $cajascompensacion, idmutuales = $mutuales, cotizacionbasica = $cotizacionbasica, cotizacionleysanna = $cotizacionleysanna, cotizacionadicional = $cotizacionadicional, updated_at = now() where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    /****************************************************************************** */
    //Delete Information in Database
    //Eliminar Regiones
    public function eliminarregion($id)
    {
        $this->conexion();
        $sql = "delete from regiones where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Comunas
    public function eliminarcomuna($id)
    {
        $this->conexion();
        $sql = "delete from comunas where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Ciudad
    public function eliminarciudad($id)
    {
        $this->conexion();
        $sql = "delete from ciudades where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    
    //Eliminar Ciudad
    public function eliminarnacionalidad($id)
    {
        $this->conexion();
        $sql = "delete from nacionalidad where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar AFP
    public function eliminarafp($id)
    {
        $this->conexion();
        $sql = "delete from afp where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Isapre
    public function eliminarisapre($id)
    {
        $this->conexion();
        $sql = "delete from isapre where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Jornadas
    public function eliminarjornadas($id)
    {
        $this->conexion();
        $sql = "delete from jornadas where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Tipo Sueldo
    public function eliminartiposueldo($id)
    {
        $this->conexion();
        $sql = "delete from tiposueldo where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Cargos
    public function eliminarcargo($id)
    {
        $this->conexion();
        $sql = "delete from cargos where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Cajas Compensacion
    public function eliminarcaja($id)
    {
        $this->conexion();
        $sql = "delete from cajascompensacion where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Mutual
    public function eliminarmutual($id)
    {
        $this->conexion();
        $sql = "delete from mutuales where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Tramos Asignacion Familiar
    public function eliminartromasignacionfamiliar($id)
    {
        $this->conexion();
        $sql = "delete from tramosasignacionfamiliar where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Tipo Contrato
    public function eliminartipocontrato($id)
    {
        $this->conexion();
        $sql = "delete from tipocontrato where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Causal Termino Contrato
    public function eliminarcausalterminocontrato($id)
    {
        $this->conexion();
        $sql = "delete from causalterminocontrato where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Tipo Documento
    public function eliminartipodocumento($id)
    {
        $this->conexion();
        $sql = "delete from tipodocumento where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Usuario
    public function eliminarusuario($id)
    {
        $this->conexion();
        $sql = "delete from users where id_usu = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Permiso de Usuario
    public function eliminarPermisoUsuario($id)
    {
        $this->conexion();
        $sql = "delete from permisosusuarios where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    ///Eliminar Todos los Permisos de Usuario
    public function eliminarPermisoUsuario1($id)
    {
        $this->conexion();
        $sql = "delete from permisosusuarios where idusuario = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }

    //Eliminar Empresa
    public function eliminarEmpresa($id)
    {
        $this->conexion();
        $sql = "delete from empresa where id = $id";
        $result = $this->mi->query($sql);
        $this->desconectar();
        return json_encode($result);
    }




    /****************************************************************************** */
    //Search Information in Database
    //Buscar Region
    public function buscarregion($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM regiones WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $region = new Regiones($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $region;
        } else {
            $this->desconectar();
            return null;
        }
    }


    //Buscar Comuna
    public function buscarcomuna($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM comunas WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $region = $rs['region'];
            $comuna = new Comunas($id, $codigo, $codigoprevired, $nombre, $region);
            $this->desconectar();
            return $comuna;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Comuna
    public function buscarnacionalidad($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM nacionalidad WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $comuna = new Nacionalidad($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $comuna;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar afp
    public function buscarafp($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM afp WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tasa = $rs['tasa'];
            $afp = new Afp($id, $codigo, $codigoprevired, $nombre, $tasa);
            $this->desconectar();
            return $afp;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Isapre
    public function buscarisapre($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM isapre WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipo = $rs['tipo'];
            $isapre = new Isapres($id, $codigo, $codigoprevired, $nombre, $tipo);
            $this->desconectar();
            return $isapre;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Jornada
    public function buscarjornada($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM jornadas WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $jornada = new Jornadas($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $jornada;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Tipo Sueldo
    public function buscartiposueldo($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM tiposueldo WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tiposueldo = new Tiposueldo($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $tiposueldo;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar cargos
    public function buscarcargo($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM cargos WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $cargo = new Cargos($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $cargo;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar cajascompensacion
    public function buscarcaja($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM cajascompensacion WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $caja = new Cajacompensacion($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $caja;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Mutual
    public function buscarmutual($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM mutuales WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipomutual = new Mutuales($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $tipomutual;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Tramos Asignacion Familiar
    public function buscartramosasignacionfamiliar($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM tramosasignacionfamiliar WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tramosasignacionfamiliar = new Tramos($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $tramosasignacionfamiliar;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Tipo Contrato
    public function buscartipocontrato($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM tipocontrato WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipocontrato = new Tipocontrato($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $tipocontrato;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Causal Terminacion Contrato
    public function buscarcausalterminacioncontrato($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM causalterminocontrato WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $causal = new CausalTermino($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $causal;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Tipo Documento
    public function buscartipodocumento($id)
    {
        $this->conexion();
        $sql = "SELECT * FROM tipodocumento WHERE id = $id";
        $result = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($result)) {
            $id = $rs['id'];
            $codigo = $rs['codigo'];
            $codigoprevired = $rs['codigoprevired'];
            $nombre = $rs['nombre'];
            $tipodocumento = new TipoDocumento($id, $codigo, $codigoprevired, $nombre);
            $this->desconectar();
            return $tipodocumento;
        } else {
            $this->desconectar();
            return null;
        }
    }

    //Buscar Usuario
    public function getuser($id)
    {
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

    //Buscar Empresa
    public function buscarEmpresa($id)
    {
        $this->conexion();
        $sql = "select empresa.id as id, rut, razonsocial, direccion, regiones.nombre as region, comunas.nombre as comuna, ciudades.nombre as ciudad, telefono, email,giro, cajascompensacion.nombre as cajascompensacion, mutuales.nombre as mutuales, cotizacionbasica, cotizacionleysanna, cotizacionadicional, created_at, updated_at from empresa, regiones, comunas, ciudades, cajascompensacion, mutuales where empresa.idregion = regiones.id and empresa.idcomuna = comunas.id and empresa.idciudad = ciudades.id and empresa.idcajascompensacion = cajascompensacion.id and empresa.idmutuales = mutuales.id and empresa.id = $id";
        $result = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($result)) {
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

    //Buscar Usuario texto
    public function getuser1($id)
    {
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
}
