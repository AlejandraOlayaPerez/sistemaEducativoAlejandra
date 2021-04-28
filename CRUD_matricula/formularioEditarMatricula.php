<?php
require_once '../modelo/Matricula.php';
require_once '../modelo/conexiondb.php';
$oMatricula=new Matricula();
$oMatricula->id=$_GET['id'];
$registro=$oMatricula->ConsultarMatricula();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matricula</title>
</head>
<form action="../CRUD_matricula/editarMatricula.php" method="GET">
    <div class="container">
    <div class="row">
            
            
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="idEstudiante" value="<?php echo $oMatricula->idEstudiante; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Apellido</label>
            <input class="form-control" type="text" name="idProfesor" value="<?php echo $oMatricula->idProfesor; ?>">
            </div>
            
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Guardar">
    </div>
    </form>
    </div>