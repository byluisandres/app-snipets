<?php
include "../conexion.php";
$id = $con->real_escape_string(htmlentities($_GET['id']));
$temporal = [];
$resultado = [];

$select = $con->query("SELECT * FROM snipets WHERE id=$id");

if ($f = $select->fetch_assoc()) {
    $temporal = $f;
    array_push($resultado, $temporal);
}

echo json_encode($resultado[0]);
$select->close();
$con->close();
