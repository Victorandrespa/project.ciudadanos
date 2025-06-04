<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<title>Planes</title>
</head>

<body class="container">

    <h3>Planes</h3>
    <a href="menu.php">Menu principal</a>

    <div class="row">

        <?php
        //utilizar la coneccion, cargar ese archivo
        require_once("procesos_crud/conexion.php");
        $sql = "SELECT * from planes";

        //Ejecutar la consulta en la base de datos
        $ejecutar = mysqli_query($conexion, $sql);

        //Traslada $ejecutar a un array de php
        //$resultado = mysqli_fetch_array($ejecutar);
        //print_r($resultado);
        
        while ($resultado = mysqli_fetch_array($ejecutar)) {
            ?>
            <div class="card col-3 m-2 p-2" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        Plan: <?= $resultado['nombre'] ?>
                    </h5>
                    <p class="card-text">
                        Pago Mensual: Q <?= $resultado['pago_mensual'];?>
                        <br>
                        Cantidad de minutos: Q <?= $resultado['cantidad_minutos'];?>
                    </p>
                     
                <form action="procesos_crud/form_editar_plan.php" method="post">
                    <input type="hidden" name="txt_plan_id" id="txt_plan_id" 
                    value="<?=$resultado["plan_id"]?>">
                    <button type="submit" name="btn_editar" class="btn btn-primary">Editar</button>
                </form>

                 <form action="procesos_crud/planes_crud.php" method="post">
                    <input type="hidden" name="txt_plan_id" id="txt_plan_id" 
                    value="<?=$resultado["plan_id"]?>">
                    <button type="submit" name="btn_eliminar" class="btn btn-primary">Eliminar</button>
                </form>

                </div>
            </div>

            <?php
        }


        ?>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>