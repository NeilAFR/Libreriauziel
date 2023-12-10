<?php
include ("../Model/conexion.php");
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
$sql = "INSERT INTO usuarios (Correo, Contraseña) VALUES ('$Correo', '$Contraseña')";

try {
  if ($conexion->query($sql)) {
      echo "Registro exitoso";
      sleep(2); 
      header('Location: ../View/Principal.php');
  } else {
      $errorInfo = $conexion->errorInfo();
      echo "Error al registrar usuario: " . $errorInfo[2];
  }
} catch (PDOException $e) {
  echo "Excepción atrapada: " . $e->getMessage();
}

?>