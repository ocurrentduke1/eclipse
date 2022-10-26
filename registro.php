<?php

$db_host="localhost";
$db_user="root";
$db_pasword="";
$db_name="base_eclipse";

$con = mysqli_connect ($db_host, $db_user, $db_pasword, $db_name);

if(!$con){
    die("Error" . mysqli_connect_error());
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$nusuario = $_POST["nusuario"];
$contrasena = $_POST["contrasena"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];

$inser = "INSERT INTO registro (id, nombre, apellido, nusuario, contrasena, correo, celular)
values ('0', '$nombre', '$apellido', '$nusuario', '$contrasena', '$correo', '$celular')";

$ir = mysqli_query($con, $inser);

if($ir){
    echo "se ha registrado con existo";
}else{
    echo "hay un error";
}

?>