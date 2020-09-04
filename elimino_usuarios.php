<?php
require 'logica/conexion.php';

if (isset($_GET['id'])){

 
 
    $id_us=$_GET['id'];

    $delete = "DELETE FROM usuarios WHERE id = $id_us";
     
    $query = mysqli_query($conexion, $delete);
}
    if($query){
?>
        <script> alert('¡Usuario eliminado con exito!'); 
        
                location.href="paginaprincipal.php";
        </script>
<?php
        
    }else{
        echo "<script> alert('¡Se produjo un error al eliminar el usuario!'); </script>";
    }
?>
