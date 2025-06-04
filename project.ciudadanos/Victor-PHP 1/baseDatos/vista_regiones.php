<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Vista Regiones</title>
</head>

<body class="container" >

    <?php
    require_once("conexion.php");
    $sql = "select * from regiones";
    $ejecutar = mysqli_query($conexion, $sql);
    ?>

    <h1>Regiones</h1>

    <div class="mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Region
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva region</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form action="crud_region.php" method="post">
                                <label for="txt_codigo">Codigo</label>
                                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">

                                <label for="txt_nombre">Nombre</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                                <label for="txt_desc">Descripcion</label>
                                <input type="text" name="txt_desc" id="txt_desc" class="form-control">

                                <button type="submit" class="form-control btn btn-primary" name="btn_insertar" id="btn_insertar">Guardar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <table class="container table table-primary mt-5">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Region</th>
                <th>Descripcion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($datos = mysqli_fetch_assoc($ejecutar)) {
                ?>
                <tr>
                    <td><?php echo $datos["cod_region"]; ?></td>
                    <td><?php echo $datos["nombre"]; ?></td>
                    <td><?php echo $datos["descripcion"]; ?></td>
                    <td class="d-flex flex-row">
                        <form action="crud_region.php" method="post">
                            <input type="hidden" name="hidden_codigo" id="hidden_codigo"
                                value="<?php echo $datos["cod_region"]; ?>">
                            <button type="submit" name="btn_eliminar" id="btn_eliminar" class="p-1 btn">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                        <form action="form_actualizar_region.php" method="post">
                            <input type="hidden" name="hidden_codigoa" id="hidden_codigoa"
                                value="<?php echo $datos["cod_region"]; ?>">
                            <button type="submit" name="btn_editar" id="btn_editar" class="p-1 btn">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </form>                       
                    </td>

                </tr>

                <?php
            }
            ?>
        </tbody>
    </table>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>




</body>

</html>