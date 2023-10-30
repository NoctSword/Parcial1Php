<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="template/style.css">
  <title>Document</title>
</head>
<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="session/sesion.php" method="POST">
    <h1>INICIO DE SESION</h1>
    <h2 class="h3 mb-3 fw-normal">Por favor, inicia sesión</h2>
    <div class="form-floating">
      <input type="usuario" class="form-control" id="usuario" placeholder="example" name="user">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="contrasenia" placeholder="Password" name="pass">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-success" type="submit" name="btn_ingresar">Iniciar sesión</button>
    <div class="my-2">
      <a href="login.php">¿Olvidaste tu contraseña?</a>
    </div>
  </form>
</main>


    
  </body>
</html>