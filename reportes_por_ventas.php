<?php
ob_start();
include('indice.php');
$xc=conectar();
$res= $xc->prepare('SELECT * FROM ventas');
$res->execute();
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<table border=\"1\" align=\"center\">
    <font size='6' color='#084B8A'><center>REPORTE DE VENTAS</center></font>
    <tr>
        <th><strong>ID_ventas</strong></th>
        <th><strong>Ncomprobante</strong></th>
        <th><strong>Fecha</strong></th>
        <th><strong>Hora</strong></th>
        <th><strong>ID_cliente</strong></th>
        <th><strong>ID_empleado</strong></th>
        <th><strong>ID_comprobante</strong></th>
    </tr>
    <?php while($filas=$res->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $filas['id_ventas'] ?></td>
            <td><?php echo $filas['ncomprobante'] ?></td>
            <td><?php echo $filas['fecha'] ?></td>
            <td><?php echo $filas['hora'] ?></td>
            <td><?php echo $filas['id_cliente1'] ?></td>
            <td><?php echo $filas['id_empleado1'] ?></td>
            <td><?php echo $filas['id_comprobante1'] ?></td>
        </tr>
    <?php } ?>


</table>
</html>


<?php
$reporte = ob_get_clean();
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Ventas.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo $reporte;
?>
