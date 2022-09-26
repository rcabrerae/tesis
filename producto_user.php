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
<body background="https://st2.depositphotos.com/1748392/10559/v/950/depositphotos_105596332-stock-illustration-construction-tools-background-seamless-white.jpg">

<?php
include_once("header_user.php");
include_once("indice.php");

$xc=conectar();
//$sql="SELECT * FROM producto";
$gsent= $xc->prepare('SELECT * FROM producto');
$gsent->execute();

?>

<main>
    <div class="container">
        <br><br>
        <h1>Productos</h1>
        <br><br>
        <div class="card">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id Producto</th>
                    <th scope="col">Nombre Producto</th>
                    <th scope="col">Marca Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">ID Tipo Producto</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($filas = $gsent->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $filas['id_producto'] ?></td>
                        <td><?php echo $filas['nombreproducto'] ?></td>
                        <td><?php echo $filas['marcaproducto'] ?></td>
                        <td><?php echo $filas['precio'] ?></td>
                        <td><?php echo $filas['stock'] ?></td>
                        <td><?php echo $filas['id_tipoproducto1'] ?></td>
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