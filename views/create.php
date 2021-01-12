<!DOCTYPE html>
<html lang="es">
<?php include "./includes/head.php";?>
<style>
.alto-b {
    min-height: 100vh !important;
}

.fondo-b {
    background-color: #f0f2f5;
}

.relleno-b {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
}

.rounded-b {

    border-radius: 0.25rem !important;
}

.ancho {
    max-width: 750px !important;
}

@media (max-width: 768px) {
    .ancho {
        max-width: 450px !important;
    }
}

@media (max-width: 470px) {
    .rounded-b {
        border-radius: 0 !important;
    }

    .fondo-b {
        background-color: white !important;
    }

    .relleno-b {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .alto-b {
        min-height: initial !important;
        max-height: 100vh !important;
    }
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}


input[type=number] {
    -moz-appearance: textfield;
}
</style>


<body>
    <div class="container-fluid fondo-b p-0">
        <div class="row align-items-center mx-auto alto-b ancho">
            <div class="col-12 relleno-b">
                <div class="row bg-white p-4 rounded-b">
                    <div class="col-12 col-sm-12 col-md-7">
                        <form class="row" id="form-1">
                            <div class="col-12 mb-2">
                                <img src="<?php echo URL; ?>/public/images/sam.svg" alt="img-texto"
                                    class="d-md-none d-sm-inline-block d-inline">
                                <img src="<?php echo URL; ?>/public/images/texto.svg" alt="img-texto">
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Crear una cuenta de SAM</h4>
                            </div>

                            <div class="col-12 col-sm-6 mb-3">
                                <label for="nombres" class="form-label mb-0 pb-0 text-primary">Nombres</label>
                                <input type="text" class="form-control" id="nombres">
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label for="apellidos" class="form-label  mb-0 pb-0 text-primary">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="correo" class="form-label  mb-0 pb-0 text-primary">Correo
                                    electrónico</label>
                                <input autocomplete="off" type="email" class="form-control" id="correo">
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-md-0">
                                        <label for="contraseña"
                                            class="form-label  mb-0 pb-0 text-primary">Contraseña</label>
                                        <input autocomplete="off" type="password" class="form-control" id="contraseña">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label for="contraseña1"
                                            class="form-label  mb-0 pb-0 text-primary">Confirmación</label>
                                        <input type="password" class="form-control" id="contraseña1">
                                    </div>
                                </div>
                                <div id="" class="form-text mb-3">
                                    Utiliza ocho caracteres como mínimo con una combinación de letras, números y
                                    símbolos
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="mostrar" required>
                                    <label class="form-check-label" for="mostrar">
                                        Mostrar contraseña
                                    </label>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <a href="<?php echo URL; ?>/login" class="link-primary">
                                    Prefiero iniciar sesión
                                </a>
                            </div>
                            <div class="col-5 d-grid">
                                <button class="btn btn-primary" type="button" id="siguiente-1">
                                    Siguiente
                                </button>
                            </div>
                        </form>

                        <form class="row d-none" id="form-2">
                            <div class="col-12 mb-2">
                                <img src="<?php echo URL; ?>/public/images/sam.svg" alt="img-texto"
                                    class="d-md-none d-sm-inline-block d-inline">
                                <img src="<?php echo URL; ?>/public/images/texto.svg" alt="img-texto">
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Verifica tu correo electrónico</h4>
                            </div>
                            <p class="mb-3">Por tu seguridad, SAM quiere confirmar tu identidad, de manera que te
                                enviará un correo
                                electrónico con un código de verificación de seis dígitos.
                            </p>
                            <p class="text-primary mb-0 text-break">
                                miguelangelgutierrezcolque@gmail.com
                            </p>
                            <div class="form-text mt-0 mb-3">
                                Si te has equivocado al ingresar el correo electrónico, vuelve atrás.
                            </div>
                            <div class="col-12 mb-5">
                                <input type="text" class="form-control" id="codigo"
                                    placeholder="Introduce el código de verificación">
                            </div>
                            <div class="col-6 align-self-center">
                                <a type="button" class="link-primary" id="atras-1" role="button">
                                    Atrás
                                </a>
                            </div>
                            <div class="col-6 d-grid">
                                <button type="button" class="btn btn-primary" id="siguiente-2">
                                    Verificar
                                </button>
                            </div>
                        </form>

                        <form class="row d-none" id="form-3">
                            <div class="col-12 mb-2">
                                <img src="<?php echo URL; ?>/public/images/sam.svg" alt="img-texto"
                                    class="d-md-none d-sm-inline-block d-inline">
                                <img src="<?php echo URL; ?>/public/images/texto.svg" alt="img-texto">
                            </div>
                            <div class="col-12 mb-4">
                                <h4>Te damos la bienvenida a SAM</h4>
                            </div>
                            <p class="text-primary mb-3 text-break">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                miguelangelgutierrezcolque@gmail.com
                            </p>
                            <div class="col-3">
                                <img src="<?php echo URL; ?>/public/images/flag.svg" height="38px" alt="img-bandera"
                                    class="mt-4 rounded">
                            </div>
                            <div class="col-9">
                                <label for="ncelular" class="form-label  mb-0 pb-0 text-primary">N° de Celular
                                    (opcional)</label>
                                <input autocomplete="off" type="number" class="form-control" id="ncelular">
                            </div>
                            <div class="col-12  mb-3">
                                <div id="" class="form-text">
                                    Utilizaremos tu número de celular para mantener tu cuenta protegida.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label  mb-0 pb-0 text-primary">Tú fecha de nacimiento</label>
                            </div>
                            <div class="col-4 mb-3">
                                <input placeholder="Día" autocomplete="off" type="number" class="form-control" id="dia">
                            </div>
                            <div class="col-4 mb-3">
                                <input placeholder="Mes" autocomplete="off" type="number" class="form-control" id="mes">
                            </div>
                            <div class="col-4 mb-3">
                                <input placeholder="Año" autocomplete="off" type="number" class="form-control" id="año">
                            </div>
                            <div class="col-12 mb-5 mt-1">
                                <select class="form-select" id="sexo">
                                    <option disabled selected>Sexo</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Indeterminado</option>
                                </select>
                            </div>
                            <div class="col-6 align-self-center">
                                <a type="button" class="link-primary" id="atras-2" role="button">
                                    Atrás
                                </a>
                            </div>
                            <div class="col-6 d-grid">
                                <button type="button" class="btn btn-primary" id="registrarse">
                                    Registrarse
                                </button>
                            </div>
                        </form>
                        <form class="row d-none" id="form-4">

                            Felicidades por tu registro.

                            <a type="button" class="link-primary" id="atras-3" role="button">
                                Atrás
                            </a>

                        </form>
                    </div>
                    <div class="d-none d-md-block col-md-5 align-self-center text-center">
                        <img src="<?php echo URL; ?>/public/images/sam.svg" width="140px" alt="img-sam">
                        <h5>Sistema Académico para Maestros</h5>
                        <h5>SAM</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./includes/js.php";?>
    <script>
    var element1 = document.getElementById("form-1");
    var element2 = document.getElementById("form-2");
    var element3 = document.getElementById("form-3");
    var element4 = document.getElementById("form-4");

    document
        .getElementById("siguiente-1")
        .addEventListener("click", function(event) {
            event.preventDefault();
            element1.classList.toggle("d-none");
            element2.classList.toggle("d-none");
        });

    document
        .getElementById("siguiente-2")
        .addEventListener("click", function(event) {
            event.preventDefault();
            element2.classList.toggle("d-none");
            element3.classList.toggle("d-none");
        });

    document
        .getElementById("atras-1")
        .addEventListener("click", function(event) {
            event.preventDefault();
            element1.classList.toggle("d-none");
            element2.classList.toggle("d-none");
        });

    document
        .getElementById("atras-2")
        .addEventListener("click", function(event) {
            event.preventDefault();
            element2.classList.toggle("d-none");
            element3.classList.toggle("d-none");
        });
    document
        .getElementById("registrarse")
        .addEventListener("click", function(event) {
            event.preventDefault();
            element3.classList.toggle("d-none");
            element4.classList.toggle("d-none");
        });

    document
        .getElementById("atras-3")
        .addEventListener("click", function(event) {
            event.preventDefault();
            element3.classList.toggle("d-none");
            element4.classList.toggle("d-none");
        });
    </script>
</body>

</html>