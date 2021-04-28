<?php
  require '../head.php';
  require_once '../modelo/estudiante.php';
  require_once '../modelo/conexiondb.php';
  require_once '../modelo/matricula.php';
  require_once '../modelo/nota.php';
$oNota=new nota();

  if (isset($_GET['nota1'])){
    
    
    $oNota->nota1=$_GET['nota1'];
    $oNota->nota2=$_GET['nota2'];
    $oNota->nota3=$_GET['nota3'];
    $oNota->promedio=$_GET['promedio'];
    $oNota->idMatricula=$_GET['idMatricula'];
    $result=$oNota->nuevoNota();
    echo $result;
  }else{
    $oNota->idCurso=$_GET['idCurso'];
    $oNota->idEstudiante=$_GET['idEstudiante'];
    $oNota->consultarNota();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Notas</title>
</head>
<body>

<div class="container">
        <?php


        $oEstudiante=new estudiante();
        $oEstudiante->id=$_GET['idEstudiante'];
        $oEstudiante->ConsultarEstudiante();
        ?>

        <html>
        <head></head>
        <body background="fondo.jpg">

    <form action="" method="GET">
    <input type="text" name="idCurso" value="<?php echo $oNota->idCurso; ?>" style="display:none;">
    <input type="text" name="idEstudiante" value="<?php echo $oNota->idEstudiante; ?>" style="display:none;">
    <input type="text" name="idMatricula" value="<?php echo $_GET['idMatricula']; ?>" style="display:none;">

    <div class="row">
        <div class="col col-6">
            <h1>Estudiante: </h1>
            <input class="form-control" type="text" value="<?php echo  $oEstudiante->nombre." ".$oEstudiante->apellido; ?>" disabled>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col col-4">
            <h4>Nota 1: </h4>
            <input class="form-control" type="number" id="nota1" name="nota1" value="<?php echo $oNota->nota1; ?>">
        </div>
        <div class="col col-4">
            <h4>Nota 2: </h4>
            <input class="form-control" type="number" id="nota2" name="nota2" value="<?php echo $oNota->nota2; ?>">
        </div>
        <div class="col col-4">
            <h4>Nota 3: </h4>
            <input class="form-control" type="number" id="nota3" name="nota3" value="<?php echo $oNota->nota3;?>">
        </div>
        <div class="col col-4">
            <h4>Promedio: </h4>
            <input class="form-control" type="number" step="0.1" id="respuestaPromedio" name="promedio" value="<?php echo $oNota->promedio;?>">
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="Promedio()" value="promedio">Promedio</button>
    <input type="submit" class="btn btn-success" value="Guardar">

    </form>



  
</body>
</html>

<?php
require '../footer.php';
?>