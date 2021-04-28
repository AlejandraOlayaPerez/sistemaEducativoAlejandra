<?php
//se importan los archivos de conexiondb.php y estudiantr.php
    require_once '../modelo/estudiante.php';
    require_once '../modelo/conexiondb.php';
    //se instancia el objeto estudiante
    $oEstudiante=new estudiante();
    $oEstudiante->tipoDocumento=$_GET['tipoDocumento'];
    $oEstudiante->documento=$_GET['documento'];
    $oEstudiante->nombre=$_GET['nombre'];
    $oEstudiante->apellido=$_GET['apellido'];
    $oEstudiante->direccion=$_GET['direccion'];
    $oEstudiante->telefono=$_GET['telefono'];
    $result=$oEstudiante->nuevoEstudiante();
    require_once '../modelo/mensaje.php';
    $oMensaje=new mensajes();
    if($result){
        header("Location: ../CRUD_estudiante/listarEstudiante.php?tipoMensaje=".$oMensaje->tipoCorrecto."&mensaje=Se+guardo+la+informacion+correctamente");
    }else{
        echo "Error al registrar el estudiante";
    }
    
?>