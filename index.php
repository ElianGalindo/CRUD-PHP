<?php
    include("conexion.php");
    $conexion = conectar();
    $query = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conexion, $query);
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
            <p><b>Elian Alejandro Galindo Valencia</b></p>
            <p><b>Ingenieria en sistemas computacionales</b></p>
            <p><b>NUA:147715</b></p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h1>Ingresa los datos</h1>
                <form action="insertar.php" method="post">
                    <input 
                    type="text" 
                    name="nombre"
                    placeholder="Ingresa el nombre"
                    class="form-control mb-3">
                    <input 
                    type="text" 
                    name="apaterno"
                    placeholder="Ingresa el A.paterno"
                    class="form-control mb-3">
                    <input 
                    type="text" 
                    name="amaterno"
                    placeholder="Ingresa el A.materno"
                    class="form-control mb-3">

                    <input 
                    type="text" 
                    name="edad"
                    min="0"
                    max="999"
                    placeholder="Ingresa la edad"
                    class="form-control mb-3">

                    <input type="submit"
                    class="btn btn-primary"
                    value="enviar"
                    style="width: 100%">
                </form>
            </div>
            <div class="col-md-8">
                <h1>Alumnos del sistema</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NUA</th>
                            <th>Nombre</th>
                            <th>A. PATERNO</th>
                            <tH>A. MATERNO</tH>
                            <th>EDAD</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($alumno=mysqli_fetch_array($resultado)){ ?>
                             
                            <tr>
                                <td><?php echo $alumno['id']?></td>
                                <td><?php echo $alumno['nombre']?></td>
                                <td><?php echo $alumno['apaterno']?></td>
                                <td><?php echo $alumno['amaterno']?></td>
                                <td><?php echo $alumno['edad']?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $alumno['id'] ?>" class="btn btn-warning">
                                        Editar
                                    </a>
                                </td>
                                <td>
                               
                                <a href="#" 
                                class="btn btn-sm btn-danger" 
                                data-bs-toggle="modal" 
                                data-bs-target="#eliminaModal" 
                                data-bs-id="<?php echo $alumno['id'] ?>">
                                <i class="fa-solid fa-trash"></i></i> Eliminar</a> 


                                </td>
                                
                            </tr>

                            <?php }?>
                    </tbody>
                </table>
                
            </div>
            
        </div>
       
    </div>
    
    <?php include('eliminaModal.php')?>
                <script>
                    let eliminaModal = document.getElementById('eliminaModal')

                    eliminaModal.addEventListener('shown.bs.modal', event => {
                        let button = event.relatedTarget
                        let id= button.getAttribute('data-bs-id')
                        eliminaModal.querySelector('.modal-footer #id').value = id
                    })
                </script>

   
                <!---<script src="assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                            

  </body>
</html>


