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
                        <p class="h5 fw-bold">No es posible acceder a la cuenta
                        </p>
                        <hr>
                    </div>
                    <div class="col-12 mb-0 px-4">
                        <p style="">Lamentablemente, no podemos concederte acceso a la cuenta de <u>S.A.M.</u> en la que
                            intentas
                            iniciar sesión porque no podemos confirmar que te pertenece.
                        </p>
                        <p>
                            Contáctese con el Administrador mediante:
                        </p>
                        <p class="mb-0" style="font-weight: 500">Teléfono:</p>
                        <p class="mt-0">
                            <a class="link-primary" href="tel:+59171509410">
                                (+591)71509410
                            </a>
                        </p>
                        <p class="mb-0" style="font-weight: 500">Email:</p>
                        <p class="mt-0">
                            <a class="link-primary text-break" href="mailto:Miguelangelgutierrezcolque@gmail.com">
                                Miguelangelgutierrezcolque@gmail.com
                            </a>
                        </p>
                    </div>

                    <div class="col-12 mt-0 px-4 pb-4">
                        <hr class="mt-0">
                        <div class="row">
                            <div class="col-6 d-grid">
                            </div>
                            <div class="col-6 d-grid">
                                <a href="<?php echo URL; ?>/login" class="btn btn-primary fw-bold btn-lg" role="button">
                                    Listo
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