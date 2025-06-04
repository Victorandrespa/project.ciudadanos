<?php

require_once("conexion.php");

if (isset($_POST["btn_eliminar"])) {
    $id = $_POST["txt_plan_id"];
    $sql = "delete from planes where plan_id=".$id;
    echo $sql;
    try {
        $ejecutar = mysqli_query($conexion, $sql);
        echo "Registro eliminado";
        echo "<br><a href='../planes.php'>Regresar</a>";
    } catch (Exception $e) {
        echo "No se puede modificar".$th;
    }
}

if (isset($_POST["btn_editar_plan"])) {
    $id = $_POST["txt_id"];
    $nombre = $_POST["txt_nombre"];
    $pago = $_POST["txt_pago"];
    $mensaje = $_POST["txt_mensajes"];
    $minutos = $_POST["txt_minutos"];

    $sql = "update planes set 
                nombre= '" . $nombre . "',
                pago_mensual= '" . $pago . "',
                cantidad_minutos= '" . $minutos . "',
                cantidad_mensajes= '" . $mensaje . "'
            where
                plan_id=" . $id;
    echo $sql;

    try {
        $ejecutar = mysqli_query($conexion, $sql);
        echo "<br>Datos Modificados";
        echo "<br><a href='../planes.php'>Regresar</a>";

    } catch (Exception $th) {
        echo " No se puede modificar  - " . $th;
    }

}

?>