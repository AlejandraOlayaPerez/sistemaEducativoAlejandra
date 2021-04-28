<?php
require '../head.php';

?>
<html>
<head></head>

<body>
    


<div class="container">
<h1>NUEVO PROFESOR</h1>
<form action="../CRUD_profesor/crearProfesor.php" method="GET">
<br>
<br>
    <div class="row">
        <div class="col col-6">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="" placeholder="Nombre">
        </div>
        <div class="col col-6">
        <label for="">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="" placeholder="Apellido">
        </div>
    </div>
    <div class="row">
        <div class="col col-6">
        <label for="">Dirección</label>
        <input type="text" class="form-control" name="direccion" id="" placeholder="Direccion">
        </div>
        <div class="col col-6">
        <label for="">Teléfono</label>
        <input type="text" class="form-control" name="telefono" id="" placeholder="Telefono">
        </div>
    </div>
<br>
<input type="submit" class="btn btn-success" value="Guardar" >
<a href="http://localhost/phpCRUD/CRUD_profesor/listarProfesor.php" class="btn btn-dark"> <i class="fas fa-arrow-circle-left"></i> Atras</a>
</div>
</form>
</body>
</html>
<?php
require '../footer.php';
?>