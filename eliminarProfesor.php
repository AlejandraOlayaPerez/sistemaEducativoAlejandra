<?php
require_once 'modelo/profesor.php';
require_once 'modelo/conexiondb.php';

$oProfesor=new profesor();
$oProfesor->id=$_GET['id'];
$result=$oProfesor->eliminarProfesor();
require_once 'mensaje.php';
$oMensaje=new mensajes();
if($result){
    header("Location: listarProfesor.php?tipoMensaje=".$oMensaje->tipoBlanco."&mensaje=El+profesor+ha+sido+eliminado");
}else{
    echo "error al eliminar el profesor";
}
?>