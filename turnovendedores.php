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
            color: darkred;
        }
        th{
            color:white;
            background: red;
        }
    </style>
</head>
<body background="https://images.pexels.com/photos/3615716/pexels-photo-3615716.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">

<?php
include("header.php");
include("indice.php");

$xc=conectar();
$gsent= $xc->prepare('SELECT * FROM asignarturnovendedores');
$gsent->execute();

?>

<main>
    <div class="container">
        <br><br>
        <h1>Turno Vendedores</h1>
        <a type="button" class="btn btn-primary" href="crear_turnovendedores.php">Crear Turno Vendedores</a>
        <br><br>
        <div class="card">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID asignarturno</th>
                    <th scope="col">ID turno</th>
                    <th scope="col">ID empleado</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($filas = $gsent->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $filas['id_asignarturnovendedores'] ?></td>
                        <td><?php echo $filas['id_turno2'] ?></td>
                        <td><?php echo $filas['id_empleado2'] ?></td>
                        <td><a href='asignarturno_editar.php?xid_turno=<?php echo $filas['id_asignarturnovendedores'] ?>'>EDITAR</a></td>
                        <td><a href='asignarturno_eliminar.php?xid_turno=<?php echo $filas['id_asignarturnovendedores'] ?>' onclick="return confirm('¿Estas seguro que deseas eliminar?');">ELIMINAR</a></td>
                    </tr>
                    <?php
                }?>

                </tbody>
            </table>
        </div>
    </div>
</main>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
