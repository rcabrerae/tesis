<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        h1{
            color: black;
        }
        label{
            color: black;
        }
    </style>
</head>
<?php
include("header.php");
include("indice.php");
$xc=conectar();
$sql1= "SELECT * FROM producto";
$sql= "SELECT * FROM ventas";
$query = $xc->query($sql);
$query1 = $xc->query($sql1);
?>
<body background="https://th.bing.com/th/id/OIP.EEoGvNj08fU-n6vjDFOwNQHaE8?w=282&h=188&c=7&r=0&o=5&dpr=1.65&pid=1.7">
<div class="container">
    <br>
    <h1>Registro de Nueva Detalle Venta</h1>
    <br>
    <form action="guardar_detalle.php" method="POST">
	<div class="form-group">
	  <label>ID_producto</label>
          <?php
        if($query1){
            if($query1->rowCount()>0){
                while($fila1= $query1->fetch(PDO::FETCH_ASSOC)){
        ?>
       <select class="form-control" name="producto">
       <?php foreach($query1 as $fila1): ?>
        <option value="<?php echo $fila1['id_producto']?>"><?php echo $fila1['id_producto']?></option>
       <?php endforeach ?>
       </select>
       <?php
                 }
               }
             }
        ?>
	</div>

        <div class="form-group">
         <label>ID_venta</label>
	<?php
	if($query){
            if($query->rowCount()>0){
		while($fila= $query->fetch(PDO::FETCH_ASSOC)){
	?>
       <select class="form-control" name="ventas">
       <?php foreach($query as $fila): ?>
        <option value="<?php echo $fila['id_ventas']?>"><?php echo $fila['id_ventas']?></option>
       <?php endforeach ?>
       </select>
       <?php
                 }
               }
	     }
           
        ?>
       </div>
	<div class="form-group">
	  <label>Unidades ventas</label>
	  <input class="form-control" type="" name="uventas">
	</div>
	<div class="form-group">
	 <label>Importe Total</label>
     	 <input class="form-control" type="" name="importe">
        </div>
        <input class="button" type="submit" value="Guardar Detalle Venta">
    </form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
