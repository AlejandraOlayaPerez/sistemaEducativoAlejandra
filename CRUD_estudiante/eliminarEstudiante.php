<?php

//se importan los archivos de conexiondb.php y estudiantr.php
require_once '../modelo/estudiante.php';
require_once '../modelo/conexiondb.php';
//se instancia el objeto estudiante
$oEstudiante=new estudiante();
$oEstudiante->id=$_GET['id'];
$result=$oEstudiante->eliminarEstudiante();
require_once '../modelo/mensaje.php';
$oMensaje=new mensajes();
if($result){
    header("Location: ../CRUD_estudiante/listarEstudiante.php?tipoMensaje=".$oMensaje->tipoBlanco."&mensaje=El+estudiante+ha+sido+eliminado");
}else{
    echo "error al eliminar el estudiante";
}
?>