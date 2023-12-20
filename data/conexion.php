<?php


$server = "localhost";
$user = "root";
$password = "";
$db = "integrador_cac";

$conexion = mysqli_connect($server, $user, $password, $db);



if($conexion->connect_errno){
    die("Conexion fallida" . $conexion->connect_errno);
} 

$sql = "SELECT * FROM oradores";
$resultado = $conexion->query($sql);




?>