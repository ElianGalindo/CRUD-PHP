<?php
include("conexion.php");
$conn= conectar();
$id= $_POST['id'];
$query= "DELETE FROM alumnos WHERE id='$id'";
$resultado=mysqli_query($conn, $query);
if($resultado){
    Header("Location: index.php");
} else{
    echo "Fuck, something was wrong";
}
?>
