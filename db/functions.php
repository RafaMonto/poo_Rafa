<?php

if(isset($_POST['submit'])){


    if(isset($_POST['user'])){

        include_once('ClassPoo.php');
        $usuario = $_POST['user'];
        $contraseña = $_POST['password'];
        $login = New Login();
        $login->entrarDatos($usuario, $contraseña);
        $login->loguear();
        $response = $login->loguear();

        if ($response === "true") {
            header("Location: ../home.php");
        } else {
            echo '<script language="javascript">alert("Error en datos");</script>';
        }
    }
}


?>