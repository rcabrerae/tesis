<?php
include("indice.php");

$turno=leerParam("turno","");
$empleado=leerParam("empleado","");

$xc=conectar();
$res= $xc->prepare('SELECT id_asignarturnovendedores FROM asignarturnovendedores ORDER BY id_asignarturnovendedores desc');
$res->execute();
$fila = $res->fetch(PDO::FETCH_NUM);
$id=$fila[0]+1;


$sql="INSERT INTO asignarturnovendedores VALUES('$id','$turno', '$empleado')";
$res= $xc->prepare($sql);
$res->execute();
header("Location:turnovendedores.php");

?>