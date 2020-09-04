<?php
require_once 'logica/conexion.php';
session_start();
$usuario = $_SESSION['username'];
?>

<ul id="menu">
<li><a href="usuarios.php"> Usuarios</a></li>
<li><a href="paginaprincipal.php"> Gestion</a></li>
<!-- <li><a href="logica/proyectos.php?variable_accion=1"> Tareas</a></li>
-->
</ul>




<?php
echo "<h1> BIENVENIDO [$usuario] </h1>";
echo "<a href='logica/salir.php'><input type='button' value='Desloguear'></a>";
echo "<h1> Sistema de Gestión </h1>";

echo "<br>";

echo "<a href='agregar_proyecto.php'><input type='button' value='Nuevo proyecto'></a>";


$select = "SELECT * FROM tareas";
$query = mysqli_query($conexion, $select);
$array = [];

if (mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    array_push($array,$row);
  }
}
?>

<br><br><br>  
<table border="1" class="egt">

  <tr>
      
      <th > ID </th>
      <th > Proyecto </th>
      <th > Titulo </th>
      <th > Usuario </th>
      <th > Fecha limite </th>
      <th > Comunicaciones </th>
      <th > Avance (%) </th>
      <th > Acciones </th>

  </tr>


  
<?php
foreach ($array as $tarea){
  echo'<tr>';

  echo "<td><label  name= 'Tarea'>{$tarea['id_tarea']}</label></td>";
  echo "<td><label  name= 'Descripcion'>{$tarea['proyecto']}</label></td>";
  echo "<td><label  name= 'Titulo'>{$tarea['titulo']}</label></td>";
  echo "<td><label  name= 'Usuario'>{$tarea['id_usuario']}</label></td>";
  echo "<td><label  name= 'FechaLimite'>{$tarea['fecha_limite']}</label></td>";
  echo "<td><label  name= 'Comunicaciones'>{$tarea['comunicaciones']}</label></td>";
  echo "<td><label  name= 'Avance (%)'>{$tarea['status']}</label></td>";
  ?>

  <td><input type='button'  onclick="irModificar(<?php echo $tarea['id_tarea'];?>)" value='Edit'>
  <input type='button' onclick="irBorrar(<?php echo $tarea['id_tarea'];?>)" value='Borrar'>
<?php
  echo'</tr>';
}


?>
<script>
function irModificar(idTarea){

  location.href="modificar_proyecto.php?idTarea="+idTarea;
}

function irBorrar(idTarea){

location.href="eliminar_proyecto.php?id="+idTarea;
}
</script>
</table>