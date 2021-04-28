<?php
require '../head.php';
require_once '../modelo/matricula.php';
require_once '../modelo/estudiante.php';
require_once '../modelo/conexiondb.php';

?>

<html>
<head></head>
<body background="fondo.jpg">


<div class="container">
<h1>Nueva Matricula</h1>

    <?php
    $oMatricula=new Matricula();
    $oMatricula->idCurso=$_GET['idCurso'];
    $oMatricula->detalleCurso();
    ?>
        <div class="row">
        <div class="col">
            <h3>Curso: </h3>
            <input class="form-control" type="text" value="<?php echo $oMatricula->curso; ?>" disabled>
        </div>
        <div class="col">
            <h3>Profesor: </h3>
            <input class="form-control" type="text" value="<?php echo  $oMatricula->nombreProfesor." ".$oMatricula->apellidoProfesor; ?>" disabled>
        </div>
        </div>

        <br>

        <?php 
        $oEstudiante=New estudiante();
        $result=$oEstudiante->ListarEstudiantes();
        ?>

        <form action="../CRUD_matricula/crearMatricula.php" method="GET">
        <input type="text" name="idCurso" value="<?php echo $oMatricula->idCurso; ?>" style="display:none;">
            <h3>Estudiante: </h3>
            <select class="form-select" name="idEstudiante" id="">
            <option value="" disabled selected>Selecciones una opción</option>
            <?php foreach($result as $registro){
            ?>
            <option value="<?php echo $registro['id'];?>"><?php echo $registro['nombres']." ".$registro['apellidos'];?></option>
            <?php
            }
            ?>
            </select>
            <br>
            <input type="submit" class="btn btn-success" value="Guardar" >
            <a href="http://localhost/phpCRUD/CRUD_matricula/listarMatricula.php?id=<?php echo $oMatricula->idCurso; ?>" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
        </form>
    
<br>

        

</div>
</body>

</html>


<?php
require '../footer.php';
?>