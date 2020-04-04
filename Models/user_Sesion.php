<?php

session_start();
$email = $_SESSION['email'];
$id = $_SESSION['id'];
$name = $_SESSION['name'];

echo "¡Bienvenido de nuevo $name !";

