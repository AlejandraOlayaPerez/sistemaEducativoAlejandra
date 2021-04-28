<?php
require_once '../modelo/matricula.php';
require_once '../modelo/conexiondb.php';

$oMatricula=new Matricula();
$oMatricula->id=$_GET['id'];
$result=$oMatricula->eliminarMatricula();
if($result){
    header("Location: ../CRUD_matricula/listarMatricula.php?id=".$_GET['idCurso']);
}else{
    echo "Error al eliminar la matricula";
}
?>