<?php
ob_start();
session_start();

if (isset($_SESSION["idusuario"])) {
    if ($_SESSION["cargo"] == 'Encargado') {
        header("Location: ../pedidos.php");
    }

    include "../incluidos/head.php";
    ?>


<body class="nivel hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
include "../incluidos/header.php";
    include "../incluidos/sidebar.php";
    ?>
        <div class="content-wrapper">
            <?php
if (isset($_SESSION["ingresosegresos"])) {
        ?>
            <section class="content-header">
                <h1>
                    Módulo Productos
                    <small>Acceso rápido</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box" id="b1">
                            <div class="box-header">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <h3 style="margin-top:1rem;">Lista de productos</h3>
                                    </div>
                                    <div class="col-xs-4">
                                        <button type="button" class="btn btn-sm btn-primary pull-right"
                                            style="margin-top:1rem;" onclick="agregar();">
                                            <i class="fa fa-shopping-basket"></i> Agregar productos
                                        </button>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="tblProducto" class="table table-bordered table-hover nowrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Producto</th>
                                            <th>Categoría</th>
                                            <th>Retornable</th>
                                            <th>Stock</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Código</th>
                                            <th>Producto</th>
                                            <th>Categoría</th>
                                            <th>Retornable</th>
                                            <th>Stock</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                        <div class="box" id="b2">
                            <div class="box-header">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3 style="margin-top:1rem;" id="tituloProducto"></h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form id="formProducto" name="formProducto">
                                    <div class="form-group col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <label for="codigo">Código(*)</label>
                                        <input type="hidden" name="idproducto" id="idproducto">
                                        <input type="text" class="form-control" name="codigo" id="codigo"
                                            placeholder="Código." required>
                                    </div>
                                    <div class="form-group col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <label for="producto">Producto(*) </label>
                                        <input type="text" class="form-control" name="producto" id="producto"
                                            placeholder="Producto." required>
                                    </div>
                                    <div class="form-group col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <label for="idcategoria">Categoría(*) </label>
                                        <select style="width: 100%;" id="idcategoria" name="idcategoria"
                                            class="form-control select2" required>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                        <label for="cantidad">Cantidad(*) </label>
                                        <input type="number" min="0" class="form-control" name="cantidad" id="cantidad"
                                            placeholder="Cantidad." required>
                                    </div>
                                    <div class="form-group col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                        <label>Retornable</label>
                                        <li style="list-style: none;">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="retornable" name="retornable" value="1">
                                                Sí
                                            </label>
                                        </li>
                                    </div>
                                    <div class="form-group col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <label for="descripcioncaja">Descripción de la caja(*) </label>
                                        <textarea class="form-control" rows="4" placeholder="Descripción de la caja..."
                                            id="descripcioncaja" name="descripcioncaja" required></textarea>
                                    </div>
                                    <div class="form-group col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <label for="descripcionbotella">Descripción de la botella(*) </label>
                                        <textarea class="form-control" rows="4"
                                            placeholder="Descripción de la botella..." id="descripcionbotella"
                                            name="descripcionbotella" required></textarea>
                                    </div>
                                    <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                        <label for="stockminimo">Stock mínimo(*) </label>
                                        <input type="number" min="0" class="form-control" name="stockminimo"
                                            id="stockminimo" placeholder="" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <hr>
                                        </div>
                                        <div class="col-xs-0 col-sm-6 col-md-6 col-lg-8 text-center">

                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 text-center">
                                            <div class="col-xs-6">
                                                <button type="button"
                                                    class="btn-block btn btn-sm btn-danger pull-center"
                                                    style="margin-bottom:1rem;" onclick="cancelar();">
                                                    Cancelar
                                                </button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button type="submit"
                                                    class="btn-block btn btn-sm btn-primary pull-right"
                                                    style="margin-bottom:1rem;">
                                                    Guardar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <?php
} else {
        include "../incluidos/error.php";
    }
    ?>
        </div>

        <?php
include "../incluidos/footer.php";
    ?>
        <div class="control-sidebar-bg"></div>
    </div>

    <?php
include "../incluidos/script.php";
    ?>
    <script src="./js/producto.js"></script>
</body>

</html>
<?php
} else {
    header("Location: ../login.php");
}
ob_end_flush();
?>