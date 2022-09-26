<?php
include("indice.php");
$id=leerParam("id_product","");
$nombre=leerParam("nombre","");
$marca=leerParam("marca","");
$precio=leerParam("precio","");
$stock=leerParam("stock","");
$id_tipo=leerParam("id_tipo","");

$xc=conectar();
$sql="UPDATE producto SET nombreproducto='$nombre', marcaproducto='$marca', precio='$precio',stock='$stock', id_tipoproducto1='$id_tipo' WHERE id_producto='$id'";
$gsent= $xc->prepare($sql);
$gsent->execute();
header("Location:producto.php");


?>