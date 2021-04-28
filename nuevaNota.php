<?php
require 'head.php';
require_once 'modelo/matricula.php';
require_once 'modelo/estudiante.php';
require_once 'modelo/conexiondb.php';

?>

<div class="container">
<h1>Nueva Nota</h1>
<form action="crearNota.php" method="GET">
            <div class="row">
            <div class="col col-4">
            <label for="">Nota 1</label>
            <input class="form-control" type="text" name="nota1" value="">
            </div>
            <div class="col col-4">
            <label for="">Nota 2</label>
            <input class="form-control" type="text" name="nota2" value="">
            </div>
            <div class="col col-4">
            <label for="">Nota 3</label>
            <input class="form-control" type="text" name="nota3" value="">
            </div>
            </div>

            <br>
            <input type="submit" class="btn btn-success" value="Guardar">
</form>
</div>

<?php
require 'footer.php';
?>
