
<?php 
if(isset($_POST)){
    // database connection
    require_once 'includes/conexion.php';

    // only if the session does not exist
    if(!isset($_SESSION)){
        session_start();
    }
    
    /* Check that the information arrives by post*/
    
    $nombres = isset($_POST['nombres']) ? mysqli_real_escape_string($db, $_POST['nombres']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

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

    // Password field validation
    if(!empty($password)){
        $password_validate = true;
    }else{
        $password_validate = false;
        $errrores['password'] = 'El campo "Contraseña" esta vacía.';
    }

    $save_users = false;
    // If the error variable is empty
    if(count($errrores)==0){
        $save_users = true;

        // Encrypt password
        $security_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

        // Insert user in database
        $sql = "INSERT INTO usuarios VALUES(null, '$nombres', '$apellidos', '$email', '$security_password', CURDATE());";
        $query = mysqli_query($db, $sql);
        
        if($query){
            $_SESSION['completado'] = 'El registro se ha completado con éxito.';
        }else{
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario!.';
            

        }

    }else{
        $_SESSION['errores'] = $errrores;
        
    }


}
header('Location: index.php');
?>