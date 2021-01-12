<!DOCTYPE html>
<html lang="es">
<?php include "./includes/head.php";?>
<div class="container-fluid fondo-a p-0">
    <div class="row align-items-center alto-a mx-auto" style="max-width: 620px;">
        <div class="col-12 relleno-a">
            <div class="row bg-white rounded-p-a">
                <div class="col-12 px-0">
                    <img alt="img-logo" width="100%" src="<?php echo URL; ?>/public/images/logologin2.svg"
                        class="rounded-top-p-a mb-4">
                </div>
                <div class="col-12 mb-2 px-4">
                    <p class="h5 fw-bold">Elige una contraseña nueva
                    </p>
                    <hr>
                </div>
                <div class="col-12 mb-2 px-4">
                    <p style="font-weight: 700">Crea una contraseña nueva de seis caracteres como mínimo. Una contraseña
                        segura tiene una combinación de letras, números y signos de puntuación.
                    </p>
                </div>


                <label for="password" class="form-label px-4">Contraseña nueva</label>
                <div class="input-group px-4">
                    <input type="text" class="form-control form-control-lg" name="password" id="password">
                    <span class="input-group-text" id="basic-addon2">Ocultar</span>
                </div>



                <div class="col-12 mt-3 px-4">
                    <div class="alert alert-danger" role="alert">
                        Demasiado corta.
                    </div>
                </div>
                <div class="col-12 px-4 pb-4">
                    <hr>
                    <div class="row">
                        <div class="col-6 d-grid">
                            <a href="<?php echo URL; ?>/home" class="btn btn-primary fw-bold btn-lg" role="button">
                                Continuar
                            </a>
                        </div>
                        <div class="col-6 d-grid">
                            <a href="<?php echo URL; ?>/login" class="btn btn-secondary fw-bold btn-lg" role="button">
                                Omitir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./includes/js.php";?>
</body>

</html>