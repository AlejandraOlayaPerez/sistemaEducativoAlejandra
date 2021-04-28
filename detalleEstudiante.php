<?php 
require_once 'head.php';
require_once 'modelo/estudiante.php';
require_once 'modelo/conexiondb.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
</head>
<body background="fondo.jpg">

<div class="container">

<?php 
    $oEstudiante=new estudiante();
    $oEstudiante->id=$_GET['id'];
    $oEstudiante->ConsultarEstudiante();
?>

    <div class="row">
        <div class="col">
            <h1>ESTUDIANTE: </h1>
            <input class="form-control" type="text" value="<?php echo  $oEstudiante->nombre." ".$oEstudiante->apellido; ?>" disabled>
        </div>
    </div>





<table class="table table-striped">
<thead>
    <tr>
        <th>Curso</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Nota 3</th>
        <th>Promedio</th>
    </tr>
</thead>
<tbody>

    <?php

    $consulta=$oEstudiante->detalleEstudiante();
    foreach($consulta as $registro){
        ?>
        <tr>
            <td><?php echo $registro['nombreCurso']; ?></td>
            <td><?php echo $registro['nota1']; ?></td>
            <td><?php echo $registro['nota2']; ?></td>
            <td><?php echo $registro['nota3']; ?></td>
            <td><?php echo $registro['promedio']; ?></td>
        </tr>

        <?php
    }
    ?>
    



</tbody>


<table>

<a href="http://localhost/phpCRUD/listarEstudiante.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>







</div>
    
</body>
</html>