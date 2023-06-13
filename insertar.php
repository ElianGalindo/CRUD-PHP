<?php
    include("conexion.php");
    $conexion = conectar();
    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $edad = $_POST['edad'];

    $query = "INSERT INTO alumnos (nombre, apaterno, amaterno, edad)
              VALUES('$nombre', '$apaterno','$amaterno','$edad')";

    $resultado = mysqli_query($conexion, $query);

    if($resultado){
        header('location: index.php');
    }else{
        echo '$resultado';
    }
    
?>
