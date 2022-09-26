<?php
include("indice.php");
$id=leerParam("id_emp","");
$dni=leerParam("dni","");
$nom=leerParam("nombre","");
$ape=leerParam("ape","");
$sex=leerParam("sexo","");
$direc=leerParam("direc","");
$num=leerParam("num","");
$perfil=leerParam("perfil","");


$xc=conectar();
$sql="UPDATE empleados SET dni='$dni', nombres='$nom', apellidos='$ape',sexo='$sex', direccion='$direc', ncelular='$num', id_perfilsistema2='$perfil' WHERE id_empleado='$id'";
$gsent= $xc->prepare($sql);
$gsent->execute();
header("Location:empleados.php");


?>