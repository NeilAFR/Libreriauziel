<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Images/Icono.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sometype+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Información - Librería</title>
    <style>
        body {
            background-color: white;
            font-family: 'Sometype Mono', monospace;
            margin: 0;
            padding: 0;
            font-size: 20px;
        }

        .banner-container {
            display:  flex;
            align-items: center;
            justify-content: space-between;
            background-color: #333;
            padding: 3px;
            color: white;
        }

        .banner-text {
            flex: 1;
            text-align: center;
            padding-right: 20px;
        }
        .bannet-text p {
            font-size:32px;
        }

        .banner-image {
            flex: 1;
            text-align: center;
        }

        .banner2-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 3px;
        }

        .banner2-text {
            flex: 1;
            text-align: center;
            padding-right: 20px;
        }

        .banner2-image {
            flex: 1;
            text-align: center;
        }

        .content-container {
            text-align: center;
            padding: 20px;
            margin-top: 100px;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            margin-top: 80px;
        }

        .card {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            margin: 50px;
            background-color: #9b9595;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;

        }

        .card.appear {
            opacity: 1;
            transform: translateY(0);
        }

        .card p {
            font-size: 32px;
            font-family: 'Russo One', sans-serif;
            font-weight: bold;
        }

        .card img {
            width: 88px;
            height: auto;
            margin: 0 auto;
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <?php include '../Navegacion/Navegacion.html' ?>
</head>

<body>
    <div class="banner-container">
        <div class="banner-text">
            <h1>Bienvenido a Librería Uziel</h1>
            <p>Nos alegra mucho tenerte por aquí, recuerda reportar cualquier error que encuentres.</p>
            <p>¡Esperamos tengas una buena jornada laboral!</p>
            <a href="../Almacen/Almacen.php" class="btn btn-secondary">Ir al Almacén</a>
        </div>
        <div class="banner-image">
            <img src="../../Images/FotoB.png" alt="Librería Uziel">
        </div>
    </div>

    <div class="content-container">
        <h2>Recuerda siempre</h2>

        <div class="card-container">
            <div class="card">
                <img src="../../Images/Am3.png" alt="Libros">
                <p>No respondas correos sospechosos</p>
            </div>
            <div class="card">
                <img src="../../Images/Am2.png" alt="Libros">
                <p>No proporciones tus credenciales a nadie</p>
            </div>
            <div class="card">
                <img src="../../Images/Am4.png" alt="Libros">
                <p>Ten cuidado con las llamadas</p>
            </div>
            <div class="card">
                <img src="../../Images/Am1.png" alt="Libros">
                <p>¡Juntos debemos de proteger los datos de nuestra empresa!</p>
            </div>
        </div>
    </div>

    <div class="banner2-container">
        <div class="banner-image">
            <img src="../../Images/Am5.png" alt="Librería Uziel">
        </div>
        <div class="banner2-text">
            <h2>¿Encontraste un error o quieres dar una sugerencia?</h2>
            <p>¡Puedes enviarnos un correo y te atenderemos a la brevedad!</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Error encontrado o sugerencia:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Enviar Mensaje</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var cards = document.querySelectorAll('.card');
            cards.forEach(function (card) {
                card.classList.add('appear');
            });
        });
    </script>
</body>

</html>