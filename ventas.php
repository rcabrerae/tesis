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
        th{
            color:white;
            background: red;
        }
    </style>
</head>
<body background="https://cdn.pixabay.com/photo/2020/10/15/14/10/tool-5656897_1280.png">

<?php
include("header.php");
include("indice.php");
$xc=conectar();
$gsent= $xc->prepare('SELECT * FROM ventas');
$gsent->execute();

?>

<main>
    <div class="container">
        <br><br>
        <h1>Ventas</h1>
        <a type="button" class="btn btn-primary" href="crear_ventas.php">Crear Ventas</a>
	<a type="button" class="btn btn-primary" href="crear_detalle.php">Crear Detalle Venta</a>
	<br></br>
        <div class="card">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id Ventas</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">id_cliente</th>
                    <th scope="col">id_empleado</th>
                    <th scope="col">id_comprobante</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($filas = $gsent->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $filas['id_ventas'] ?></td>
                        <td><?php echo $filas['fecha'] ?></td>
                        <td><?php echo $filas['hora'] ?></td>
                        <td><?php echo $filas['id_cliente1'] ?></td>
                        <td><?php echo $filas['id_empleado1'] ?></td>
                        <td><?php echo $filas['id_comprobante1'] ?></td>
                        <td><a href='ventas_editar.php?xid_vent=<?php echo $filas['id_ventas'] ?>'>EDITAR</a></td>
                        <td><a href='ventas_eliminar.php?xid_vent=<?php echo $filas['id_ventas'] ?>' onclick="return confirm('Esta seguro que desea eliminar?');">ELIMINAR</a></td>
                    </tr>
                    <?php
                }?>

                </tbody>
            </table>
        </div>
    </div>
</main>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
