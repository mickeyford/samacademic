<?php
require "../configuracion/conexion.php";
class Inicio
{

    public function __construct()
    {}

    public function listar()
    {
        return ejecutarConsulta("SELECT * FROM producto WHERE stock < stockminimo ORDER BY codigo ASC");
    }

    public function numprod()
    {
        return ejecutarConsultaDato("SELECT COUNT(*) FROM producto");
    }

    public function numcomp()
    {
        return ejecutarConsultaDato("SELECT COUNT(*) FROM compra");
    }

    public function numvent()
    {
        return ejecutarConsultaDato("SELECT COUNT(*) FROM venta");
    }

    public function numcli()
    {
        return ejecutarConsultaDato("SELECT COUNT(*) FROM cliente");
    }

    public function contar()
    {
        return ejecutarConsultaDato("SELECT COUNT(*) FROM producto WHERE stock < stockminimo ");
    }

    public function consultaultima()
    {
        return ejecutarConsulta("SELECT p.producto, (SELECT SUM(dv.cantidad) FROM venta AS v, detalleventa AS dv, detallecompra AS dc WHERE v.idventa=dv.idventa AND dv.iddetallecompra=dc.iddetallecompra AND dc.idproducto=p.idproducto GROUP BY dc.idproducto) AS cantidad FROM producto AS p ORDER BY cantidad DESC LIMIT 5");
    }

    public function consultaultima2()
    {
        return ejecutarConsulta("SELECT p.producto, (SELECT SUM(dv.cantidad) FROM venta AS v, detalleventa AS dv, detallecompra AS dc WHERE v.idventa=dv.idventa AND dv.iddetallecompra=dc.iddetallecompra AND dc.idproducto=p.idproducto GROUP BY dc.idproducto) AS cantidad FROM producto AS p ORDER BY cantidad ASC LIMIT 5");
    }

    public function pedidoEmpleado($idv, $idve)
    {
        return ejecutarConsultaDato("SELECT v.estado FROM venta AS v WHERE v.idventa='$idv' AND v.idvendedor='$idve' LIMIT 1");
    }

    public function entregar($id)
    {
        return ejecutarConsulta("UPDATE venta SET estado='1' WHERE idventa='$id'");
    }

    public function cancelar($id)
    {
        return ejecutarConsulta("UPDATE venta SET estado='0' WHERE idventa='$id'");
    }
}