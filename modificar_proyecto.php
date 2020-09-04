<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

<?php 

require 'logica/conexion.php';

$id_proyecto = $_GET["idTarea"];

$query = "SELECT * FROM tareas where id_tarea=$id_proyecto";

$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);
//var_dump($array );
//$array = mysqli_fetch_array($consulta);



?>


<center> <b>Nuevo Proyecto</b>
<form action='logica/proyectos.php?variable_accion=2' method='POST'>
<input type='hidden' name='id_t' value="<?php echo $id_proyecto;?>">
Nombre del Proyecto 
<input type="text" name="proyecto" placeholder="Ingrese un nombre" value="<?php echo $array['proyecto'] ?>">
 <br><br>
 Titulo del Proyecto <input type="text" name="titulo" placeholder="Ingrese un titulo" value="<?php echo $array['titulo'] ?>">
 <br><br>
 Fecha limite <input type="date" name="fecha_limite" placeholder="Ingrese una Fecha" value="<?php echo $array['fecha_limite'] ?>">
 <br><br>
 % de avance <input type="text" name="status" placeholder="Ingrese %" value="<?php echo $array['status'] ?>">



 <br><br>
 <button type="submit">Editar</button>
 <button  onclick="irCancelar()">Cancelar</button>
 
</form>
 </center>

</body>
<script>
function irCancelar(){

location.href="paginaprincipal.php";
}

</script>
</html>