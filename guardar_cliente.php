<?php
include("indice.php");

$dni=leerParam("DNIoRUC","");
$nomb=leerParam("nombre","");
$direc=leerParam("direccion","");
$ncel=leerParam("ncelular","");
$ntel=leerParam("ntelefono","");
$tipo=leerParam("id_tipo","");

$xc=conectar();
$res= $xc->prepare('SELECT id_cliente FROM clientes ORDER BY id_cliente desc');
$res->execute();
$fila = $res->fetch(PDO::FETCH_NUM);
$id=$fila[0]+1;


$sql="INSERT INTO clientes VALUES('$id','$dni', '$nomb','$direc','$ncel','$ntel','$tipo')";
$res= $xc->prepare($sql);
$res->execute();
header("Location:clientes.php");

?>
