<?php
require 'head.php';
require_once 'modelo/profesor.php';
require_once 'modelo/conexiondb.php';
$oProfesor=new Profesor();
$oProfesor->id=$_GET['id'];
$registro=$oProfesor->ConsultarProfesor();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Editar Profesor</title>
</head>
<body background="fondo.jpg">
<div class="container">
<form action="editarProfesor.php" method="GET">
<h1>EDITAR INFORMACION DEL PROFESOR</h1>
<br>
    
    <div class="row">
            <div class="col col-xl-3 col-md-6 col-12">
            <input type="text" name="id" value="<?php echo $oProfesor->id; ?>" style="display:none;">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $oProfesor->nombre; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Apellido</label>
            <input class="form-control" type="text" name="apellido" placeholder="Apellido" value="<?php echo $oProfesor->apellido; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Dirección</label>
            <input class="form-control" type="text" name="direccion" placeholder="Direccion" value="<?php echo $oProfesor->direccion; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Telefono</label>
            <input class="form-control" type="text" name="telefono" placeholder="Telefono" value="<?php echo $oProfesor->telefono; ?>">
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Guardar" >
        <a href="http://localhost/phpCRUD/listarProfesor.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
    </div>
    </form>
    </div>
</body>

<?php
require 'footer.php';
?>