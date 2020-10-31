<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>SJ Virtual</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="shortcut icon" href="../img/icon.png" />
    </style>
    <?php include '../modelo/conexion.php';?>
  </head>
  <body class="text-center">
  <div class="form-signin">
  <img class="mb-4" src="../img/icon.png" alt="" width="85" height="85">
  <h2 class="h2 mb-3 form-signin">SJ Virtual</h2>
  <label for="inputEmail" class="sr-only">Correo</label>
  <input type="email" id="email" class="form-control" placeholder="Correo" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
  <div class="checkbox mb-3">
  </div>
  <button  onclick="registrar()" class="btn-lg btn-primary btn-block" type="submit">Registrar</button>
  <p class="mt-4 mb-3 text-muted"><a href="vistaLogin.php">Ya tengo una cuenta.</a></p>
  <p class="mt-4 mb-3 text-muted">&copy; SJ Virtual</p>
  </div>
  <script src="../controlador/controlador.js"></script>  
</div>
</body>
</html>