<?php
session_start();
require_once "../modelos/Producto.php";
$prod = new Producto();

$idproducto = isset($_POST["idproducto"]) ? limpiarCadena($_POST["idproducto"]) : "";
$idcategoria = isset($_POST["idcategoria"]) ? limpiarCadena($_POST["idcategoria"]) : "";
$codigo = isset($_POST["codigo"]) ? limpiarCadena($_POST["codigo"]) : "";
$producto = isset($_POST["producto"]) ? limpiarCadena($_POST["producto"]) : "";
$cantidad = isset($_POST["cantidad"]) ? limpiarCadena($_POST["cantidad"]) : "";
$retornable = isset($_POST["retornable"]) ? limpiarCadena($_POST["retornable"]) : "";
$descripcioncaja = isset($_POST["descripcioncaja"]) ? limpiarCadena($_POST["descripcioncaja"]) : "";
$descripcionbotella = isset($_POST["descripcionbotella"]) ? limpiarCadena($_POST["descripcionbotella"]) : "";
$stockminimo = isset($_POST["stockminimo"]) ? limpiarCadena($_POST["stockminimo"]) : "";

switch ($_GET["opcion"]) {
    case 'listar':
        $respuesta = $prod->listar();
        $data = array();
        while ($registro = $respuesta->fetch_object()) {
            if ($registro->estadoproducto == "1") {
                $estado = '
                <button type="button" onclick="desactivar(' . $registro->idproducto . ');" class="btn btn-xs btn-social-icon btn-success"><i class="fa fa-check"></i></button>
        ';
            } else {
                $estado = '
                <button type="button" onclick="activar(' . $registro->idproducto . ');" class="btn btn-xs btn-social-icon btn-danger"><i class="fa fa-times"></i></button>
        ';
            }
            $data[] = array(
                "0" => strtoupper($registro->codigo),
                "1" => strtoupper($registro->producto),
                "2" => strtoupper($registro->categoria),
                "3" => (($registro->retornable == 1) ? 'Si' : 'No'),
                "4" => strtoupper($registro->stock),
                "5" => $estado,
                "6" => '<button type="button" onclick="editar(' . $registro->idproducto . ');" class="btn btn-xs btn-social-icon btn-warning"><i class="fa fa-edit"></i></button>
                        <button type="button" onclick="eliminar(' . $registro->idproducto . ');" class="btn btn-xs btn-social-icon btn-danger"><i class="fa fa-trash"></i></button>',

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

    case 'listarCategoria':
        $respuesta = $prod->listarCategoria();
        $options = '<option value="">Opciones</option>';
        while ($registro = $respuesta->fetch_object()) {
            $options = $options . '<option value="' . $registro->idcategoria . '">' . $registro->categoria . '</option>';
        }
        echo $options;
        break;

    case 'guardarProducto':
        if ($idproducto == "") {
            $respuesta = $prod->guardarProducto($stockminimo, $idcategoria, $codigo, $producto, $cantidad, $retornable, $descripcioncaja, $descripcionbotella);
        } else {
            $respuesta = $prod->editarProducto($stockminimo, $idproducto, $idcategoria, $codigo, $producto, $cantidad, $retornable, $descripcioncaja, $descripcionbotella);
        }
        echo $respuesta;
        break;

    case 'mostrarProducto':
        $respuesta = $prod->mostrarProducto($idproducto);
        echo json_encode($respuesta);
        break;

    case 'activar':
        $respuesta = $prod->activar($idproducto);
        echo $respuesta;
        break;

    case 'desactivar':
        $respuesta = $prod->desactivar($idproducto);
        echo $respuesta;
        break;

    case 'eliminar':
        $respuesta = $prod->eliminar($idproducto);
        echo $respuesta;
        break;
}