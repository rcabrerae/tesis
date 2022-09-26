<?php
include("indice.php");


$dni=leerParam("dni","");
$nomb=leerParam("nombres","");
$apell=leerParam("apellidos","");
$sexo=leerParam("sexo","");
$direcc=leerParam("direccion","");
$ncel=leerParam("ncelular","");
$id_per=leerParam("id_perfil","");

$xc=conectar();
$res= $xc->prepare('SELECT id_empleado FROM empleados ORDER BY id_empleado desc');
$res->execute();
$fila = $res->fetch(PDO::FETCH_NUM);
$id=$fila[0]+1;


$sql="INSERT INTO empleados VALUES('$id','$dni', '$nomb','$apell','$sexo','$direcc','$ncel','$id_per')";

$res= $xc->prepare($sql);
$res->execute();
header("Location:empleados.php");

?>