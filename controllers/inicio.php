<?php
session_start();
require_once "../modelos/Inicio.php";
$in = new Inicio();

$identrega = isset($_POST["identrega"]) ? limpiarCadena($_POST["identrega"]) : "";

switch ($_GET["opcion"]) {
    case 'listar':
        $respuesta = $in->listar();
        $data = array();
        while ($registro = $respuesta->fetch_object()) {
            if ($registro->estado == "1") {
                $estado = '
                <span class="label label-success">Activado</span>
        ';
            } else {
                $estado = '
                <span class="label label-danger">Desactivado</span>
        ';
            }
            $data[] = array(
                "0" => strtoupper($registro->idproducto),
                "1" => strtoupper($registro->codigo),
                "2" => $estado,
                "3" => $registro->stock,
                "4" => $registro->stockminimo,
            );
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data,
        );
        echo json_encode($results);
        break;

    case 'numprod':
        echo $in->numprod();
        break;

    case 'numcomp':
        echo $in->numcomp();
        break;

    case 'numvent':
        echo $in->numvent();
        break;

    case 'numcli':
        echo $in->numcli();
        break;

    case 'contar':
        echo $in->contar();
        break;

    case 'listar1':
        $respuesta = $in->listar();
        $data = "";
        while ($registro = $respuesta->fetch_object()) {
            $data = $data . ' <li>
            <a href="#">
                <i class="fa fa-shopping-cart text-red"></i>Stock Actual: ' . $registro->stock . '
                 - Producto: ' . $registro->producto . '
            </a>
        </li>';
        }
        echo ($data);
        break;

    case 'menorventa':
        $respuesta = $in->consultaultima();
        $data = array();
        while ($registro = $respuesta->fetch_object()) {
            if ($registro->cantidad == null || $registro->cantidad == "") {
                $cantidad = 0;
            } else {
                $cantidad = $registro->cantidad;
            }
            $data[] = array(
                "0" => strtoupper($registro->producto),
                "1" => strtoupper($cantidad),
            );
        }
        echo json_encode($data);
        break;

    case 'menorventa1':
        $respuesta = $in->consultaultima2();
        $data = array();
        while ($registro = $respuesta->fetch_object()) {
            if ($registro->cantidad == null || $registro->cantidad == "") {
                $cantidad = 0;
            } else {
                $cantidad = $registro->cantidad;
            }
            $data[] = array(
                "0" => strtoupper($registro->producto),
                "1" => strtoupper($cantidad),
            );
        }
        echo json_encode($data);
        break;

    case 'entregar':
        echo $in->entregar($identrega);
        break;

    case 'cancelar':
        echo $in->cancelar($identrega);
        break;
}