<?php

session_start();
session_destroy();

header("location: ../Views/login_View.php");
exit();