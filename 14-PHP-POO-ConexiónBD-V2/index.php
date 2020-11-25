<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="width: 80%; margin: 0 auto;">

    <!-- CodoACodo - Autora: Karen Pigni - Unidad 3.1 POO -->

    <form action="conexion.php" method="POST" style="text-align:center; margin-top: 10rem;">
        <h1>Ingrese sus datos</h1>
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required value=""> <br><br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required value=""><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>