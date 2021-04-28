<?php
  require '../head.php';
  require_once '../modelo/matricula.php';
  require_once '../modelo/conexiondb.php';
  $idCurso=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Matricula</title>
</head>
<body>



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
            
            <th><a class="btn btn-info" href="http://localhost/phpCRUD/CRUD_matricula/nuevoMatricula.php?idCurso=<?php echo $idCurso; ?>"><i class="fas fa-user-plus"></i> Nuevo</a></th>
        </tr>
    </thead>
    <?php

        $consulta=$oMatricula->listarMatricula();
        foreach($consulta as $registro){
        ?>

        <tr>
            <td><?php echo $registro['nombres']; ?></td>
            <td><?php echo $registro['apellidos']; ?></td>
           

            <td><a href="http://localhost/phpCRUD/CRUD_estudiante/formularioEditar.php?id=<?php echo $registro['idEstudiante']; ?>" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
            <a href="http://localhost/phpCRUD/CRUD_matricula/eliminarMatricula.php?id=<?php echo $registro['id']; ?>&idCurso=<?php echo $registro['idCurso']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
            <a href="http://localhost/phpCRUD/CRUD_notas/listarNota.php?idCurso=<?php echo $registro['idCurso']; ?>&idEstudiante=<?php echo $registro['idEstudiante']; ?>&idMatricula=<?php echo $registro['id']; ?>" class="btn btn-secondary"><i class="fas fa-check"></i> Notas</a></td>
        </tr>
        <?php
        }
        ?>
</tbody>
</table>
<a href="http://localhost/phpCRUD/CRUD_curso/listarCurso.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
</div>
</body>
</html>

<?php
require '../footer.php';
?>