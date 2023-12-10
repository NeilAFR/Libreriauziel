<?php
include("../Model/conexion.php");
try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $ProductoID = $_POST['IDProducto'];
    $NuevoNombre = $_POST['NuevoNombre'];
    $NuevoTipoProducto = $_POST['NuevoTipoProducto'];
    $NuevoStock = $_POST['NuevoStock'];
    $NuevoPrecio = $_POST['NuevoPrecio'];
    $NuevaImagen = $_FILES['NuevaImagen']['name'];

    if (!empty($NuevaImagen)) {
        $rutaNuevaImagen = "../img/" . $NuevaImagen;
        move_uploaded_file($_FILES['NuevaImagen']['tmp_name'], $rutaNuevaImagen);
    } else {
        $rutaNuevaImagen = null;
    }

    // Realiza la consulta SQL para actualizar todos los campos
    $sql = "UPDATE productos 
            SET Nombre = :NuevoNombre, 
                TipoProducto = :NuevoTipoProducto, 
                Stock = :NuevoStock, 
                Precio = :NuevoPrecio, 
                Imagen = :NuevaImagen 
            WHERE IDProducto = :ProductoID";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':NuevoNombre', $NuevoNombre, PDO::PARAM_STR);
    $stmt->bindParam(':NuevoTipoProducto', $NuevoTipoProducto, PDO::PARAM_STR);
    $stmt->bindParam(':NuevoStock', $NuevoStock, PDO::PARAM_INT);
    $stmt->bindParam(':NuevoPrecio', $NuevoPrecio, PDO::PARAM_STR);
    $stmt->bindParam(':NuevaImagen', $NuevaImagen, PDO::PARAM_STR);
    $stmt->bindParam(':ProductoID', $ProductoID, PDO::PARAM_INT);

    $stmt->execute();

    header("Location: ../View/Almacen/Almacen.php?success=Producto actualizado correctamente");
} catch (PDOException $e) {
    header("Location: ../View/Almacen/Almacen.php?error=Error al actualizar el producto: " . $e->getMessage());
}

?>