<?php
include("../../Model/conexion.php");
$sql = "SELECT * FROM productos";
$query = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Almacen - TAREA7 ING</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php include '../Navegacion/Navegacion.html' ?>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-bottom: none;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        h1 {
            color: white;
        }

        th,
        td {
            text-align: center;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .btn-primary,
        .btn-danger {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Ingresar Producto</h1>
                    </div>
                    <div class="card-body">
                        <form action="../Controller/insertar_producto.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="TipoProducto">Tipo de Producto</label>
                                <input type="text" class="form-control" name="TipoProducto" id="TipoProducto" required>
                            </div>
                            <div class="mb-3">
                                <label for "Stock">Stock</label>
                                <input type="number" class="form-control" name="Stock" id="Stock" required>
                            </div>
                            <div class="mb-3">
                                <label for="Precio">Precio</label>
                                <input type="number" class="form-control" name="Precio" id="Precio" required>
                            </div>
                            <div class="mb-3">
                                <label for="Imagen">Imagen</label>
                                <input type="file" class="form-control" name="Imagen" id="Imagen" required>
                            </div>

                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th>IDProducto</th>
                                <th>Nombre</th>
                                <th>Tipo de Producto</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <th>
                                        <?php echo $row["IDProducto"]; ?>
                                    </th>
                                    <td>
                                        <?php echo $row['Nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['TipoProducto'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Stock'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Precio'] ?>
                                    </td>
                                    <td>
                                        <img src="../img/<?php echo $row['Imagen'] ?>" alt="Imagen del producto"
                                            width="100">
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Actualizar Producto</h1>
                    </div>
                    <div class="card-body">
                        <form action="../Controller/actualizar_producto.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="IDProducto">ID del Producto a Actualizar</label>
                                <input type="text" class="form-control" name="IDProducto" id="IDProducto" required>
                            </div>
                            <div class="mb-3">
                                <label for="NuevoNombre">Nuevo Nombre</label>
                                <input type="text" class="form-control" name="NuevoNombre" id="NuevoNombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="NuevoTipoProducto">Nuevo Tipo de Producto</label>
                                <input type="text" class="form-control" name="NuevoTipoProducto" id="NuevoTipoProducto"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="NuevoStock">Nuevo Stock</label>
                                <input type="number" class="form-control" name="NuevoStock" id="NuevoStock" required>
                            </div>
                            <div class="mb-3">
                                <label for="NuevoPrecio">Nuevo Precio</label>
                                <input type="number" class="form-control" name="NuevoPrecio" id="NuevoPrecio" required>
                            </div>
                            <div class="mb-3">
                                <label for="NuevaImagen">Nueva Imagen</label>
                                <input type="file" class="form-control" name="NuevaImagen" id="NuevaImagen">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Actualizar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h1>Eliminar Producto</h1>
                </div>
                <div class="card-body">
                    <form action="../Controller/eliminar_producto.php" method="POST">
                        <div class="mb-3">
                            <label for="IDProducto">ID del Producto a Eliminar</label>
                            <input type="text" class="form-control" name="IDProducto" id="IDProducto" required>
                        </div>
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Imprimir Reporte</h1>
                </div>
                <div class="card-body">
                    <form action="../fpdf/PruebaV.php" method="POST">
                        <input type="submit" class="btn btn-danger" value="Imprimir">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>