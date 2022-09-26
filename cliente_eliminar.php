<?php

include("indice.php");

$id = $_GET['xid_cliente'];

$xc=conectar();
$sql="DELETE FROM clientes WHERE id_cliente='$id'";
$gsent= $xc->prepare($sql);
$gsent->execute();

header('Location:clientes.php');


?>
