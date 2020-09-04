<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>


<center><b>LOGIN</b>

 <form action="logica/loguear.php" method="POST">
 <br><br>
 <input type="text" name="usuario" placeholder="Ingrese su usuario">
 <br><br>
 <input type="password" name="clave" placeholder="Ingrese su clave">
 <br><br>
 <button type="submit">ENTRAR</button>
 <button type="reset">BORRAR</button>
 <input type="button" value="CREAR CUENTA" onclick="location='registro.php'"/>
</form>
 </center>   
 
</body>
</html>