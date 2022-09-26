<?php

include("indice.php");

$idproduct = $_GET['xid_product'];

$xc=conectar();
$sql="DELETE FROM producto WHERE id_producto='$idproduct'";
$gsent= $xc->prepare($sql);
$gsent->execute();

header('Location:producto.php');

?>
