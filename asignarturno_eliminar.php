<?php

include("indice.php");

$idturno = $_GET['xid_turno'];

$xc=conectar();
$sql="DELETE FROM asignarturnovendedores WHERE id_asignarturnovendedores='$idturno'";
$gsent= $xc->prepare($sql);
$gsent->execute();

header('Location:turnovendedores.php');


?>
