<?php
require_once 'modelo/curso.php';
require_once 'modelo/conexiondb.php';
require 'head.php';
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
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Editar Curso</title>
</head>

<body background="fondo.jpg">
<div class="container">
<form action="editarCurso.php" method="GET">
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
        <a href="http://localhost/phpCRUD/listarCurso.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
    </div>
    </form>
    </div>

</div>

</body>

</html>

