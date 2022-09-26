<?php

include("indice.php");

$idventas = $_GET['xid_vent'];

$xc=conectar();
$sql="DELETE FROM ventas WHERE id_ventas='$idventas'";
$gsent= $xc->prepare($sql);
$gsent->execute();

header('Location:ventas.php');


?>
