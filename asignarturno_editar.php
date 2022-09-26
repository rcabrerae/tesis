<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
include("header.php");
include("indice.php");

$idturno=leerParam("xid_turno","");
$xc=conectar();
$res= $xc->prepare('SELECT * FROM asignarturnovendedores WHERE id_asignarturnovendedores= :idturno');
$res->execute(['idturno' => $idturno]);
$filas = $res->fetch(PDO::FETCH_ASSOC);
?>

<body background="https://th.bing.com/th/id/OIP.EEoGvNj08fU-n6vjDFOwNQHaE8?w=282&h=188&c=7&r=0&o=5&dpr=1.65&pid=1.7">

<div class="container">
    <br>
    <h1>Editar Producto</h1>
    <br>
    <form action="guardar_editar_turnovendedores.php" method="POST">
        <input type="text" readonly="" hidden="" name="id_asignarturno" value="<?php echo $filas['id_asignarturnovendedores'] ?>">
        <div class="form-group">
            <label>ID_turno</label>
            <input class="form-control" type="" name="id_turno2" value="<?php echo $filas['id_turno2'] ?>">
        </div>
        <div class="form-group">
            <label>ID_empleado</label>
            <input class="form-control" type="" name="id_emple" value="<?php echo $filas['id_empleado2'] ?>">
        </div>
        <input class="button" type="submit" value="Guardar Turno">
    </form>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
