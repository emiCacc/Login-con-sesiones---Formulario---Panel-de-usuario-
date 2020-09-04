<?php
require_once 'logica/conexion.php';
session_start();
$usuario = $_SESSION['username'];
?>

<ul id="menu">
<li><a href="usuarios.php"> Usuarios</a></li>
<li><a href="paginaprincipal.php"> Gestion</a></li>
<li>Proyectos</a></li>
</ul>

<?php
//echo <a href=''
?>



<?php
echo "<h1> Menú de gestión </h1>";
echo "<br>";
echo "<a href='paginaprincipal.php '> Regresar </a>";

$select = "SELECT * FROM usuarios";
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
      <th > Usuario </th>
      <th > Nombre </th>
      <th > Email </th>
      
  </tr>


  
<?php
foreach ($array as $user){
  echo'<tr>';
  echo "<td><label  name= 'Tarea'>{$user['id']}</label></td>";
  echo "<td><label  name= 'Descripcion'>{$user['usuario']}</label></td>";
  echo "<td><label  name= 'Usuario'>{$user['nombre']}</label></td>";
  echo "<td><label  name= 'FechaLimite'>{$user['email']}</label></td>";
  echo'</tr>';
}
?>
</table>