<?php

require '../conexion_db.php';

$name = $_POST['name'];
$codigo = $_POST['codigo'];
$email= $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];

$query = "INSERT INTO Users (email, password, name, codigo, rol) VALUES ('$email','$password', '$name','$codigo', '$rol')";

$query2 = "SELECT COUNT(*) as contar,id,name from Users where email = '$email'";


$bdconect = mysqli_query($conexion,$query2);
$parametros = mysqli_fetch_array($bdconect);



if($parametros['contar']>0) {
    echo "<script>alert('El usuario ya existe el sistema.');</script>";
    echo "<a href='../Views/register_view.php'>";
    echo "<button>Volver</button>";
    echo "</a>";
}
else {

    if (mysqli_query($conexion, $query)) {
        echo "<script>alert('Se ha registrado exitosamente el usuario.');</script>";
        echo "<a href='../Views/login_View.php'>";
        echo "<button>Volver</button>";
        echo "</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}





