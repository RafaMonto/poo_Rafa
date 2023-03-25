<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
    <title>LOGIN</title>
</head>
<body>
    <div class="form-index">
        <h2>LOGIN</h2>
        <form method="post" action="./db/functions.php" class="form">
            <input type="text" name="user" id="uno" placeholder="User" style="border-radius: 5px; height: 30px">
            <br>
            <br>
            <input type="password" name="password" id="dos" placeholder="Password" style="border-radius: 5px; height: 30px">
            <br>
            <p>¿Olvido la contraseña?</p>
            <br>    
            <input type="submit" name="submit" value="submit" class="log">
        </form>
        <p>Or login with</p>
        <div class="buttons">
            <button class="face" >FACEBOOK</button>
            <button class="insta">INSTAGRAM</button>
        </div>
        <p>Don't have account?</p><p id="si">Sing up Now</p>
    </div>
    
</body>
</html>