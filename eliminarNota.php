<?php
require_once 'modelo/nota.php';
require_once 'modelo/conexiondb.php';

$oNota=new nota();
$oNota->id=$_GET['id'];
$result=$oNota->eliminarNota();
if($result){
    header("Location: listarNota.php");
}else{
    echo "error al eliminar la Nota";
}
?>