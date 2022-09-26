<?php
@ob_start();
if(!isset($_SESSION['rol'])){
    header('location:index.php');
}else{
    if($_SESSION['rol'] != 20){
        header('location:index.php');
    }
}

?>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" >EL FERRETERO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="producto_user.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ventas_user.php">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes_user.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
