<?php
require_once "global.php";

$conection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

mysqli_query($conection, 'SET NAMES "' . DB_ENCODE . '"');

//Si tenemos un posible error en la conexión lo mostramos
if (mysqli_connect_errno()) {
    printf("Falló conexión a la base de datos: %s\n", mysqli_connect_error());
    exit();
}

if (!function_exists('run_Query')) {
    function run_Query($sql)
    {
        global $conection;
        $query = $conection->query($sql);
        return $query;
    }

    function run_One_Row($sql)
    {
        global $conection;
        $query = $conection->query($sql);
        $row = $query->fetch_assoc();
        return $row;
    }

    function run_One_data($sql)
    {
        global $conection;
        $query = $conection->query($sql);
        $row = $query->fetch_row();
        return $row[0];
    }

    function return_Id($sql)
    {
        global $conection;
        $query = $conection->query($sql);
        return $conection->insert_id;
    }

    function clean_String($str)
    {
        global $conection;
        $str = mysqli_real_escape_string($conection, trim($str));
        return htmlspecialchars($str);
    }
}