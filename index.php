<?php include './config/url.php';

if (!empty($_GET['url'])) {
    //$url_auxiliar = "/academic/" . $_GET['url'];
    $url_auxiliar = "/" . $_GET['url'];
    $url_array = explode('/', $_GET['url']);
    $url_server = $_SERVER["REQUEST_URI"];
    //echo $url_auxiliar . '<br>';
    //echo $url_server. '<br>';
    //echo $_GET['url'].'<br>';
    //print_r($url_array).'<br>';
    $title = "";
    //echo URL.'/public/images/logologin.svg"';
    //echo $_GET['url'];
    switch ($_GET['url']) {
        case 'login':
            $title = 'Iniciar sesión en SAM';
            ($url_auxiliar == $url_server) ? include './views/login.php' : header('Location:' . URL . '/login');
            break;

        case 'login/':
            $title = 'Iniciar sesión en SAM';
            ($url_auxiliar == $url_server) ? include './views/login.php' : header('Location:' . URL . '/login');
            break;

        case 'identify':
            $title = "Identificar usuario";
            ($url_auxiliar == $url_server) ? include './views/identify.php' : header('Location:' . URL . '/identify');
            break;

        case 'identify/':
            $title = "Identificar usuario";
            ($url_auxiliar == $url_server) ? include './views/identify.php' : header('Location:' . URL . '/identify');
            break;

        case 'recover':
            $title = "Recuperar cuenta";
            ($url_auxiliar == $url_server) ? include './views/recover.php' : header('Location:' . URL . '/recover');
            break;

        case 'recover/':
            $title = "Recuperar cuenta";
            ($url_auxiliar == $url_server) ? include './views/recover.php' : header('Location:' . URL . '/recover');
            break;

        case 'recover/code':
            $title = "Introducir código";
            ($url_auxiliar == $url_server) ? include './views/code.php' : header('Location:' . URL . '/recover/code');
            break;

        case 'recover/code/':
            $title = "Introducir código";
            ($url_auxiliar == $url_server) ? include './views/code.php' : header('Location:' . URL . '/recover/code');
            break;

        case 'recover/password':
            $title = "Ingresar contraseña nueva";
            ($url_auxiliar == $url_server) ? include './views/password.php' : header('Location:' . URL . '/recover/password');
            break;

        case 'recover/password/':
            $title = "Ingresar contraseña nueva";
            ($url_auxiliar == $url_server) ? include './views/password.php' : header('Location:' . URL . '/recover/password');
            break;

        case 'recover/approachless':
            $title = "Sin acceso";
            ($url_auxiliar == $url_server) ? include './views/approachless.php' : header('Location:' . URL . '/recover/approachless');
            break;

        case 'recover/approachless/':
            $title = "Sin acceso";
            ($url_auxiliar == $url_server) ? include './views/approachless.php' : header('Location:' . URL . '/recover/approachless');
            break;

        case 'home':
            $title = "SAM - Inicio";
            ($url_auxiliar == $url_server) ? include './views/home.php' : header('Location:' . URL . '/home');
            break;

        case 'home/':
            $title = "SAM - Inicio";
            ($url_auxiliar == $url_server) ? include './views/home.php' : header('Location:' . URL . '/home');
            break;

        case 'createaccount':
            $title = "Crear una cuenta de SAM";
            ($url_auxiliar == $url_server) ? include './views/create.php' : header('Location:' . URL . '/createaccount');
            break;

        case 'createaccount/':
            $title = "Crear una cuenta de SAM";
            ($url_auxiliar == $url_server) ? include './views/create.php' : header('Location:' . URL . '/createaccount');
            break;
        default:
            echo '¡La página no existe!';
            break;

    }
} else {
    header('Location:' . URL . '/login');
}