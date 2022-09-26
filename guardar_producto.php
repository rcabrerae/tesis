<?php
include("indice.php");


$nombre=leerParam("nombre","");
$marca=leerParam("marca","");
$precio=leerParam("precio","");
$stock=leerParam("stock","");
$idtipo=leerParam("idtipo","");


$xc=conectar();
$res= $xc->prepare('SELECT id_producto FROM producto ORDER BY id_producto desc');
$res->execute();
$fila = $res->fetch(PDO::FETCH_NUM);
$id=$fila[0]+1;


$sql="INSERT INTO producto VALUES('$id','$nombre', '$marca','$precio','$stock','$idtipo')";

$res= $xc->prepare($sql);
$res->execute();
header("Location:producto.php");

?>