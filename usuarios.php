<?php
require_once 'logica/conexion.php';
session_start();
$usuario = $_SESSION['username'];
?>

<ul id="menu">
<li><a href="usuarios.php"> Usuarios</a></li>
<li><a href="paginaprincipal.php"> Gestion</a></li>

</ul>

<?php
//echo <a href=''
?>




<h1> Menú de usuarios </h1>
<br>
<a href='paginaprincipal.php '><input type='button' value='Regresar'></a>
<br>
<br>
<a href='registro.php'><input type='button' value='Nuevo Usuario'></a>
<?php
//echo "<a href='agregar_usuario.php'> [Nuevo Usuario] </a>";

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
  ?>
  <tr>
  <td><label  name= 'idu'><?php echo $user['id'];?></label></td>
  <td><label  name= 'usuario'><?php echo $user['usuario'];?></label></td>
  <td><label  name= 'nombre'><?php echo $user['nombre'];?></label></td>
  <td><label  name= 'email'><?php echo $user['email'];?></label></td>

  <td><input type='button'  onclick="irModificar(<?php echo $user['id'];?>)" value='Edit'>
  <td><input type='button'  onclick="irEliminar(<?php echo $user['id'];?>)" value='Delete'>
  </tr>
<?php
}
?>

</table>

<script>
function irModificar(idUsuario){

  location.href="modifico_usuarios.php?id="+idUsuario;
  
}

function irEliminar(idUsuario){

location.href="elimino_usuarios.php?id="+idUsuario;

}
</script>



