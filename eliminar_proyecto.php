<?php
require 'logica/conexion.php';

if (isset($_GET['id'])){

 
 
    $id_tarea=$_GET['id'];

    $delete = "DELETE FROM tareas WHERE id_tarea = $id_tarea";
     
    $query = mysqli_query($conexion, $delete);
}
    if($query){
?>
        <script> alert('¡Proyecto eliminado con exito!'); 
        
                location.href="paginaprincipal.php";
        </script>
<?php
        
    }else{
        echo "<script> alert('¡Se produjo un error al eliminar el proyecto!'); </script>";
    }
?>
