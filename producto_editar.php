<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
include("header.php");
include("indice.php");

$idproduct=leerParam("xid_product","");
$xc=conectar();
$res= $xc->prepare('SELECT * FROM producto WHERE id_producto= :idproduct');
$res->execute(['idproduct' => $idproduct]);
$filas = $res->fetch(PDO::FETCH_ASSOC);
?>

<body background="https://th.bing.com/th/id/OIP.EEoGvNj08fU-n6vjDFOwNQHaE8?w=282&h=188&c=7&r=0&o=5&dpr=1.65&pid=1.7">

<div class="container">
    <br>
    <h1>Editar Producto</h1>
    <br>
    <form action="guardar_editar_producto.php" method="POST">
        <input type="text" readonly="" hidden="" name="id_product" value="<?php echo $filas['id_producto'] ?>">
        <div class="form-group">
            <label>Nombre Producto</label>
            <input class="form-control" type="" name="nombre" value="<?php echo $filas['nombreproducto'] ?>">
        </div>
        <div class="form-group">
            <label>Marca del Producto</label>
            <input class="form-control" type="" name="marca" value="<?php echo $filas['marcaproducto'] ?>">
        </div>
        <div class="form-group">
            <label>Precio</label>
            <input class="form-control" type="" name="precio" value="<?php echo $filas['precio'] ?>">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input class="form-control" type="" name="stock" value="<?php echo $filas['stock'] ?>">
        </div>
        <div class="form-group">
            <label>ID_Tipoproducto</label>
            <input class="form-control" type="" name="id_tipo" value="<?php echo $filas['id_tipoproducto1'] ?>">
        </div>
        <input class="button" type="submit" value="Guardar Producto">
    </form>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>