<?php
require_once 'modelo/nota.php';
require_once 'modelo/conexiondb.php';

$oNota=new nota();
$oNota->id=$_GET['id'];
$oNota->nota1=$_GET['nota1'];
$oNota->nota2=$_GET['nota2'];
$oNota->nota3=$_GET['nota3'];
$oNota->notaFinal=$_GET['notaFinal'];
$oNota->promedio=$_GET['promedio'];
$result=$oNota->actualizarNota();
if($result){
    header("location: listarNota.php");
}else {
    echo "Error al registrar la Nota";
}

?>