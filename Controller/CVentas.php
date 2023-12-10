<?php
include("../../Model/conexion.php");

function procesarFormulario($conexion)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombreProducto = $_POST['Nombre'];
        $stockVendido = $_POST['Stock'];

        $stockActualQuery = $conexion->prepare("SELECT Stock FROM productos WHERE Nombre = :nombreProducto");
        $stockActualQuery->bindParam(':nombreProducto', $nombreProducto, PDO::PARAM_STR);
        $stockActualQuery->execute();
        $stockActual = $stockActualQuery->fetchColumn();

        if ($stockActual >= $stockVendido) {
            $updateQuery = $conexion->prepare("UPDATE productos SET Stock = Stock - :stockVendido WHERE Nombre = :nombreProducto");
            $updateQuery->bindParam(':stockVendido', $stockVendido, PDO::PARAM_INT);
            $updateQuery->bindParam(':nombreProducto', $nombreProducto, PDO::PARAM_STR);

            if ($updateQuery->execute()) {
                echo '<div class="alert alert-success" role="alert">Venta realizada con éxito. Stock actualizado.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error al realizar la venta.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">No hay suficiente stock para realizar la venta.</div>';
        }
    }
}
?>
