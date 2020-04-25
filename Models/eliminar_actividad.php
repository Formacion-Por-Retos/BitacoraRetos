<?php
if(isset($_GET["id"])){
	include "../conexion_db.php";
	$con  = connect();
	$sql = "delete from Users_Actividades where Actividades_id=".$_GET["id"];
	$con->query($sql);
	$sql = "delete from Actividades where id=".$_GET["id"];
	$con->query($sql);
	header("Location: ../Views/home_activities.php");
}
?>