<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/estiloslogin.css">
</head>
<body>
<div class="main">
    <div class="container">
        <form action="./control_login.php" method="post" class="form">
            <h2 class="brand">Facultad de ciencias puras y Naturales</h2>
                <label class="lab">Usuario</label>
                <input class="field" type="text" id="user" name="user" placeholder="Escribe tu usuario">
                <label class="lab">Password</label>
                <input class="field" type="password" name="password" id="pwd" placeholder="Ingresa tu contraseña">
            <input class="btn" type="submit" value="Login">
        </form>
        <div class="image">
            <img src="./images/EscudoFCPN.png" alt="fcpn">
        </div>
    </div>
</div>
</body>
</html>