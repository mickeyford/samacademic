<?php
require "../configuracion/conexion.php";
class Login
{

    public function __construct()
    {}

    public function ingresar($ci, $clave)
    {
        $clave = md5($clave);
        return ejecutarConsultaDato("SELECT nombre FROM usuario WHERE ci='$ci' AND clave='$clave' AND estado='1' AND cargo !='Empleado'");
    }

    public function mostrarUsuario($ci, $clave)
    {
        $clave = md5($clave);
        return ejecutarConsultaSimpleFila("SELECT * FROM usuario WHERE ci='$ci' AND clave='$clave'");
    }

    public function mostrarPermisos($id)
    {
        return ejecutarConsulta("SELECT idpermiso FROM usuariopermiso WHERE idusuario='$id'");
    }
}