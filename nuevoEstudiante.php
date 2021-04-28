<?php
require 'head.php';
?>

<html>
<head>
<link src="estilo.css"></link>
</head>

<body background="fondo.jpg">
<div class="container">
<h1>NUEVO ESTUDIANTE</h1>
<form action="crearEstudiante.php" method="GET">
<div class="row">
    <div class="col col-6">
        <label for="">Tipo de Documento</label>
        <!-- <input type="text" class="form-control" name="tipoDocumento" id=""> -->
        <select class="form-select" name="tipoDocumento" id="">
            <option value="" disabled selected>Selecciones una opción</option>
            <option value="RC">Registro Civil</option>
            <option value="TI">Tarjeta de Identidad</option>
            <option value="CC">Cedula Ciudadanía</option>
            <option value="CE">Cedula Extranjería</option>
        </select>
    </div>
    <div class="col col-6">
        <label for="">Número de documento</label>
        <input type="text" class="form-control" name="documento" id="" placeholder="Numero de documento">
    </div>
</div>
<div class="row">
    <div class="col col-6">
        <label for="">Nombres</label>
        <input type="text" class="form-control" name="nombre" id="" placeholder="Nombre">
    </div>
    <div class="col col-6">
        <label for="">Apellidos</label>
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

<input type="submit" class="btn btn-outline-success" value="Guardar" >
<a href="http://localhost/phpCRUD/listarEstudiante.php" class="btn btn-dark">Atras</a>
</div>
</form>
</body>
</html>
<?php
require 'footer.php';

?>