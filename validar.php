<?php
include_once("indice.php");
session_start();

if(isset($_GET['cerrar_sesion'])){
    session_unset();
    session_destroy();
}

$email=leerParam('id_cuentausuario','');
$pass=leerParam('usu_password','');

$pdo = conectar();
$query = $pdo->prepare('SELECT*FROM cuentausuarios WHERE id_cuentausuario = :email AND password = :pass');
$query->execute(['email' => $email, 'pass' => $pass]);
$row = $query->fetch(PDO::FETCH_NUM);

//var_dump($row);

    if($row == true){
    $rol = $row[2];
    $_SESSION['rol']= $rol;
    switch($_SESSION['rol']){
        case 10:
        header('location:empleados.php');
        break;
        case 20:
            header('location:producto_user.php');
            break;
            default:
                }
    }else{
        header('location:index.php');
    }
?>
