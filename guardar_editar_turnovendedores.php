<?php
include("indice.php");
$id=leerParam("id_asignarturno","");
$idturno=leerParam("id_turno2","");
$idemple=leerParam("id_emple","");

$xc=conectar();
$sql="UPDATE asignarturnovendedores SET id_turno2='$idturno', id_empleado2='$idemple' WHERE id_asignarturnovendedores='$id'";
$gsent= $xc->prepare($sql);
$gsent->execute();
header("Location:turnovendedores.php");


?>