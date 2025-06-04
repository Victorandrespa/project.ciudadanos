<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP</title>
</head>

<body>

    <form action="procesar.php" method="get">
        
        <label for="txt_nombre">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre">
        <br>
        <label for="txt_edad">Edad</label>
        <input type="number" name="txt_edad" id="txt_edad">
        <br>
        <label for="txt_sueldo">Sueldo</label>
        <input type="decimal" name="txt_sueldo" id="txt_sueldo">

        <button type="submit">Enviar</button>

    </form>

</body>

</html>