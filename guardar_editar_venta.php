<?php
include("indice.php");
$id=leerParam("id_venta","");
$fecha=leerParam("fecha","");
$hora=leerParam("hora","");
$idcliente=leerParam("idcliente","");
$idempleado=leerParam("idempleado","");
$idcomprobante=leerParam("id_comprobante","");


$xc=conectar();
$sql="UPDATE ventas SET fecha='$fecha', hora='$hora', id_cliente1='$idcliente',id_empleado1='$idempleado', id_comprobante1='$idcomprobante' WHERE id_ventas='$id'";
$gsent= $xc->prepare($sql);
$gsent->execute();
header("Location:ventas.php");


?>
