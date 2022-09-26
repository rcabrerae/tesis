<?php

    function leerParam($param, $default)
    {
        if (isset($_POST["$param"]))
            return $_POST["$param"];
        if (isset($_GET["$param"]))
            return $_GET["$param"];
        return $default;
    }

    function conectar(){
        try {
            $pdo = new PDO("mysql:dbname=ELFERRETERO;host=172.31.94.195;port=3306","root","root");
            return $pdo;
            die();
        }catch (PDOException $e){
            print "No conecto la base de datos ".$e->getMessage()."<br/>";
            die();
        }
    }

    /*function desconectar($xc){
        mysqli_close($xc);
    }*/

?>
