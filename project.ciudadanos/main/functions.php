<?php

//utiliza region existente
require_once("conexion.php");

// Proceso eliminar
if (isset($_POST["btn_eliminar"])) {
    $codigo = $_POST["hidden_codigo"];
    $sql = "delete from regiones where cod_region=" . $codigo;

    try {
        $ejecutar = mysqli_query($conexion, $sql);
        echo "<br>Datos almacenados";
        header("Location: vista_regiones.php");
        exit;
    } catch (Exception $th) {
        echo "<br>Datos no fueron guardados<br>" . $th;
    }
}


// Proceso insertar
//link y verificacion de datos con el formulario

if (isset($_POST["btn_insertar"])) {

    //recibo datos de formulario
    echo "Archivo de procesos Crud para las regiones ";
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $desc = $_POST["txt_desc"];

    echo "Datos de la Region:";
    echo "<br>Codigo: " . $codigo;
    echo "<br>Nombre: " . $nombre;
    echo "<br>Descripcion: " . $desc;

    require_once("conexion.php");
    $sql = "insert into regiones (cod_region,nombre,descripcion) values (" . $codigo . ",'" . $nombre . "','" . $desc . "');";


    try {
        $ejecutar = mysqli_query($conexion, $sql);
        echo "<br>Datos almacenados";
        header("Location: vista_regiones.php");
        exit;
    } catch (Exception $th) {
        echo "<br>Datos no fueron guardados<br>" . $th;
    }
}


// Proceso Modificar

if (isset($_POST["btn_modificar"])) {

    // recibo datos formulario
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $desc = $_POST["txt_desc"];

    $sql = 'UPDATE regiones SET nombre="' . $nombre . '", descripcion="' . $desc . '" WHERE cod_region = ' . $codigo . ';';

    echo $sql;

    try {
        $ejecutar = mysqli_query($conexion, $sql);
        echo 'Datos modificados';
        header('Location: vista_regiones.php');
    } catch (Exception $th) {
     echo '<br> Datos no fueron actualizados'. $th;
    }

}

?>