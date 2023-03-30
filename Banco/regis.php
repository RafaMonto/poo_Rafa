<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Banco</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <?php 
    $conn = mysqli_connect('localhost', 'root', '', 'banco');

    if((empty($_POST['cedula'])) && (empty($_POST['nombre'])) && (empty($_POST['apellidos'])) && (empty($_POST['nrocuenta'])) && (empty($_POST['sdo']))){
        echo "Por favor llenar todos los campos";
    } else {
        $ced = $_POST['cedula'];
        $nom = $_POST['nombre'];
        $apl = $_POST['apellidos'];
        $nrocuenta = $_POST['nrocuenta'];
        $sdo = $_POST['sdo'];

        $add = "INSERT INTO `usuarios`(`Cedula`, `Nombre`, `Apellidos`, `Numero de cuenta`, `Saldo`) VALUES ('$ced','$nom','$apl','$nrocuenta','$sdo')";

    if (mysqli_query($conn, $add)) {
        ?>
        <h3><?php
        echo "Datos agregados correctamente";
        ?></h3><?php

      } else {
        ?>
        <h3><?php
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?></h3><?php
      }
    mysqli_close($conn);
    }

    
    ?>
    
<main class="form-signin w-100 m-auto">
    <div class="form">
  <form action="" method="post">
    <h1>BANCO</h1>
    <div class="form-floating">
      <input type="number" class="form-control" name="cedula" placeholder="Cedula"required>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="nombre" placeholder="Nombre"required>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"required>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name="nrocuenta" placeholder="Numero de cuenta"required>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name="sdo" placeholder="Saldo actual"required>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit"  onClick="<?php header('Location: indexBanco.php'); ?>">Registrar
    </button>
  </form>
    </div>
    
</main>  
  </body>
</html>
