<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Banco</title>
    <link href="estilos.css" rel="stylesheet">
  </head>
  <body>
  <div class="form">
    <form action="trans.php" method="post">
      <?php 
      ?>
      <br>
      <div class="form-floating">
        <label for="nombreusuario">Nombre</label>
        <input type="text" class="form-control" name="nombreusuario">
      </div>
        <div class="form-floating">
        <label for="numerocuenta">Número de cuenta</label>
        <input type="number" class="form-control" name="numerocuenta">
      </div>
      <div class="form-floating">
        <label for="numerodesti1">Número de cuenta del destinatario</label>
        <input type="number" class="form-control" name="numerodesti1">
      </div>
      <div class="form-floating">
        <label for="numerodesti1">Nombre del destinatario</label>
        <input type="text" class="form-control" name="nombredesti1">
      </div>
      <div class="form-floating">
        <label for="cantidaddineroe">Cantidad de dinero a enviar</label>
        <input type="number" class="form-control" name="cantidaddineroe">
      <button class="w-100 btn btn-lg btn-primary" type="submit">Realizar transacción
      </button>
    </form>
    </div>
  </body>
</html>
