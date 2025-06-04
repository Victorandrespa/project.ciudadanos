<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Agregar regiones</title>
</head>

<body>

    <?php
    $codigo = $_POST["hidden_codigoa"];
    //Buscar el codigo en la base de datos en la tabla de regiones
    require_once("conexion.php");
    $sql = "select * from regiones where cod_region=" . $codigo;
    $ejecutar = mysqli_query($conexion, $sql);
    $datos = mysqli_fetch_assoc($ejecutar);

    //imprime el contenido del array que tiene el resultado
    //print_r($datos);

    ?>


    <h1 class="m-5">Editar Region</h1>

    <div class="m-5">
        <form action="crud_region.php" method="post">
            <label for="txt_codigo">Codigo</label>
            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" value="<?php echo $codigo; ?>"
                readonly>

            <label for="txt_nombre">Nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?php echo $datos["nombre"];?>">

            <label for="txt_desc">Descripcion</label>
            <input type="text" name="txt_desc" id="txt_desc" class="form-control" value="<?php echo $datos["descripcion"];?>">

            <button type="submit" class="form-control btn btn-primary mt-5" name="btn_modificar">Guardar</button>
        </form>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

</body>

</html>
</body>

</html>