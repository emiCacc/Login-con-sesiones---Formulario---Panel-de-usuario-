<?php
require 'conexion.php';

$n = $_POST['nombre'];
$u = $_POST['usuario'];
$c = $_POST['clave'];
$e = $_POST['email'];

$insertar = "INSERT INTO usuarios (usuario,clave,nombre,email) VALUES ('$u', '$c', '$n', '$e')";

//var_dump($insertar); exit();

$query = mysqli_query($conexion, $insertar);

if($query){
    echo "<script> alert('¡Registrado con exito!'); </script>";
    
}else{
    echo "<script> alert('¡Se produjo un error al registrarse!'); </script>";
}


?>  