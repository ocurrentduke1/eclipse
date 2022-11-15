<?php

include("com.php");
$con = conectar();

$nombre= $_GET['id'];

$sql="DELETE FROM productos WHERE nombre ='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location: principal_admin.php");
    }
?>