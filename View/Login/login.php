<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Cargando.css">
    <link rel="icon" href="../../Images/Icono.png" type="image/x-icon">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="../../Controller/login.php" method="post" onsubmit="loadPage(event);">
                    <h2>Iniciar Sesión</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="correo" name="correo" class="form-control" required>
                        <label for="correo">Correo</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="contrasena" name="contrasena" class="form-control" required>
                        <label for="contrasena">Contraseña</label>
                    </div>
                    <div class="forget">
                    <a href="">Olvidé mi contraseña </a>
                    </div>
                    <button type="submit">Iniciar Sesión </button>
                    <div class="register">
                        <p>Eres nuevo? <a href="#">Registrarse</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div id="loading-container" class="loading-container" style="display: none;">
        <div id="loading"></div>
    </div>
    <script>
        function loadPage(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            var loadingContainer = document.getElementById('loading-container');
            loadingContainer.style.display = 'flex';

            setTimeout(function () {
                event.target.submit(); // Envía el formulario después de 3 segundos
            }, 3000); // Demora de 3 segundos
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>