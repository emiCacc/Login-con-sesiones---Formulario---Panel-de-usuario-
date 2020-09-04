<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

require 'logica/conexion.php';

$id = $_GET["id"];

$query = "SELECT * FROM usuarios where id=$id";

$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);
//var_dump($array );
//$array = mysqli_fetch_array($consulta);



?>


 <form action = "logica/editar_usuario.php" method = "POST"> 
       
        <b>Modificar Usuario</b>
        <input name="id" type="text" hidden="hidden" placeholder=" Nuevo Usuario" value="<?php echo $array['id'] ?>">
        <p>Usuario: <input name="usuario" type="text" placeholder=" Nuevo Usuario" value="<?php echo $array['usuario'] ?>"></p>
        <p>Clave: <input name="clave" type="text" placeholder=" Nueva Clave"value="<?php echo $array['clave'] ?>"></p>
        <p>Nombre: <input name="nombre" type="text" placeholder=" Nuevo Nombre"value="<?php echo $array['nombre'] ?>"></p>
        <p>Email: <input name="email" type="text" placeholder=" Nuevo Email"value="<?php echo $array['email'] ?>"></p>
        <input name="guardar" value="Actualizar" type="submit"><br>
            
        </form>

</body>
</html>