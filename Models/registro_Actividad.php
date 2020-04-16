<?php

include "../conexion_db.php";

session_start();
$id = $_SESSION['id'];
$nombre = $_POST['nombre'];
$datepicker = $_POST['datepicker'];
$proyecto = $_POST['proyecto'];
$descripcion = $_POST['descripcion'];
$duracion = $_POST['duracion'];
$evidencia = $_POST['evidencia'];

$con  = connect();

if(!isset($id)) {
    header("location: ../Views/login_View.php");
}

else {

    $sql = "insert into Actividades (nombre, fecha, usuario, proyecto, descripcion, tiempo_trabajado, evidencia) 
     values ('$nombre','$datepicker','$id','$proyecto','$descripcion', '$duracion', '$evidencia')";
    $con->query($sql);
    $last_id = $con->insert_id;
    $categorias = get_categorias();

    foreach($categorias as $cat){
        if(isset($_POST["category_".$cat->id])){
            $sql = "insert into Users_Actividades (Actividades_id,Users_id) value (".$last_id.",".$cat->id.")";
            $con->query($sql);
        }
    }

    header("location: ../Views/home_activities.php");

}

