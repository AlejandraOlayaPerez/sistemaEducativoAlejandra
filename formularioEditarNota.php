<?php
require_once 'modelo/nota.php';
require_once 'modelo/conexiondb.php';
$oNota=new nota();
$oNota->id=$_GET['id'];
$registro=$oNota->ConsultarNota();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Editar Nota</title>
</head>
<body>
<form action="editarNota.php" method="GET">
<div class="container">
    <div class="row">
            <div class="col col-xl-3 col-md-6 col-12">
            <input type="text" name="idNota" value="<?php echo $oNota->id; ?>" style="display:none;">
            
            <label for="">Estudiante</label>
            <input class="form-control" type="text" name="estudiante" value="<?php echo $oNota->idMatricula; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Nota 1</label>
            <input class="form-control" type="text" name="nota1" value="<?php echo $oNota->nota1; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Nota 2</label>
            <input class="form-control" type="text" name="nota2" value="<?php echo $oNota->nota2; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Nota 3</label>
            <input class="form-control" type="text" name="nota3" value="<?php echo $oNota->nota3; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Nota Final</label>
            <input class="form-control" type="text" name="notaFinal" value="<?php echo $oNota->notaFinal; ?>">
            </div>
            <div class="col col-xl-3 col-md-6 col-12">
            <label for="">Promedio</label>
            <input class="form-control" type="text" name="promedio" value="<?php echo $oNota->promedio; ?>">
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Guardar">
    </div>
    </form>






</body>