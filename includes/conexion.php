<?php

// CONEXION
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';
$db = mysqli_connect($server, $username, $password, $database);
// Setear a utf-8
mysqli_query($db, "SET NAMES 'utf8'");


// Start the session
if(!isset($_SESSION)){
    session_start();
}

?>