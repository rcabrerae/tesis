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

$idemp=leerParam("xid_emple","");
$xc=conectar();
$res= $xc->prepare('SELECT * FROM empleados WHERE id_empleado= :idemp');
$res->execute(['idemp' => $idemp]);
$filas = $res->fetch(PDO::FETCH_ASSOC);

?>

<body background="https://th.bing.com/th/id/OIP.EEoGvNj08fU-n6vjDFOwNQHaE8?w=282&h=188&c=7&r=0&o=5&dpr=1.65&pid=1.7">

<div class="container">
    <br>
    <h1>Editar Empleado</h1>
    <br>
    <form action="guardar_editar_empleados.php" method="POST">
        <input type="text" readonly="" hidden="" name="id_emp" value="<?php echo $filas['id_empleado'] ?>">
        <div class="form-group">
            <label>Dni</label>
            <input class="form-control" type="" name="dni" value="<?php echo $filas['dni'] ?>">
        </div>
        <div class="form-group">
            <label>Nombres</label>
            <input class="form-control" type="" name="nombre" value="<?php echo $filas['nombres'] ?>">
        </div>
        <div class="form-group">
            <label>Apellidos</label>
            <input class="form-control" type="" name="ape" value="<?php echo $filas['apellidos'] ?>">
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <input class="form-control" type="" name="sexo" value="<?php echo $filas['sexo'] ?>">
        </div>
        <div class="form-group">
            <label>Dirección</label>
            <input class="form-control" type="" name="direc" value="<?php echo $filas['direccion'] ?>">
        </div>
        <div class="form-group">
            <label>Ncelular</label>
            <input class="form-control" type="" name="num" value="<?php echo $filas['ncelular'] ?>">
        </div>
        <div class="form-group">
            <label>ID_PerfilSistema</label>
            <input class="form-control" type="" name="perfil" value="<?php echo $filas['id_perfilsistema2'] ?>">
        </div>
        <input class="button" type="submit" value="Guardar Empleado">
    </form>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>