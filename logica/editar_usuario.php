<?php

require 'conexion.php';



$e_id = $_POST['id'];
$e_nombre = $_POST['nombre'];
$e_usuario = $_POST['usuario'];
$e_clave = $_POST['clave'];
$e_email = $_POST['email'];

$query="UPDATE usuarios SET nombre = '$e_nombre', usuario ='$e_usuario', clave ='$e_clave', email='$e_email'
 WHERE id = $e_id ";
$query = mysqli_query($conexion, $query);
if($query){
    ?>
    <script> alert('Usuario modificado con exito!'); 
    
            location.href="../paginaprincipal.php";
    </script>";
    <?php
    
}else{
    echo "<script> alert('¡Se produjo un error al modificar el usuario!'); </script>";
}
?>