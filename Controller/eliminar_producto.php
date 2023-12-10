<?php
include("../Model/conexion.php");

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $ProductoID = $_POST['IDProducto'];

    $sql = "DELETE FROM productos WHERE IDProducto = :IDProducto";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':IDProducto', $ProductoID, PDO::PARAM_INT);

    $stmt->execute();

    header("Location: ../View/Almacen/Almacen.php?success=Producto eliminado correctamente");
} catch (PDOException $e) {
    header("Location: ../View/Almacen/Almacen.php?error=Error al eliminar el producto: " . $e->getMessage());
}
?>
