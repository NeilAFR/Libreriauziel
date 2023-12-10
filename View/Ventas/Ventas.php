<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ventas Librería</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #43e5a0;
            color: black;
            border-bottom: none;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    </style>
</head>

<body>
    <?php include '../Navegacion/Navegacion.html' ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Productos Disponibles</h1>
                <?php include '../../Model/MVentas.php'; ?>
            </div>
            <div class="col-md-4">
                <div class="card">
                <h1 class="card-header">Realizar Venta</h1>
                    <div class="card-body">
                        <?php
                        include '../../Controller/CVentas.php';
                        procesarFormulario($conexion);
                        ?>

                        <form action="../Ventas/Ventas.php" method="POST" onsubmit="recargarPagina()">
                            <div class="mb-3">
                                <label for="Nombre" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" value="Producto a comprar" required>
                            </div>
                            <div class="mb-3">
                                <label for="Stock" class="form-label">Stock a Comprar</label>
                                <input type="number" class="form-control" name="Stock" id="Stock" min="1" required>
                            </div>
                            <div class="mb-3">
                                <label for="Precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="Precio" id="Precio" value="Total a pagar" required>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Realizar Venta">
                            <a href="../../Images/Yape.jpg" class="btn btn-secondary">Generar QR para el cliente</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
