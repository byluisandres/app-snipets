<?php 
include "../conexion.php";

$temporal=[];
$resultado=[];

$select=$con->query("SELECT * FROM snipets ORDER BY id DESC");

while($f=$select->fetch_assoc()){
    $temporal=$f;
    array_push($resultado,$temporal);
}

echo json_encode($resultado);
$select->close();
$con->close();
