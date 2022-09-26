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
        th{
            color:white;
            background: red;
        }
    </style>
</head>
<body background="https://static.vecteezy.com/system/resources/previews/001/272/221/non_2x/construction-work-tools-border-frame-vector.jpg">

<?php
include("header.php");
include("indice.php");

$xc=conectar();
$gsent= $xc->prepare('SELECT * FROM clientes');
$gsent->execute();

?>

<main>
    <div class="container">
        <br><br>
        <h1>Clientes</h1>
        <a type="button" class="btn btn-primary" href="crearclientes.php">Crear Cliente</a>
        <br><br>
        <div class="card">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id cliente</th>
                    <th scope="col">DNI/RUC</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Ncelular</th>
                    <th scope="col">Ntelefono</th>
                    <th scope="col">ID_Tipocliente</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($filas = $gsent->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $filas['id_cliente'] ?></td>
                        <td><?php echo $filas['DNIoRUC'] ?></td>
                        <td><?php echo $filas['Nombre'] ?></td>
                        <td><?php echo $filas['direccion'] ?></td>
                        <td><?php echo $filas['ncelular'] ?></td>
                        <td><?php echo $filas['ntelefono'] ?></td>
                        <td><?php echo $filas['id_tipocliente1'] ?></td>
                        <td><a href='cliente_editar.php?xid_cliente=<?php echo $filas['id_cliente'] ?>'>EDITAR</a></td>
                        <td><a href='cliente_eliminar.php?xid_cliente=<?php echo $filas['id_cliente'] ?>' onclick="return confirm('¿Estas seguro que deseas eliminar?');">ELIMINAR</a></td>
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
