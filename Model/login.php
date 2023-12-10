<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $consulta = "SELECT IdUsuario FROM usuarios WHERE correo = :correo AND contraseña = :contrasena";
    $stmt = $conexion->prepare($consulta);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->execute();
    $resultado = $stmt->fetch();

    if ($resultado) {
        header("Location: ../View/bienvenido.php"); 
    } else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>