<?php
    //CodoACodo - Autora: Karen Pigni - Unidad 3.1 POO 

    //DATOS 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo '<b>Su nombre:</b> '.$nombre.'<br>';
    echo '<b>Su apellido:</b> '.$apellido;

    //DATOS DEL SERVIDOR PARA CONEXION CON BASE DE DATOS
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_codoacodo";

    //CONEXION DE MYSQL DE WAMP
    @$conexion = mysqli_connect($hots, $user, $pass, $db) or die ("Error de conexión al servidor");

    //CONDICIONAL 

    if($nombre == "" or $nombre == null or $apellido == "" or $apellido == null){
        echo 'No se puede realizar la consulta porque algun campo esta vacío';
    }else{
        $query = "INSERT INTO personas VALUES (0, '$nombre', '$apellido')";
        $consulta = mysqli_query($conexion,$query);
        if($consulta == true){
            echo '<br><br>La consulta fue realizada <br><br>';
        }else{
            echo '<br><br>La consulta NO fue realizada <br><br>';
        }
    }

    //LIBERAR LA CONSULTA
    //mysqli_free_result($consulta); //NO ANDA PORQUE ESA OBSOLETO

    //CERRAMOS LA CONEXION 
    mysqli_close($conexion);

    //BOTON DE REGRESO 
    echo '<br><br><a href="index.php"><input type="submit" value="Volver"></a>';
?>