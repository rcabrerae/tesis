<?php
ob_start();
include('indice.php');
$xc=conectar();
$res= $xc->prepare('SELECT * FROM producto');
$res->execute();
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<table border=\"1\" align=\"center\">
    <font size='6' color='#084B8A'><center>REPORTE DE PRODUCTO</center></font>
    <tr>
        <th><strong>ID_producto</strong></th>
        <th><strong>Nombre producto</strong></th>
        <th><strong>Marca Producto</strong></th>
        <th><strong>Precio</strong></th>
        <th><strong>Stock</strong></th>
        <th><strong>ID_tipoproducto</strong></th>
    </tr>
    <?php while($filas= $res->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $filas['id_producto'] ?></td>
            <td><?php echo $filas['nombreproducto'] ?></td>
            <td><?php echo $filas['marcaproducto'] ?></td>
            <td><?php echo $filas['precio'] ?></td>
            <td><?php echo $filas['stock'] ?></td>
            <td><?php echo $filas['id_tipoproducto1'] ?></td>
        </tr>
    <?php } ?>


</table>
</html>


<?php
$reporte = ob_get_clean();
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Producto.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo $reporte;
?>
