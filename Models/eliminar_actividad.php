<?php

include "../conexion_db.php";
if(isset($_GET["id"])){
	$con  = connect();
	$sql = "delete from Users_Actividades where Users_id=".$_GET["id"];
	$con->query($sql);
	$sql = "delete from Actividades where id=".$_GET["id"];
	$con->query($sql);
	header("Location: ../Views/home_activities.php");}

