<?php
include("indice.php");
$id=leerParam("id_cli","");
$dni=leerParam("dnioruc","");
$nom=leerParam("nombre","");
$direc=leerParam("direccion","");
$ncel=leerParam("ncelular","");
$ntel=leerParam("ntelefono","");
$id_tipo=leerParam("id_tipo","");


$xc=conectar();
$sql="UPDATE clientes SET DNIoRUC='$dni', Nombre='$nom', direccion='$direc',ncelular='$ncel', ntelefono='$ntel',id_tipocliente1='$id_tipo' WHERE id_cliente='$id'";
$gsent= $xc->prepare($sql);
$gsent->execute();
header("Location:clientes.php");


?>
