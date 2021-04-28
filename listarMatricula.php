<?php
  require 'head.php';
  require_once 'modelo/matricula.php';
  require_once 'modelo/conexiondb.php';
  $idCurso=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Matricula</title>
</head>
<body background="fondo.jpg">



<div class="container">
        <?php
        $oMatricula=new Matricula();
        $oMatricula->idCurso=$_GET['id'];
        $oMatricula->detalleCurso();
        ?>
    <div class="row">
        <div class="col">
            <h1>Curso: </h1>
            <input class="form-control" type="text" value="<?php echo $oMatricula->curso; ?>" disabled>
        </div>
        <div class="col">
            <h1>Profesor: </h1>
            <input class="form-control" type="text" value="<?php echo  $oMatricula->nombreProfesor." ".$oMatricula->apellidoProfesor; ?>" disabled>
        </div>
    </div>




<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            
            <th><a class="btn btn-info" href="http://localhost/phpCRUD/nuevoMatricula.php?idCurso=<?php echo $idCurso; ?>"><i class="fas fa-user-plus"></i> Nuevo</a></th>
        </tr>
    </thead>
    <?php

        $consulta=$oMatricula->listarMatricula();
        foreach($consulta as $registro){
        ?>

        <tr>
            <td><?php echo $registro['nombres']; ?></td>
            <td><?php echo $registro['apellidos']; ?></td>
           

            <td><a href="http://localhost/phpCRUD/formularioEditar.php?id=<?php echo $registro['idEstudiante']; ?>" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
            <a href="http://localhost/phpCRUD/eliminarMatricula.php?id=<?php echo $registro['id']; ?>&idCurso=<?php echo $registro['idCurso']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
            <a href="http://localhost/phpCRUD/listarNota.php?idCurso=<?php echo $registro['idCurso']; ?>&idEstudiante=<?php echo $registro['idEstudiante']; ?>&idMatricula=<?php echo $registro['id']; ?>" class="btn btn-secondary"><i class="fas fa-check"></i> Notas</a></td>
        </tr>
        <?php
        }
        ?>
</tbody>
</table>
<a href="http://localhost/phpCRUD/listarCurso.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
</div>
</body>
</html>

<?php
require 'footer.php';
?>