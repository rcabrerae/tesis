<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        label{
            color: black;
            font-size: 30px;
        }
    </style>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="https://images.pexels.com/photos/1583653/pexels-photo-1583653.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">

<?php
include("header.php");
include("indice.php");

$xc=conectar();
$gsent= $xc->prepare('SELECT * FROM empleados');
$gsent->execute();
?>

<main>
    <br>
    <div class="form-group container" align="center">
        <label>Reporte de empleados</label><br>
        <a href="reportes_por_empleado.php" type="button" class="btn btn-primary">Descargar</a>
    </div>
    <br>
    <div class="form-group container" align="center">
        <label>Reporte de productos</label><br>
        <a href="reportes_por_producto.php" type="button" class="btn btn-primary">Descargar</a>
    </div>
    <br>
    <div class="form-group container" align="center">
        <label>Reporte de ventas</label><br>
        <a href="reportes_por_ventas.php" type="button" class="btn btn-primary">Descargar</a>
    </div>
    <br>
    <div class="form-group container" align="center">
        <label>Reporte de clientes</label><br>
        <a href="reportes_por_cliente.php" type="button" class="btn btn-primary">Descargar</a>
    </div>
</main>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>