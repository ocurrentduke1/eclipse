<?php

$db_host="localhost";
$db_user="root";
$db_pasword="";
$db_name="base_eclipse";

$connect = mysqli_connect ($db_host, $db_user, $db_pasword, $db_name);

if(!$connect){
    die("Error" . mysqli_connect_error());
}

?>