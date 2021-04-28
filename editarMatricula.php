<?php
require_once 'modelo/matricula.php';
require_once 'modelo/conexiondb.php';

$oMatricula=new matricula();
$oMatricula->id=$_GET['id'];
$oMatricula->idCurso=$_GET['idCurso'];
$oMatricula->curso=$_GET['curso'];
$oMatricula->idEstuante=$_GET['idEstudiante'];
$oMatricula->idProfesor=$_GET['idProfesor'];
$result=$oMatricula->actualizarMatricula();
if($result){
    header("location: listarMatricula.php");
}else {
    echo "Error al registrar la matricula";
}
?>