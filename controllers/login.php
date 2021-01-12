<?php
session_start();
require_once "../modelos/Login.php";
$log = new Login();

$ci = isset($_POST["ci"]) ? limpiarCadena($_POST["ci"]) : "";
$clave = isset($_POST["clave"]) ? limpiarCadena($_POST["clave"]) : "";

switch ($_GET["opcion"]) {

    case 'ingresar':
        $respuesta = $log->ingresar($ci, $clave);
        if ($respuesta == "") {
            echo "";
        } else {
            $rpst = $log->mostrarUsuario($ci, $clave);
            $_SESSION['idusuario'] = $rpst['idusuario'];
            $_SESSION['nombre'] = $rpst['nombre'];
            $_SESSION['apellido'] = $rpst['apellido'];
            $_SESSION['ci'] = $rpst['ci'];
            $_SESSION['cargo'] = $rpst['cargo'];
            $rpsta = $log->mostrarPermisos($_SESSION['idusuario']);
            while ($registro = $rpsta->fetch_object()) {
                switch ($registro->idpermiso) {
                    case '1':
                        $_SESSION['clientes'] = "1";
                        break;
                    case '2':
                        $_SESSION['usuarios'] = "2";
                        break;
                    case '3':
                        $_SESSION['ingresosegresos'] = "3";
                        break;
                    case '4':
                        $_SESSION['compras'] = "4";
                        break;
                    case '5':
                        $_SESSION['ventas'] = "5";
                        break;
                    case '6':
                        $_SESSION['productos'] = "6";
                        break;
                    case '7':
                        $_SESSION['categorias'] = "7";
                        break;
                    case '8':
                        $_SESSION['reportes'] = "8";
                        break;
                }
            }
            echo $_SESSION['cargo'];
        }
        break;

    case 'salir':
        //Limpiamos las variables de sesión
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../login.php");

        break;

}