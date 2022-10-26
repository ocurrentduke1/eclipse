<?php

include 'com.php';

$nusuario = $_POST["nusuario"];
$contrasena = $_POST["contrasena"];

$consulta = mysqli_query($connect, "SELECT * FROM registro WHERE nusuario = '$nusuario' && contrasena = '$contrasena'");

$filas = mysqli_fetch_array($consulta);

if($filas){
    session_start();
    $_SESSION['nusuario'] = $nusuario;
    header('location: eclipse.html');
}else{
    header('location: inicio_sesion.html');
    echo '<h3>error de autenticacion</3>';
}

mysqli_close($connect);

?>