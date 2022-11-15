<?php

include("com.php");
$con = conectar();

$Tipo = $_POST["Tipo"];
$nombre = $_POST["nombre"];
$Precio = $_POST["Precio"];
$Stock = $_POST["Stock"];
$imagen = $_POST["imagen"];

$sql="UPDATE productos SET Tipo='$Tipo', nombre='$nombre', Precio='$Precio', Stock='$Stock', imagen='$imagen'";
$query= mysqli_query($con,$sql);

    if($query){
        Header("Location: principal_admin.php");
    }
?>