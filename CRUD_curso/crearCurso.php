<?php
require_once '../modelo/curso.php';
require_once '../modelo/conexiondb.php';

$oCurso=new curso();
$oCurso->curso=$_GET['materia'];
$oCurso->idProfesor=$_GET['idProfesor'];
$result=$oCurso->nuevoCurso();
require_once '../modelo/mensaje.php';
$oMensaje=new mensajes();
if($result){
    header("location: ../CRUD_curso/listarCurso.php?tipoMensaje=".$oMensaje->tipoCorrecto."&mensaje=Se+guardo+la+informacion+correctamente");
}else{
    echo "Error al registrar curso";
}
?>