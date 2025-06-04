<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../main/style.css">
    <title>Departamentos</title>
</head>



<body class="container mt-4">

    <?php
    require_once("../main/conexion.php");
    $sql = "select * from departamentos";
    $ejecutar = mysqli_query($conexion, $sql);
    if (!$conexion) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }
    ?>


    <h1 class="m-2">Departamentos</h1>

    <div class="d-flex flex-row">
        <button type="button" class="btn btn-outline-dark m-1">Agregar</button>
        <a href="../index.php" class="btn btn-outline-dark m-1 p-2">Volver</a>
    </div>


    <div class="table-responsive table-responsive-fixed">


        <table class="table table-hover mx-2">
            <thead class="table-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Departamento</th>
                    <th>Region</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($datos = mysqli_fetch_assoc($ejecutar)) {
                ?>
                    <tr>
                        <td><?php echo $datos["cod_depto"]; ?></td>
                        <td><?php echo $datos["nombre_depto"]; ?></td>
                        <td><?php echo $datos["cod_region"]; ?></td>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>



</body>

</html>