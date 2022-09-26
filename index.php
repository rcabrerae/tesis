<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>BASE DE DATOS ELFERRETERO</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
</head>
<body class="text-center" background="https://fierros.com.co/wp-content/uploads/2020/04/shutterstock_394647790-1-1500x1125.jpg">
<form class="form-signin" action="validar.php" method="POST">
    <img class="mb-4" src="https://cdn.shopify.com/s/files/1/0271/8082/6758/files/el_ferretero-03_79a2f19a-1a0e-4b26-89ba-7a4e3c699f63.jpg?v=1628862659" alt="" width="172" height="172">
    <h1 class="h3 mb-3 font-weight-normal">Inicia sesión</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="id_cuentausuario" id="inputid" class="form-control" placeholder="Ingresa id cuentausuario" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="password" name="usu_password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
    <div class="checkbox mb-3">
        <label>
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">&copy; ELFERRETERO>
</form>
</body>
</html>
