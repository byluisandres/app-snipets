<?php
include "../conexion.php";

foreach ($_POST as $campo => $valor) {
    $var = "$" . $campo . "='" . $valor . "';";
    eval($var);
}
$user = $_SESSION['user'];

$fecha = date("Y-m-d");
$sqlUpdate = "UPDATE  
snipets SET titulo='$titulo',codigo='$codigo',descripcion ='$descripcion',categoria='$categoria',fecha_editado='$fecha',user_edit='$user'
WHERE id=$id";


if ($con->query($sqlUpdate) === TRUE) {
    echo "success";
} else {
    // echo "fail" ;
    echo "Error: " . $con->error;
}

$con->close();
