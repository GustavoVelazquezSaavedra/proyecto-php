<?php 
if(isset($_POST)){
    // database connection
    require_once 'includes/conexion.php';
    
    /* Check that the information arrives by post*/
    
    $nombres = isset($_POST['nombres']) ? mysqli_real_escape_string($db, $_POST['nombres']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    // fails arrays
    $errrores = array();

    /* Validate the data before saving it to the database */
    // names field validation
    if(!empty($nombres) && !is_numeric($nombres) && !preg_match('/[0-9]/', $nombres)){
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errrores['nombres'] = 'El campo "Nombres" no es válido.';
    }
    // Last name field validation
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match('/[0-9]/', $apellidos)){
        $apellidos_validate = true;
    }else{
        $apellidos_validate = false;
        $errrores['apellidos'] = 'El campo "Apellidos" no es válido.';
    }

    // Email field validation
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errrores['email'] = 'El campo "Email" no es válido.';
    }


    $save_users = false;
    // If the error variable is empty
    if(count($errrores)==0){
        $save_users = true;

        // update user in database
        $usuario = $_SESSION['usuario'];
        $ifl = $usuario['id'];
        $sql = "UPDATE usuarios SET nombre = '$nombres', apellido = '$apellidos', email= '$email' WHERE id ='$ifl'";
        $query = mysqli_query($db, $sql);
        
        if($query){
            $_SESSION['usuario']['nombre'] = $nombres;
            $_SESSION['usuario']['apellido'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            $_SESSION['completado'] = 'La actualización de tus datos se ha completado con éxito.';
        }else{
            $_SESSION['errores']['general'] = 'Fallo al actualizar tus datos!.';
            

        }

    }else{
        $_SESSION['errores'] = $errrores;
        
    }


}
header('Location: mis_datos.php');
?>