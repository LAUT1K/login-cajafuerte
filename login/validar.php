<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuarios']=$usuario;

$conexion =mysqli_connect("localhost", "root", "", "login");

$consulta=" SELECT*FROM personal where usuario='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");
}else{

    ?>
    <?php
    include("index.php");
    ?>
   
    <h2 class="bad">¡ACCESO DENEGADO!</h2>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);


