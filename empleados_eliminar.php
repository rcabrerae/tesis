<?php

include("indice.php");

$idemp = $_GET['xid_emple'];

$xc=conectar();
$sql="DELETE FROM empleados WHERE id_empleado='$idemp'";

$gsent= $xc->prepare($sql);
$gsent->execute();

header('Location:empleados.php');


?>
