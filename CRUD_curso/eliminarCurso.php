<?php
require_once '../modelo/curso.php';
require_once '../modelo/conexiondb.php';

$oCurso=new curso();
$oCurso->id=$_GET['id'];
$result=$oCurso->eliminarCurso();
require_once '../modelo/mensaje.php';
$oMensaje=new mensajes();
if($result){
    header("Location: ../CRUD_curso/listarCurso.php?tipoMensaje=".$oMensaje->tipoBlanco."&mensaje=Se+elimino+el+curso+correctamente");
}else{
    echo "error al eliminar el curso";
}
?>