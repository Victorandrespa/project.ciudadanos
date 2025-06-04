<!-- Coneccion hacia base de datos php -->
<?php
    $servidor = "localhost";
    $usuario = "root";
    $contra ="";
    $baseDatos = "fs2025_telefonica";

//realizo la coneccion
    $conexion = mysqli_connect("$servidor","$usuario","$contra","$baseDatos");

//prueba de coneccion
    if(!$conexion){
        echo"Problemas con coneccion";
    }
?>