
<?php 

session_start();

if(isset($_POST)){
    /* Check that the information arrives by post*/
    
    $nombres = isset($_POST['nombres']) ? $_POST['nombres']: false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

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
        // Insert user in database

    }else{
        $_SESSION['errores'] = $errrores;
        header('Location: index.php');
    }


}
?>