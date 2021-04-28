<?php
require 'head.php';
require_once 'mensaje.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="estilo.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="eliminar.js"></script>
    <title>Curso</title>
</head>

<body background="fondo.jpg">
    <div class="container">
        <h1>MATERIAS</h1>

        <?php 
        if(isset($_GET['mensaje'])){
            $oMensaje=new mensajes();
            echo $oMensaje->mensaje($_GET['tipoMensaje'],$_GET['mensaje']);
        }
        ?>

    
<table class="table table-striped">
   <thead>
        <tr>
            <th>Curso</th>
            <th><a class="btn btn-info" href="nuevoCurso.php"><i class="fas fa-user-plus"> Nuevo</a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
        require_once 'modelo/curso.php';
        require_once 'modelo/conexiondb.php';

        $oCurso=new curso();
        $consulta=$oCurso->listarCurso();
        foreach($consulta as $registro){
        ?>
        <tr>
            <td><?php echo $registro['curso']; ?></td>
            <td>
                <a href="http://localhost/phpCRUD/formularioEditarCurso.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
                <a data-bs-toggle="modal" data-bs-target="#eliminarFormulario" onclick="eliminar(<?php echo $registro['id']; ?>)" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
                <a href="http://localhost/phpCRUD/listarMatricula.php?id=<?php echo $registro['id']; ?>" class="btn btn-success"><i class="fas fa-book-open"></i> Matricula</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="http://localhost/phpCRUD/index.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
</div>
</body>
</html>

<?php
require 'footer.php';
?>

<!-- Modal -->
<div class="modal fade" id="eliminarFormulario" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Label">Eliminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que desea eliminar el curso?</p>
      </div>
      <div class="modal-footer">
      <form action="eliminarCurso.php" method="GET">
        <input type="text" name="id" id="eliminar" style="display:none;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>