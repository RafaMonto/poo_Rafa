<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


$nombreusuario = $_POST['nombreusuario'];
$nombredestinario = $_POST['nombredesti1'];
$numerocuenta = $_POST['numerocuenta'];
$numerodesti1 = $_POST['numerodesti1'];
$cantidaddineroe = $_POST['cantidaddineroe'];


$sql = "SELECT saldo FROM usuarios WHERE Nombre='$nombreusuario'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);




if ($row['saldo'] < $cantidaddineroe) {

	echo "Error: El remitente no tiene suficiente saldo para realizar la transacción.";

} else {
	
	$sql1 = "UPDATE usuarios SET saldo=saldo-'$cantidaddineroe' WHERE Nombre='$nombreusuario'";
	$sql2 = "UPDATE usuarios SET saldo=saldo+'$cantidaddineroe' WHERE Nombre='$nombredestinario'";
	mysqli_query($conn, $sql1);
	mysqli_query($conn, $sql2);
	echo "Transacción exitosa!";
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <a href="indexBanco.php">
        <button type="submit" class="btn btn-primary">Volver atrás</button>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>