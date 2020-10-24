<?php
include "../conexion.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
   
    $usuario = $con->real_escape_string(htmlentities($_POST['usuario']));
    $email = $con->real_escape_string(htmlentities($_POST['email']));
    $pass = $con->real_escape_string(htmlentities($_POST['pass']));

    $extensionImg = "";
    $ruta = "../api/loginRegistro/foto_perfil";
    $archivo = $_FILES['foto']['tmp_name'];
    $nombreArchivo = $_FILES['foto']['name'];
    $info = pathinfo($nombreArchivo);
    if ($archivo !== "") {
        $extensionImg = $info['extension'];

        if ($extensionImg == "png" || $extensionImg == "jpg" || $extensionImg == "PNG" || $extensionImg == "JPG") {
            $nombreFile = $usuario . rand(0000, 9999) . "." . $extensionImg;
            move_uploaded_file($archivo, "foto_perfil/" . $nombreFile);
            $ruta = $ruta . "/" . $nombreFile;
        } else {
            echo "fail img";
            exit();
        }
    } else {
        $ruta = "../api/loginRegistro/foto_perfil/perfil.png";
    }

    $passEncriptada = password_hash($pass, PASSWORD_BCRYPT);
    $insertar = $con->query("INSERT INTO usuario VALUES (DEFAULT,'$usuario','$email','$passEncriptada','$ruta')");
    if ($insertar) {
        echo "success";
    } else {
        echo "fail insert";
    }
} else {
    header("Location:../../index.php");
}
