<?php
@ob_start();
if(!isset($_SESSION['rol'])){
    header('location:index.php');
}else{
    if($_SESSION['rol'] != 10){
        header('location:index.php');
    }
}
?>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EL FERRETERO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="empleados.php">Empleados<span class="sr-only"></span></a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="producto.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ventas.php">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="turnovendedores.php">Asignar vendedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reportes.php" tabindex="-1" aria-disabled="true">Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
