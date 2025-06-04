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
    $dpi = $_POST["txt_dpi"];
    $nombre = $_POST["txt_nombre"];
    $apellido = $_POST["txt_apellido"];
    $direccion = $_POST["txt_direccion"];
    $tel_casa = $_POST["txt_tel_casa"];
    $tel_movil = $_POST["txt_tel_movil"];
    $email = $_POST["txt_email"];
    $fechanac = $_POST["txt_fechanac"];
    $nivel_acad = $_POST["txt_cod_nivel_acad"];
    $cod_muni = $_POST["txt_cod_muni"];
    $contra = $_POST["txt_contra"];

    echo "Datos del ciudadano: ";
    echo "<br>DPI: " . $dpi;
    echo "<br>Nombre: " . $nombre;
    echo "<br>Descripcion: " . $desc;

    require_once("conexion.php");
    $sql = "insert into ciudadanos (dpi,nombre,apellido,direccion,tel_casa,tel_movil,email,fechanac,cod_nivel_acad,cod_muni,contra) 
    values (" . $dpi . ",
    '" . $nombre . "',
    '" . $apellido . "',
    '" . $direccion . "',
    '" . $tel_casa . "',
    '" . $tel_movil . "',
    '" . $email . "',
    '" . $fechanac . "',
    '" . $cod_nivel_acad . "',
    '" . $cod_muni . "',
    '" . $contra . "');";


    try {
        $ejecutar = mysqli_query($conexion, $sql);
        echo "<br>Datos almacenados";
        header("Location: ../vistas/ciudadanos.php");
        exit;
    } catch (Exception $th) {
        echo "<br>Datos no fueron guardados<br>" . $th;
    }
}


// Proceso Modificar Ciudadano

if (isset($_POST["btn_modificar"])) {

    // recibo datos formulario

    $dpi = $_POST["txt_dpi"];
    $nombre = $_POST["txt_nombre"];
    $apellido = $_POST["txt_apellido"];
    $direccion = $_POST["txt_direccion"];
    $tel_casa = $_POST["txt_tel_casa"];
    $tel_movil = $_POST["txt_tel_movil"];
    $email = $_POST["txt_email"];
    $fechanac = $_POST["txt_fechanac"];
    $nivel_acad = $_POST["txt_nivel_acad"];
    $cod_muni = $_POST["txt_cod_muni"];
    $contra = $_POST["txt_contra"];

    $sql = 'UPDATE ciudadanos SET 
        nombre = "' . $nombre . '", 
        apellido = "' . $apellido . '" ,
        direccion = "' . $direccion . '" ,
        tel_casa = "' . $tel_casa . '" ,
        tel_movil = "' . $tel_movil . '" ,
        email = "' . $email . '" ,
        fechanac = "' . $fechanac . '" ,
        cod_nivel_acad = "' . $nivel_acad . '" ,
        cod_muni = "' . $cod_muni . '" ,
        contra ="' . $contra . '" 
        
        WHERE dpi = ' . $dpi . ';';

    echo $sql;

    try {
        $ejecutar = mysqli_query($conexion, $sql);
        header('Location: ../vistas/ciudadanos.php');
    } catch (Exception $th) {
        echo '<br> Datos no fueron actualizados' . $th;
    }
}
