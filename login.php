<?php 

// START SESSION AND DATABASE CONEC.
require_once './includes/conexion.php';

// GET FORM DATA
if(isset($_POST)){

    // delete erro
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    // form data
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // DATA VALIDATE
    $sql = "SELECT * FROM  usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        // check the database if the data entered is correct
        $usuario = mysqli_fetch_assoc($login);
        
        //password verify
        $verify = password_verify($password, $usuario['password']);

        if($verify){
            // use a session for save userdata logged
            $_SESSION['usuario']= $usuario;

        }else{
            //error
            $_SESSION['error_login'] = "Login incorrecto!. ";
        }

    }else{
        // fails messege
        //error
        $_SESSION['error_login'] = "Login incorrecto!. ";

    }


 
}

// is fail send session with fails, and redirect
header('Location: index.php');

?>