<?php
require_once '../modelo/matricula.php';
require_once '../modelo/conexiondb.php';

$oMatricula=new Matricula();
$oMatricula->idCurso=$_GET['idCurso'];
$oMatricula->idEstudiante=$_GET['idEstudiante'];
$result=$oMatricula->nuevoMatricula();
if($result){
    header("location: ../CRUD_matricula/listarMatricula.php?id=".$_GET['idCurso']);
}else {
    echo "Error al registrar la matricula";
}
?>