<?php
include("../Model/conexion.php");

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $Nombre = $_POST['Nombre'];
    $TipoProducto = $_POST['TipoProducto'];
    $Stock = $_POST['Stock'];
    $Precio = $_POST['Precio'];

    $nombreImagen = $_FILES['Imagen']['name'];
    $rutaImagen = "../img/" . $nombreImagen;

    move_uploaded_file($_FILES['Imagen']['tmp_name'], $rutaImagen);

    $sql = "INSERT INTO productos (Nombre, TipoProducto, Stock, Precio, Imagen) VALUES (:Nombre, :TipoProducto, :Stock, :Precio, :Imagen)";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);
    $stmt->bindParam(':TipoProducto', $TipoProducto, PDO::PARAM_STR);
    $stmt->bindParam(':Stock', $Stock, PDO::PARAM_INT);
    $stmt->bindParam(':Precio', $Precio, PDO::PARAM_STR);
    $stmt->bindParam(':Imagen', $nombreImagen, PDO::PARAM_STR);
    $stmt->execute();

    header("Location: ../View/Almacen/Almacen.php");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
