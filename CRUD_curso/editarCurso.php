<?php
require_once '../modelo/curso.php';
require_once '../modelo/conexiondb.php';

$oCurso=new curso();
$oCurso->id=$_GET['id'];
$oCurso->curso=$_GET['curso'];
$result=$oCurso->actualizarCurso();
require_once '../modelo/mensaje.php';
$oMensaje=new mensajes();
if($result){
    header("location: ../CRUD_curso/listarCurso.php?tipoMensaje=".$oMensaje->tipoCorrecto."&mensaje=Se+edito+la+informacion+correctamente");
}else {
    echo "Error al editar el curso";
}
?>