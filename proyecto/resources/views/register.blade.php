<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">


    <!-- Tu CSS -->
</head>
<body>

   <!-- Navbar -->
<nav class="navbar navbar-light bg-light shadow-sm">
    <div class="container d-flex justify-content-between align-items-center w-100">
        
        <!-- Icono regresar -->
        <a href="/login" class="text-dark">
            <i class="bi bi-arrow-bar-left fs-3"></i>
        </a>

        <!-- Texto centrado con ícono -->
        <div class="d-flex align-items-center justify-content-center">
            <i class="bi bi-person-add text-success me-2 fs-4"></i>
            <span class="fw-bold text-success" style="font-style: normal;">
                PLANEACIÓN TECNOLÓGICA EMPRESARIAL
            </span>
        </div>
        
        <!-- Espaciador invisible para balancear -->
        <div style="width: 32px;"></div>
    </div>
</nav>


    <!-- Contenedor Principal -->
    <div class="container py-5">
        <div class="card shadow p-4">
            <h2 class="text-center text-success mb-4">Registro de Nuevo Usuario</h2>

            <form>
                <!-- CURP -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">CURP*</label>
                        <input type="text" class="form-control" placeholder="Ingrese su CURP">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Confirmar CURP*</label>
                        <input type="text" class="form-control" placeholder="Confirme su CURP">
                    </div>
                </div>

                <hr>

                <!-- Datos Personales -->
                <h5 class="text-success mt-3">DATOS PERSONALES</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Nombre*</label>
                        <input type="text" class="form-control" placeholder="Nombre(s)">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Apellido Paterno*</label>
                        <input type="text" class="form-control" placeholder="Apellido Paterno">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Apellido Materno*</label>
                        <input type="text" class="form-control" placeholder="Apellido Materno">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Fecha de Nacimiento*</label>
                        <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Género*</label>
                        <input type="option" class="form-control" placeholder="Seleccione">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">RFC*</label>
                        <input type="text" class="form-control" placeholder="XXXXXXXXXXXXX">
                        <small class="form-text text-muted">
                        Nota: Si no conoce su RFC escriba los 10 primeros dígitos de su CURP.
                        </small>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="ineFile" class="form-label">
                            Identificación Oficial INE <small>(Suba archivo máximo 2Mb)</small>
                        </label>
                        <input class="form-control" type="file" id="ineFile" name="ineFile" accept=".jpg,.jpeg,.png,.pdf">
                    </div>

                </div>

                <!-- Contraseña -->
                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Contraseña*</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password">
                            <span class="input-group-text"><i class="bi bi-eye" id="togglePassword"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Confirmar Contraseña*</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirmPassword">
                            <span class="input-group-text"><i class="bi bi-eye" id="toggleConfirmPassword"></i></span>
                        </div>
                    </div>
                </div>

                <hr>

                <h5 class="text-success mt-3">DOMICILIO</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Calle*</label>
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Número*</label>
                        <input type="text" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Colonia*</label>
                        <input type="text" class="form-control" placeholder="Col">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Municipio*</label>
                        <input type="text" class="form-control" placeholder="Muncipio">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Estado*</label>
                        <input type="option" class="form-control" placeholder="Estado">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Código Postal*</label>
                        <input type="option" class="form-control" placeholder="00000">
                    </div>
                </div>

                <hr>

                <h5 class="text-success mt-3">DATOS DE CONTACTO</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Télefono*</label>
                        <input type="text" class="form-control" placeholder="0000000000">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Confirmar Teléfono*</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Correo Electrónico*</label>
                        <input type="text" class="form-control" placeholder="ejemplo@.gmail.com">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Confirmar Correo Electrónico*</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <!-- Check -->
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="terminos">
                    <label class="form-check-label" for="terminos">
                        Acepto términos y condiciones*
                    </label>
                </div>

                <!-- Botón -->
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-success">Registrar Usuario</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Mostrar/Ocultar contraseña
        document.getElementById("togglePassword").addEventListener("click", function() {
            const pass = document.getElementById("password");
            pass.type = pass.type === "password" ? "text" : "password";
            this.classList.toggle("bi-eye");
            this.classList.toggle("bi-eye-slash");
        });

        document.getElementById("toggleConfirmPassword").addEventListener("click", function() {
            const pass = document.getElementById("confirmPassword");
            pass.type = pass.type === "password" ? "text" : "password";
            this.classList.toggle("bi-eye");
            this.classList.toggle("bi-eye-slash");
        });
    </script>

</body>
</html>
