<?php
$codigo = $_POST["txt_plan_id"];
//echo $codigo;
require_once("conexion.php");
$sql = "select * from planes where plan_id=".$codigo;
$ejecutar = mysqli_query($conexion,$sql);
$resultado = mysqli_fetch_assoc($ejecutar);
//print $resultado["nombre"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Editar Planes</title>
</head>

<body>

<div class="container">
    <section class="row">
        <div class="col-6">
            <h3>Editar Planes</h3>
            <form action="planes_crud.php" method="post" class="border p-2">
                <label for="" class="form-label">Plan id</label>
                <input type="number" name="txt_id" id="" class="form-control" readonly value="<?=$codigo;?>">
            
                <label for="" class="form-label">Nombres</label>
                <input type="text" name="txt_nombre" id="" class="form-control" value="<?=$resultado["nombre"];?>">
               
                <label for="" class="form-label">Pago Mensual</label>
                <input type="text" name="txt_pago" id="" class="form-control" value="<?=$resultado["pago_mensual"];?>">
             
                <label for="" class="form-label">Cantidad Minutos</label>
                <input type="text" name="txt_minutos" id="" class="form-control" value="<?=$resultado["cantidad_minutos"];?>">
              
                <label for="" class="form-label">Cantidad Mensajes</label>
                <input type="text" name="txt_mensajes" id="" class="form-control" value="<?=$resultado["cantidad_mensajes"];?>">
            
                <button type="submit" name="btn_editar_plan">Guardar</button>
            </form>
        </div>
    </section>
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>