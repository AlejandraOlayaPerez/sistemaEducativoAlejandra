<?php
require_once '../modelo/nota.php';
require_once '../modelo/conexiondb.php';

$oNota=new nota();
$oNota->idMatricula=$_GET['idMatricula'];
$oNota->nota1=$_GET['nota1'];
$oNota->nota2=$_GET['nota2'];
$oNota->nota3=$_GET['nota3'];
$result=$oNota->nuevoNota();
if($result){
    header("location: ../CRUD_notas/listarNota.php");
}else {
    echo "Error al registrar la Nota";
}
?>