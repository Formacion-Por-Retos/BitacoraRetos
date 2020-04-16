<?php
require '../conexion_db.php';


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT COUNT(*) as contar,id,name from Users where email = '$email' and password = '$password'";

$bdconect = mysqli_query($conexion,$query);
$parametros = mysqli_fetch_array($bdconect);

$id = $parametros['id'];
$name = $parametros['name'];

if($parametros['contar']>0){

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;

    header("location: ../Views/home_select.php");

}else {

    echo "<script>alert('Contraseña incorrecta o usuario no existe.');</script>";

    echo "<a href='../Views/login_View.php'>";
        echo "<button>Volver</button>";
            echo "</a>";


}