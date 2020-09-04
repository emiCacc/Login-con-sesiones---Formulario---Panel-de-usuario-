<?php
require 'conexion.php';
$variable=null;
$variable_accion =0;
if (isset($_GET['variable_accion'])){
  
    $variable=2;
} 

if ($variable==2){
      //Crear nuevo registro
      echo "entro aca";
      $id_tarea=$_POST['id_t'];
      $nomb = $_POST['proyecto'];
      $tit = $_POST['titulo'];
      $fe = $_POST['fecha_limite'];
      $av = $_POST['status'];
  
      $agregar = "UPDATE TAREAS SET  proyecto='$nomb', titulo='$tit', fecha_limite=$fe, status=$av where
       id_tarea=$id_tarea";
  
      //var_dump($insertar); exit();
   echo "agrega".$agregar;
      $query = mysqli_query($conexion, $agregar);
  
      if($query){
          ?>
          <script> alert('¡Proyecto modificado con exito!'); 
          
                  location.href="../paginaprincipal.php";
          </script>";
          <?php
          
      }else{
          echo "<script> alert('¡Se produjo un error al crear el proyecto!'); </script>";
      }

}
if (isset($_GET['variable'])){
    $variable_accion =1;
    echo "entro aca";
}


//manejar un if para determinar si es un proyecto nuevo o editar o eliminar.





if ($variable_accion == 1){
    //Crear nuevo registro
    $nomb = $_POST['proyecto'];
    $a = $_POST['id_usuario'];
    $tit = $_POST['titulo'];
    $fe = $_POST['fecha_limite'];
    $av = $_POST['status'];

    $agregar = "INSERT INTO tareas (proyecto, id_usuario, titulo, fecha_limite, status) VALUES ('$nomb', $a, '$tit', $fe, $av)";
 echo "argregar".$agregar;
    //var_dump($insertar); exit();

    $query = mysqli_query($conexion, $agregar);

    if($query){
        ?>
        <script> alert('¡Proyecto creado con exito!'); 
        
                location.href="../paginaprincipal.php";
        </script>";
        <?php
        
    }else{
        echo "<script> alert('¡Se produjo un error al crear el proyecto!'); </script>";
    }
}

    




?>  