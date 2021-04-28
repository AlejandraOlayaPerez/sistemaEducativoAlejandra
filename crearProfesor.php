<?php
require_once 'modelo/profesor.php';
require_once 'modelo/conexiondb.php';

$oProfesor=new Profesor();
$oProfesor->nombre=$_GET['nombre'];
$oProfesor->apellido=$_GET['apellido'];
$oProfesor->direccion=$_GET['direccion'];
$oProfesor->telefono=$_GET['telefono'];
$result=$oProfesor->nuevoProfesor();
require_once 'mensaje.php';
$oMensaje=new mensajes();
if($result){
    header("location: listarProfesor.php?tipoMensaje=".$oMensaje->tipoCorrecto."&mensaje=Se+guardo+la+informacion+correctamente");
}else {
    echo "Error al registrar al profesor";
}
?>