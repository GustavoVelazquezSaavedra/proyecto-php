<?php 
if(isset($_POST)){
    // database connection
    require_once 'includes/conexion.php';

    $nombre = isset($_POST["nombre"]) ? mysqli_real_escape_string($db, $_POST["nombre"]) : false;

    // fails arrays
    $errores = array();

    /* Validate the data before saving it to the database */
    // names field validation
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)){
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = 'El campo "Nombres" no es válido.';
    }
    
    if(count($errores)==0){
        $sql = "INSERT INTO categorias VALUES(NULL,'$nombre');";
        $guardar = mysqli_query($db, $sql);
    }
    
}


header("Location: index.php");