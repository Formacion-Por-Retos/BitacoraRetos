<?php
require 'conexion_db.php';
session_start();
$id = $_SESSION['id'];
$nombre = $_POST['nombre'];
$datepicker = $_POST['datepicker'];
$proyecto = $_POST['proyecto'];
$descripcion = $_POST['descripcion'];

$duracion = $_POST['duracion'];
$evidencia = $_POST['evidencia'];
$encargado = $_POST['encargado'];


if(!isset($id)) {
    header("location: ../Views/login_View.php");

}

else {

    $query = "insert into Actividades (nombre, fecha, usuario, proyecto, descripcion, tiempo_trabajado, evidencia, profesor_encargado) values ('$nombre','$datepicker','$id','$proyecto','$descripcion', '$duracion', '$evidencia', '$encargado')";

    if (mysqli_query($conexion, $query)) {
        echo "Se ha registrado la actividad.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);


}

