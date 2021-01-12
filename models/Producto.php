<?php
require "../configuracion/conexion.php";
class Producto
{

    public function __construct()
    {}

    public function listar()
    {
        return ejecutarConsulta("SELECT *, p.estado AS estadoproducto FROM producto AS p, categoria AS c WHERE p.idcategoria=c.idcategoria");
    }

    public function listarCategoria()
    {
        return ejecutarConsulta("SELECT * FROM categoria");
    }

    public function guardarProducto($stockminimo, $idcategoria, $codigo, $producto, $cantidad, $retornable, $descripcioncaja, $descripcionbotella)
    {
        if ($retornable == "") {
            $retornable = '0';
        }
        return ejecutarConsulta("INSERT INTO producto(stockminimo, idcategoria, codigo, producto, cantidad, retornable, descripcioncaja, descripcionbotella) VALUES ('$stockminimo','$idcategoria', '$codigo', '$producto', '$cantidad', '$retornable', '$descripcioncaja', '$descripcionbotella')");
    }

    public function editarProducto($stockminimo, $idproducto, $idcategoria, $codigo, $producto, $cantidad, $retornable, $descripcioncaja, $descripcionbotella)
    {
        if ($retornable == "") {
            $retornable = '0';
        }
        return ejecutarConsulta("UPDATE producto SET stockminimo='$stockminimo', idcategoria='$idcategoria', codigo='$codigo', producto='$producto', cantidad='$cantidad', retornable='$retornable', descripcioncaja='$descripcioncaja', descripcionbotella='$descripcionbotella' WHERE idproducto='$idproducto'");
    }

    public function mostrarProducto($idproducto)
    {
        return ejecutarConsultaSimpleFila("SELECT * FROM producto WHERE idproducto='$idproducto'");
    }

    public function activar($idproducto)
    {
        return ejecutarConsulta("UPDATE producto SET estado='1' WHERE idproducto='$idproducto'");
    }

    public function desactivar($idproducto)
    {
        return ejecutarConsulta("UPDATE producto SET estado='0' WHERE idproducto='$idproducto'");
    }

    public function eliminar($idproducto)
    {
        return ejecutarConsulta("DELETE FROM producto WHERE idproducto ='$idproducto'");
    }
}