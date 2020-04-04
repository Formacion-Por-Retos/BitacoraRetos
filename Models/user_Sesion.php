<?php
session_start();
$email = $_SESSION['email'];
$id = $_SESSION['id'];
$name = $_SESSION['name'];

echo "Bienvenido al registro de Actividades $name $id";

