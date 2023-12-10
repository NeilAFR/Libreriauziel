<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro - LibreriaUziel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="../Images/Icono.png" type="image/x-icon">
    <style>
        body {
            background-image: linear-gradient(90deg, rgba(255,198,131,1) 0%, rgba(246,228,187,1) 2%, rgba(255,255,255,0) 5%, rgba(255,255,255,0) 95%, rgba(246,228,187,1) 98%, rgba(255,198,131,1) 100%), url("../Images/FondoRegistro.jpg");
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content-box {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
        }

        .title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .icon {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-box">
            <div class="title">
                <img src="../../../../Images/Icono.png" alt="Icono de la empresa" class="icon">
                LibreríaUziel
            </div>
            <form action="../Controller/registro.php" method="POST">
                 <label for="Correo">Correo electrónico:</label>
                <input type="Correo" id="Correo" name="Correo" required>
                <label for="Contraseña">Contraseña:</label>
                <input type="Contraseña" id="Contraseña" name="Contraseña" required>

  <button type="submit">Registrarse</button>
</form> 
</body>
</html>