<!DOCTYPE html>
<html lang="en-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso - Servidor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cuadrado">
        <div class="titulos">
            <h1>Bienvenido al sistema</h1>
            <h2>Los datos ingresados son: </h2>
        </div>
        <?php
            echo "<p style='text-align:center; margin-top: 2rem'><b>Tu Usuario: </b>" . $_POST["nombre"] . "<p><br>";
            echo "<p style='text-align:center;'><b>Tu Clave: </b>" . $_POST["pass"] . "<p><br>";  
        ?> 
    </div>   
</body>
</html>