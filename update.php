<?php
include("conexion.php");
$conn = conectar();
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$edad = $_POST['edad'];

$query = "UPDATE alumnos SET nombre='$nombre', apaterno='$apaterno', amaterno='$amaterno', edad='$edad' WHERE id='$id'";
$resultado = mysqli_query($conn, $query);

if($resultado){
    Header("location: index.php");

} else {
    echo "Fuck, something was wrong";
}
?>
