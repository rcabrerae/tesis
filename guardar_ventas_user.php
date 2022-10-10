<?php
include("indice.php");

$fecha=leerParam("fecha","");
$hora=leerParam("hora","");
$idclie=leerParam("idcliente","");
$idemplea=leerParam("idempleado","");


$xc=conectar();
$res= $xc->prepare('SELECT id_ventas FROM ventas ORDER BY id_ventas desc');
$res->execute();
$fila = $res->fetch(PDO::FETCH_NUM);
$id=$fila[0]+1;

$res1= $xc->prepare('SELECT id_comprobante1 FROM ventas ORDER BY id_comprobante1 desc');
$res1->execute();
$fila1 = $res1->fetch(PDO::FETCH_NUM);
$idcompro=$fila1[0]+1;

$sql="INSERT INTO ventas VALUES('$id','$fecha','$hora','$idclie','$idemplea','$idcompro')";
$res2= $xc->prepare($sql);
$res2->execute();
header("Location:ventas_user.php");

?>
