<?php
$servidor = "localhost";
$usuario = "root";
$password = "";

try{
    // dbname=prueba Es la base de datos a la cuál nos conectaremos en este ejemplo es "prueba"
    $conexion = new PDO("mysql:host=$servidor; dbname=prueba", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si todo sale bien nos muestra este mensaje
    echo "Conexión realizada con éxito";    
}
catch(PDOException $e){
    
    // Si algo sale mal nos muestra esta excepción
    echo "La conexión ha fallado" . $e->getMessage();
}
$conexion = null;