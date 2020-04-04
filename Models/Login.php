

<?php

require 'conexion.php';
session_start();


$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT COUNT(*) as contar,id,name from Users where email = '$email' and password = '$password'";


$bdconect = mysqli_query($conexion,$query);
$parametros = mysqli_fetch_array($bdconect);



$id = $parametros['id'];
$name = $parametros['name'];

if($parametros['contar']>0){

    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;


    header("location: ../Actividades.php");

}else {
    echo ("Contraseña incorrecta");



 }