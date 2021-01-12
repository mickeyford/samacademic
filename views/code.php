<!DOCTYPE html>
<html lang="es">
<?php include "./includes/head.php";?>

<body>
    <div class="container-fluid fondo-a p-0">
        <div class="row align-items-center mx-auto alto-a" style="max-width: 620px;">
            <div class="col-12 relleno-a">
                <div class="row bg-white rounded-p-a">
                    <div class="col-12 px-0">
                        <img alt="img-logo" width="100%" src="<?php echo URL; ?>/public/images/logologin2.svg"
                            class="rounded-top-p-a mb-4">
                    </div>
                    <div class="col-12 mb-2 px-4">
                        <p class="h5 fw-bold">Ingresa el código de seguridad</p>
                        <hr>
                    </div>
                    <div class="col-12 mb-2 px-4">
                        <p style="font-weight: 700">Comprueba si recibiste un correo electrónico con un código de 6
                            dígitos.
                        </p>
                    </div>

                    <div class="col-12 ps-4 col-sm-12 pe-4 col-md-5 pe-md-2 col-lg-5 col-xl-5 col-xxl-5">
                        <input type="text" class="form-control form-control-lg border-2 mb-3" id="code" name="code"
                            placeholder="Ingresa el código">
                    </div>
                    <div class="col-12 pe-4 col-sm-12 ps-4 col-md-7 ps-md-2 col-lg-7 col-xl-7 col-xxl-7">
                        <p class="my-0" style="font-weight: 700;">
                            Enviamos el código a:
                        </p>
                        <p class="my-0 text-break" style="font-weight: 400;">
                            Miguelangelgutierrezcolque@gmail.com
                        </p>
                    </div>
                    <div class="col-12 px-4 mt-2">
                        <div class="alert alert-danger" role="alert">
                            El número que ingresaste no coincide con tu código. Vuelve a intentarlo.
                        </div>
                    </div>
                    <div class="col-12 px-4">
                        <p class="h5">
                            <a href="<?php echo URL; ?>/recover" class="link-primary">
                                ¿No recibiste el código?
                            </a>
                        </p>
                    </div>
                    <div class="col-12 px-4 pb-4">
                        <hr>
                        <div class="row">
                            <div class="col-6 d-grid">
                                <a href="<?php echo URL; ?>/recover/password" class="btn btn-primary fw-bold btn-lg"
                                    role="button">
                                    Continuar
                                </a>
                            </div>
                            <div class="col-6 d-grid">
                                <a href="<?php echo URL; ?>/login" class="btn btn-danger fw-bold btn-lg" role="button">
                                    Cancelar
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