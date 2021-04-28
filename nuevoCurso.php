<?php
require_once 'head.php';
require_once 'modelo/conexiondb.php';
require_once 'modelo/profesor.php';
require_once 'modelo/matricula.php';

$oProfesor=new profesor();
$result=$oProfesor->listarprofesor();
?>

<head></head>

<body background="fondo.jpg">

<div class="container">
    <h1>Nuevo Curso</h1>
        <form action="crearCurso.php" method="GET">
            <div class="row">
                <div class="col col-6">
                    <label for="">Curso</label>
                    <input type="text" class="form-control" name="materia" id="" placeholder="Nuevo Curso">
                </div>
                <div class="col col-6">
                <label for="">Profesor</label>
                <select class="form-select" name="idProfesor" id="">
                    <option value="" disabled selected>Seleccione una opción</option>
                    <?php foreach($result as $registro){
                    ?>
                    <option value="<?php echo $registro['id'];?>"><?php echo $registro['nombre']." ".$registro['apellido'];?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
               
            </div>
            <br>
            <input type="submit" class="btn btn-outline-success" value="Guardar" >
            <a href="http://localhost/phpCRUD/listarCurso.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
        </form>
</div>
</body>

<?php
require 'footer.php';
?>