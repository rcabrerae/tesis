<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        h1{
            color: black;
        }
        label{
            color: black;
        }
    </style>
</head>
<?php
include("header.php");
?>
<body background="https://th.bing.com/th/id/OIP.EEoGvNj08fU-n6vjDFOwNQHaE8?w=282&h=188&c=7&r=0&o=5&dpr=1.65&pid=1.7">

<div class="container">
    <br>
    <h1>Registro de Nuevo Cliente</h1>
    <br>
    <form action="guardar_cliente.php" method="POST">
        <div class="form-group">
            <label>DNI:</label>
            <input class="form-control" type="" name="DNIoRUC">
        </div>
        <div class="form-group">
            <label>Nombre:</label>
            <input class="form-control" type="" name="nombre">
        </div>
        <div class="form-group">
            <label>Direccion:</label>
            <input class="form-control" type="" name="direccion">
        </div>
        <div class="form-group">
            <label>Ncelular</label>
            <input class="form-control" type="" name="ncelular">
        </div>
        <div class="form-group">
            <label>Ntelefono</label>
            <input class="form-control" type="" name="ntelefono">
        </div>
        <div class="form-group">
            <label>ID_tipocliente</label>
            <input class="form-control" type="" name="id_tipo">
        </div>
        <input class="button" type="submit" value="Guardar Cliente">
    </form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>