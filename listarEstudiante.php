<?php
require 'head.php';
require_once 'mensaje.php';
?>

<html>
    <head>
    <link href="estilo.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="eliminar.js"></script>
    </head>


    <body background="fondo3.jpg">
        <div class="container">
         
        <?php 
        if(isset($_GET['mensaje'])){
            $oMensaje=new mensajes();
            echo $oMensaje->mensaje($_GET['tipoMensaje'],$_GET['mensaje']);
        }
        ?>
        
        <H1>ESTUDIANTES </H1>
        <!-- etiqueta para crear la tabla -->
        <table class="table table-striped">
        <!-- etiqueta el encabezado de la tabla -->

        <thead>
        <tr>
            <th>TipoDocumento</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th><a class="btn btn-info" href="nuevoEstudiante.php"><i class="fas fa-user-plus"></i> Nuevo</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        //se hace referencia a los archivos estudiante y conexiondb
        require_once 'modelo/estudiante.php';
        require_once 'modelo/conexiondb.php';
        //se instancia el objeto estudiante
        $oEstudiante=new estudiante();
        //se llama la función ListarEstudiantes y se almacena
        //el valor en la variable $Consulta
        $Consulta=$oEstudiante->ListarEstudiantes();
        foreach($Consulta as $registro){
            ?>
            <tr>
                <td><?php echo $registro['tipoDocumento']; ?></td>
                <td><?php echo $registro['documentoIdentidad']; ?></td>
                <td><?php echo $registro['nombres']; ?></td>
                <td><?php echo $registro['apellidos']; ?></td>
                <td><?php echo $registro['direccion']; ?></td>
                <td><?php echo $registro['telefono']; ?></td>
                <td>
                    <a href="http://localhost/phpCRUD/formularioEditar.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarFormulario" onclick="eliminar(<?php echo $registro['id']; ?>)"><i class="fas fa-trash-alt"></i> Eliminar</a>
                    <a href="http://localhost/phpCRUD/detalleEstudiante.php?id=<?php echo $registro['id']; ?>" class="btn btn-light"><i class="fas fa-address-card"></i> Detalle</a>
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
        <p>¿Esta seguro que desea eliminar el estudiante?</p>
      </div>
      <div class="modal-footer">
      <form action="eliminarEstudiante.php" method="GET">
        <input type="text" name="id" id="eliminar" style="display:none;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>