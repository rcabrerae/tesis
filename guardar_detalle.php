<?php
include("indice.php");

$producto=leerParam("producto","");
$idventa=leerParam("ventas","");
$unidad=leerParam("uventas","");
$importe=leerParam("importe","");

$xc=conectar();
$res= $xc->prepare('SELECT id_detalle FROM detalleventa ORDER BY id_detalle desc');
$res->execute();
$fila = $res->fetch(PDO::FETCH_NUM);
$id = $fila[0]+1;

//foreach($producto as $valor1) {
//foreach($idventa as $valor) {
$sql="INSERT INTO `detalleventa`(`id_detalle`,`id_producto1`,`id_ventas1`,`unidadesventa`,`importe`) VALUES('$id','$producto','$idventa','$unidad','$importe')";
//echo $sql;
//die();
$res1= $xc->prepare($sql);
$res1->execute();
//echo $res1;
//die();
//}
//}
header("Location:ventas.php");

?>
