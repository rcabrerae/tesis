<?php
ob_start();
session_start();
include('indice.php');
$xc=conectar();
$res= $xc->prepare('SELECT * FROM empleados');
$res->execute();
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<table border=\"1\" align=\"center\">
    <font size='6' color='#084B8A'><center>REPORTE DE EMPLEADOS</center></font>
    <tr>
        <th><strong>ID_empleado</strong></th>
        <th><strong>DNI</strong></th>
        <th><strong>Nombres</strong></th>
        <th><strong>Apellidos</strong></th>
        <th><strong>Sexo</strong></th>
        <th><strong>Direccion</strong></th>
        <th><strong>Ncelular</strong></th>
        <th><strong>ID_perfilsistema</strong></th>
    </tr>


    <?php while($filas= $res->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $filas['id_empleado'] ?></td>
            <td><?php echo $filas['dni'] ?></td>
            <td><?php echo $filas['nombres'] ?></td>
            <td><?php echo $filas['apellidos'] ?></td>
            <td><?php echo $filas['sexo'] ?></td>
            <td><?php echo $filas['direccion'] ?></td>
            <td><?php echo $filas['ncelular'] ?></td>
            <td><?php echo $filas['id_perfilsistema2'] ?></td>
        </tr>
    <?php } ?>


</table>
</html>


<?php
$reporte = ob_get_clean();
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Empleados.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo $reporte;
?>
