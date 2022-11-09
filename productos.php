<?php

include 'com.php';

$Tipo = $_POST["Tipo"];
$nombre = $_POST["nombre"];
$Precio = $_POST["Precio"];
$Stock = $_POST["Stock"];
$imagen = $_POST["imagen"];


$inser = "INSERT INTO productos (id, Tipo, nombre, Precio, Stock, imagen)
values ('0', '$Tipo', '$nombre', '$Precio', '$Stock', '$imagen')";

$set_inser = mysqli_query($connect, $inser);

if($set_inser){
    echo '<h3> se ha insertado el producto</h3>';
    header('location: principal_admin.html');
}else{
    header('location: registro_productos.html');
    echo '<h3>Error al registrar producto</h3>';
}

mysqli_close($connect);

?>