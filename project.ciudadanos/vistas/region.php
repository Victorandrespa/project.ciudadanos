<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../main/style.css">
    <title>Region</title>
</head>

<body class="container mt-4">

    <?php
    require_once("../main/conexion.php");
    $sql = "select * from regiones";
    $ejecutar = mysqli_query($conexion, $sql);
    if (!$conexion) {
        die("Error en la conexion de base de datos: " . mysqli_connect_error());
    }
    ?>

    <h1 class="m-2">Regiones</h1>

    <div class="d-flex flex-row">
        <button type="button" class="btn btn-outline-dark m-1">Agregar</button>
        <a href="../index.php" class="btn btn-outline-dark m-1 p-2">Volver</a>
    </div>

    <div class="table-responsive table-responsive-fixed">


        <!-- Impresion de datos en Tabla Regiones -->
        <table class="table table-hover mx-2">
            <thead class="table-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Region</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <!-- Impresion de datos -->
                <?php
                while ($datos = mysqli_fetch_assoc($ejecutar)) {
                ?>
                    <tr>
                        <td><?php echo $datos["cod_region"]; ?></td>
                        <td><?php echo $datos["nombre"]; ?></td>
                        <td><?php echo $datos["descripcion"]; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>



    <footer>
        <hr>
        <br><br>
        <h5 class="text-center">Creado por Victor</h5>
    </footer>

</body>

</html>