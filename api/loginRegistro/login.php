<?php
include "../conexion.php";

$email = $con->real_escape_string(htmlentities($_POST['email']));
$pass = $con->real_escape_string(htmlentities($_POST['pass']));
$select = $con->query(" SELECT user,email,pass,foto FROM usuario WHERE email='$email'");


if ($f = $select->fetch_assoc()) {
    $correo = $f['email'];
    $password = $f['pass'];
    $user = $f['user'];
    $foto = $f['foto'];
}
$passEncriptada = password_verify($pass, $password);

if ($email == $correo && $passEncriptada = true) {
    $_SESSION['user']=$user;
    $_SESSION['foto']=$foto;
    echo "success";
} else {
    echo "fail";
}
