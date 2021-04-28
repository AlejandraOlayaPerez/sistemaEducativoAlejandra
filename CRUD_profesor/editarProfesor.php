<?php
require_once '../modelo/profesor.php';
require_once '../modelo/conexiondb.php';

$oProfesor=new profesor();
$oProfesor->id=$_GET['id'];
$oProfesor->nombre=$_GET['nombre'];
$oProfesor->apellido=$_GET['apellido'];
$oProfesor->direccion=$_GET['direccion'];
$oProfesor->telefono=$_GET['telefono'];
$result=$oProfesor->actualizarProfesor();
require_once '../modelo/mensaje.php';
$oMensaje=new mensajes();
if($result){
    header("location: ../CRUD_profesor/listarProfesor.php?tipoMensaje=".$oMensaje->tipoCorrecto."&mensaje=Se+edito+correctamente+la+informacion");
}else {
    echo "Error al registrar al profesor";
}

?>