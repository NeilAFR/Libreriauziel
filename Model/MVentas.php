<?php
include("conexion.php");

$sql = "SELECT * FROM productos";
$query = $conexion->query($sql);
?>

<table class="table">
    <thead class="table-success table-striped">
        <tr>
            <th>IDProducto</th>
            <th>Nombre</th>
            <th>Tipo de Producto</th>
            <th>Stock</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <th><?php echo $row["IDProducto"]; ?></th>
                <td><?php echo $row['Nombre'] ?></td>
                <td><?php echo $row['TipoProducto'] ?></td>
                <td><?php echo $row['Stock'] ?></td>
                <td><?php echo $row['Precio'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>