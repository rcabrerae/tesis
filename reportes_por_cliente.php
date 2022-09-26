<?php
@ob_start();
session_start();
include('indice.php');
$xc=conectar();
$res= $xc->prepare('SELECT * FROM clientes');
$res->execute();

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<table border=\"1\" align=\"center\">
    <font size='6' color='#084B8A'><center>REPORTE DE CLIENTES</center></font>
    <tr>
        <th><strong>ID_cliente</strong></th>
        <th><strong>Direccion</strong></th>
        <th><strong>Ncelular</strong></th>
        <th><strong>Ntelefono</strong></th>
        <th><strong>ID_tipocliente</strong></th>
    </tr>
    <?php while($filas= $res->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $filas['id_cliente'] ?></td>
            <td><?php echo $filas['direccion'] ?></td>
            <td><?php echo $filas['ncelular'] ?></td>
            <td><?php echo $filas['ntelefono'] ?></td>
            <td><?php echo $filas['id_tipocliente1'] ?></td>
        </tr>
    <?php } ?>


</table>
</html>


<?php
$reporte = ob_get_clean();
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Cliente.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo $reporte;
?>
