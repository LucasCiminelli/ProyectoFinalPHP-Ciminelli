<?php


$server = "localhost";
$user = "id21697330_root";
$password = "Superasd123.";
$db = "id21697330_integrador_cac";

$conexion = mysqli_connect($server, $user, $password, $db);



if($conexion->connect_errno){
    die("Conexion fallida" . $conexion->connect_errno);
} 

$sql = "SELECT * FROM oradores";
$resultado = $conexion->query($sql);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php
    require "header.php";
    ?>
    <br>
    <a class="mb-4 ps-2" href="../index.php">Volver al inicio</a>
    
    <h2 class="text-center mt-2">Oradores</h2>
    <table class="table table-dark table-striped mt-4">
        <tr>
            <td class="fw-bold">id_orador</td>
            <td class="fw-bold">Nombre</td>
            <td class="fw-bold">Apellido</td>
            <td class="fw-bold">Email</td>
            <td class="fw-bold">Tema</td>
            <td class="fw-bold">Fecha_alta</td>
        </tr>
        <?php
        $sql2="SELECT * FROM oradores";
        $result2= mysqli_query($conexion, $sql);
        while($mostrar=mysqli_fetch_array($result2)){
            ?>
        
        <tr>
            <td><?php echo $mostrar["id_orador"]?></td>
            <td><?php echo $mostrar["nombre"]?></td>
            <td><?php echo $mostrar["apellido"]?></td>
            <td><?php echo $mostrar["mail"]?></td>
            <td><?php echo $mostrar["tema"]?></td>
            <td><?php echo $mostrar["fecha_alta"]?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    require "footer.php";
    ?>
