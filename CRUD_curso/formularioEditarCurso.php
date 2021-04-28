<?php
require_once '../modelo/curso.php';
require_once '../modelo/conexiondb.php';
require '../head.php';
$oCurso=new curso();
$oCurso->id=$_GET['id'];
$registro=$oCurso->consultarCurso();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
</head>

<body background="fondo.jpg">
<div class="container">
<form action="../CRUD_curso/editarCurso.php" method="GET">
    <div class="container">
        <div class="row">
            <div class="col col-xl-3 col-md-6 col-12">
            <input type="text" name="id" value="<?php echo $oCurso->id; ?>" style="display:none;">
            <label for="">Materia</label>
            <input class="form-control" type="text" name="curso" value="<?php echo $oCurso->curso; ?>">
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-outline-success" value="Guardar" >
        <a href="http://localhost/phpCRUD/CRUD_curso/listarCurso.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
    </div>
    </form>
    </div>

</div>

</body>

</html>

