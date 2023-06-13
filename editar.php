<?php
include("conexion.php");
$conn= conectar();
$id = $_GET['id'];
$query = "SELECT * FROM alumnos WHERE id='$id'";
$resultado = mysqli_query($conn, $query);
$row = mysqli_fetch_array($resultado);
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD PHP y MSQL</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <!---Datos del alumno-->
            <p>Elian Alejandro Galindo Valencia</p>
            <p>Ingenieria en sistemas computacionales</p>
            <p>NUA:147715</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Actualiza los datos</h1>
                <form action="update.php" method="post">
                    <input 
                    type="hidden"
                    name="id"
                    value="<?php echo $row['id'] ?>"
                    >
                    <input 
                    type="text" 
                    name="nombre"
                    placeholder="Ingresa el nombre"
                    class="form-control mb-3"
                    value="<?php echo $row['nombre'] ?>"
                    >
                    <input 
                    type="text" 
                    name="apaterno"
                    placeholder="Ingresa el A.paterno"
                    class="form-control mb-3"
                    value="<?php echo $row['apaterno'] ?>"
                    >
                    <input 
                    type="text" 
                    name="amaterno"
                    placeholder="Ingresa el A.materno"
                    class="form-control mb-3"
                    value="<?php echo $row['amaterno'] ?>"
                    >

                    <input 
                    type="text" 
                    name="edad"
                    min="0"
                    max="999"
                    placeholder="Ingresa la edad"
                    class="form-control mb-3"
                    value="<?php echo $row['edad'] ?>"
                    >

                    <a 
                    href="index.php"
                    class="btn btn-warning mb-5"
                    style="width: 100%;">
                        Regresar
                    </a>
                    <input type="submit"
                    class="btn btn-primary"
                    value="enviar"
                    style="width: 100%"
                    >
                    
                </form>
            </div>
           
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
