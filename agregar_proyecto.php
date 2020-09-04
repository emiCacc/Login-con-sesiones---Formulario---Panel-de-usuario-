<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    

<center> <b>Nuevo Proyecto</b>

 <form action="logica/proyectos.php?variable=1" method="POST">
 Nombre del Proyecto <input type="text" name="proyecto" placeholder="Ingrese un nombre">
 <br><br>
 Asociar a usuario <input type="text" name="id_usuario" placeholder="Ingrese un id de usuario">
 <br><br>
 Titulo del Proyecto <input type="text" name="titulo" placeholder="Ingrese un titulo">
 <br><br>
 Fecha limite <input type="date" name="fecha_limite" placeholder="Ingrese una Fecha">
 <br><br>
 % de avance <input type="text" name="status" placeholder="Ingrese %">
 <br><br>
 <button type="submit">ENVIAR</button>
 <button type="reset">BORRAR</button>
 
</form>
 </center>

</body>
</html>