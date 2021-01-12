<!DOCTYPE html>
<html lang="es">
<?php include "./includes/head.php";?>
<div class="container-fluid p-0 fondo">
    <div class="row align-items-center mx-auto alto" style="max-width: 420px;">
        <div class="col-12 relleno">
            <div class="row bg-white rounded-p">
                <div class="col-12 px-0">
                    <img alt="img-logo" width="100%" src="<?php echo URL; ?>/public/images/logologin.svg"
                        class="rounded-top-p mb-4">
                </div>
                <div class="col-12 mb-2 px-4">
                    <p class="h5 fw-bold"> Recuperar tu cuenta</p>
                    <hr>
                </div>
                <div class="col-12 mb-4 px-4">
                    <p>Ingresa tu correo electrónico o usuario para buscar tu cuenta.
                    </p>
                    <input type="email" class="form-control form-control-lg border-2 mb-3" id="user" name="user"
                        placeholder="Correo electrónico o usuario">
                    <p class="text-danger mb-0 mt-1" style="font-weight: 700;">
                        No hay resultados de búsqueda
                    </p>
                    <p class="text-danger mb-0 mt-1" style="font-weight: 400;">
                        Tu búsqueda no arrojó ningún resultado. Vuelve a intentarlo con otros datos.
                    </p>
                </div>
                <div class="col-6 d-grid ps-4 pb-4">
                    <a href="<?php echo URL; ?>/recover" class="btn btn-primary fw-bold btn-lg" role="button">
                        Buscar
                    </a>
                </div>
                <div class="col-6 d-grid pe-4 pb-4">
                    <a href="<?php echo URL; ?>/login" class="btn btn-danger fw-bold btn-lg" role="button">
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./includes/js.php";?>
</body>

</html>