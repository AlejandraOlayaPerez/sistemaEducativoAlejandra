<?php

//se importan los archivos de conexiondb.php y estudiantr.php
require_once 'modelo/estudiante.php';
require_once 'modelo/conexiondb.php';
//se instancia el objeto estudiante
$oEstudiante=new estudiante();
$oEstudiante->id=$_GET['id'];
$result=$oEstudiante->eliminarEstudiante();
if($result){
    header("Location: listarEstudiante.php");
}else{
    echo "error al eliminar el estudiante";
}
?>