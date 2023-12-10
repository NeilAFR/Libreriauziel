<?php
try {
    $host = "localhost"; 
    $dbname = "libreriauzieldb";
    $username = "root"; 
    $password = ""; 
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {

    die("Error de conexión a la base de datos: " . $e->getMessage());
}
