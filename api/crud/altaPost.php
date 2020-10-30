<?php
include "../conexion.php";

foreach ($_POST as $campo => $valor) {
    $var = "$" . $campo . "='" . $valor . "';";
    eval($var);
}

$user = $_SESSION['user'];
$foto = $_SESSION['foto'];
$fecha = date("Y-m-d");



$sql = "INSERT INTO snipets (user,foto_user,titulo,codigo,descripcion,categoria,fecha_creado) 
VALUES ('$user', '$foto', '$titulo', '$codigo', '$descripcion', '$categoria', '$fecha')";

if ($con->query($sql) === TRUE) {
    echo "success";
} else {
    // echo "fail" ;
    echo "Error: " . $con->error;
}


$con->close();
