<?php
$host = "35.199.40.228";
$usuario = "paul9834";
$clave = "paul9834";
$db = "bitacora";
$conexion = mysqli_connect($host, $usuario, $clave, $db);

function connect()
{
    return new mysqli("35.199.40.228", "paul9834", "paul9834", "bitacora");
}

function get_categorias()
{

    $con = connect();
    $sql = "select id,name from Users";
    $query = $con->query($sql);
    $data = array();
    if ($query) {
        while ($r = $query->fetch_object()) {
            $data[] = $r;
        }
    }
    return $data;
}

function get_post_categorias($id)
{

    $con = connect();
    $sql = "select * from Users_Actividades where Actividades_id=" . $id;
    $query = $con->query($sql);
    $data = array();
    if ($query) {
        while ($r = $query->fetch_object()) {
            $data[] = $r;
        }
    }
    return $data;

}

function get_categoria($id)
{
    $con = connect();
    $sql = "select * from Users where id=" . $id;
    $query = $con->query($sql);
    $data = null;
    if ($query) {
        while ($r = $query->fetch_object()) {
            $data = $r;
            break;
        }
    }
    return $data;

}

