<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body style="background: url('{{ asset('img/fondo.png') }}') no-repeat center center/cover; background-color: rgba(0,0,0,0.1); background-blend-mode: overlay;">

    <!----------------------- Contenedor principal -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-4 shadow box-area" style="background: #07284B; width: 150em;"> 

            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box " style="background: #FFFFFF;">
                <div class="featured-image mb-3">
                <img src="img/logo.png" class="img-fluid" style="width: 300em;">
                </div>
            </div>

            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 right-box">
                <div class="text-center text-white fs-5 row align-items-center" style="background: #07284B;">

                    
                    <div class="mb-3">
                        <i class="bi bi-person-circle" style="font-size: 3rem; color: white;"></i>
                    </div>

                    <div class="header-text mb-4">
                        <h2>INICIO DE SESIÓN</h2>
                        <p>Ingresa tus credenciales para ingresar</p>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="curp" class="form-control form-control-lg bg-light fs-6" placeholder="CURP" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Contraseña" required>
                            <span class="input-group-text">
                                <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
                            </span>
                        </div>

                        <div class="input-group mb-5 d-flex justify-content-between text-right">
                            <div class="forgot">
                            <small><a href="#">Olvidé mi contraseña</a></small>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-lg w-100 fs-6" style="background: #E3F1DA;">Iniciar sesión</button>
                        </div>

                        <div class="row mb-3 text-center">
                            <small>¿No tienes cuenta?</small>
                        </div>

                        <div class="input-group mb-3">
                            <a href="{{ url('/register') }}" class="btn btn-lg w-100 fs-6" style="background: #C6DFB5;">
                                Crear cuenta
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            this.classList.toggle("bi-eye");
            this.classList.toggle("bi-eye-slash");
        });
    </script>
</body>
</html>
