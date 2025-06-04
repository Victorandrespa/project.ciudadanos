<?php

    $nombre = $_GET["txt_nombre"];
    $edad = (int)$_GET["txt_edad"];
    $sueldo = (float)$_GET["txt_sueldo"];

    echo "Hola mundo";
    echo "<br> Bienvenido: ". $nombre;
    echo "<br> Edad: ". $edad;
    echo "<br> Sueldo: ". $sueldo;

    echo "<br> sqrt de edad es: ". sqrt($edad);

    for ($i=1; $i <=$edad ; $i++) { 
        echo "<br>".$i;
    }

    if (!($edad<18)) {
        echo "<br> Es mayor de edad";
    }

    /*
    var_dump($nombre );
    echo "<br>";
    var_dump($edad );
    echo "<br>";
    var_dump($sueldo );
    */

?>

