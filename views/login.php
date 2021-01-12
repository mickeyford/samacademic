<!DOCTYPE html>
<html lang="es">
<?php include "./includes/head.php";?>
<style>

</style>
<div class="container-fluid fondo p-0">
    <div class="row align-items-center mx-auto alto" style="max-width: 420px;">
        <div class="col-12 relleno">
            <div class="row bg-white rounded-p">
                <div class="col-12 px-0">
                    <img alt="img-logo" width="100%" src="<?php echo URL; ?>/public/images/logologin.svg"
                        class="rounded-top-p mb-4">
                </div>
                <div class="col-12 mb-4 text-center px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-person-circle text-secondary mb-2" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <p class="h5 text-center">Iniciar sesión como Miguel Angel Gutierrez Colque</p>
                    <p class="text-center text-break">miguelangel.gutierrezcolque <a href="<?php echo URL; ?>/login"
                            class="link-primary">
                            ¿No eres tú?
                        </a></p>
                </div>
                <div class="col-12 mb-4 px-4">
                    <input type="email" class="form-control form-control-lg border-2" id="user" name="user"
                        placeholder="Correo electrónico o usuario">
                    <p class="text-danger mb-0 mt-1" style="font-weight: 500;">
                        El correo electrónico o el usuario que ingresaste no coinciden con
                        ninguna
                        cuenta.
                    </p>
                </div>
                <div class="col-12 mb-4 px-4">
                    <input type="password" class="form-control form-control-lg border-2" id="password" name="password"
                        placeholder="Contraseña">
                    <p class="text-danger mb-0 mt-1" style="font-weight: 500;">
                        La contraseña que ingresaste es incorrecta.
                        <a href="<?php echo URL; ?>/recover" class="link-danger">
                            ¿Has olvidado tu contraseña?
                        </a>
                    </p>
                </div>
                <div class="col-12 d-grid mb-4 px-4">
                    <a href="<?php echo URL; ?>/home" class="btn btn-primary fw-bold btn-lg" role="button">
                        Iniciar sesión
                    </a>
                </div>
                <div class="col-12 text-center px-4">
                    <a href="<?php echo URL; ?>/identify" class="link-primary h5">
                        ¿Has olvidado los datos de la cuenta?
                    </a>
                </div>

                <div class="col-12 text-center px-4 pb-4">
                    <hr>
                    <a href="<?php echo URL; ?>/createaccount" class="mx-auto btn btn-success fw-bold btn-lg"
                        role="button">
                        Crear cuenta nueva.
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./includes/js.php";?>
</body>

</html>