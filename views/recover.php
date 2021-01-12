<!DOCTYPE html>
<html lang="es">
<?php include "./includes/head.php";?>
<style>
@media (min-width: 768px) {
    .bordermm {
        border-right: 1px solid #dee2e6 !important;
    }
}
</style>
<div class="container-fluid p-0 fondo-a">
    <div class="row align-items-center mx-auto alto-a" style="max-width: 620px;">
        <div class="col-12 relleno-a">
            <div class="row bg-white rounded-p-a">
                <div class="col-12 px-0">
                    <img alt="img-logo" width="100%" src="<?php echo URL; ?>/public/images/logologin2.svg"
                        class="rounded-top-p-a mb-4">
                </div>
                <div class=" px-4 col-12 mb-2">
                    <p class="h5 fw-bold">Restablece tu contraseña</p>
                    <hr>
                </div>
                <div class="col-12 pe-4 ps-4 col-sm-12 pe-md-0 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-2 bordermm">
                    <p style="font-weight: 700;">Te enviaremos el código para restablecer tu contraseña al siguiente
                        correo electrónico:
                    <div class="form-check">
                        <input class="form-check-input" type="radio" checked name="radioButton" id="radioButton">
                        <label class="form-check-label" for="radioButton">
                            <p style="font-weight: 700;" class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                </svg>
                                Enviar código por correo
                            </p>
                            <p style="font-weight: 400;" class="text-break">
                                Miguelangelgutierrezcolque@gmail.com
                            </p>
                        </label>
                    </div>
                    <hr class="d-md-none">
                </div>
                <div class="col-12 pe-4 ps-4 col-sm-12 ps-md-0 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-person-circle text-secondary mb-2" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <p class="h5 text-center">Miguel Angel Gutierrez Colque</p>
                    <p class="text-center">Usuario de S.A.M.</p>
                    <p class="text-center">
                        <a href="<?php echo URL; ?>/identify" class="link-primary">
                            ¿No eres tú?
                        </a>
                    </p>
                </div>
                <div class=" px-4 col-12 pb-4">
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-7 col-md-6 d-grid">
                            <p class="text-center h5 pt-2 mb-4 mb-sm-0">
                                <a href="<?php echo URL; ?>/recover/approachless" class="link-primary">
                                    ¿Ya no tienes acceso?
                                </a>
                            </p>
                        </div>
                        <div class="col-6 d-block d-sm-none"></div>
                        <div class="col-6 col-sm-5 col-md-6 d-grid mb-sm-2">
                            <a href="<?php echo URL; ?>/recover/code" class="btn btn-primary fw-bold btn-lg"
                                role="button">
                                Continuar
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