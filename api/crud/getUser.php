<?php
include "../conexion.php";
$user = $_SESSION['user'];
$foto = $_SESSION['foto'];

$re = ["user" => $user, "foto" => $foto];
echo json_encode($re);
