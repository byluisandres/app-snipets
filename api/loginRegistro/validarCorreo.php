<?php
include "../conexion.php";

$correo = $con->real_escape_string(htmlentities($_POST['correo']));

$selectCorreo = $con->query("SELECT email FROM usuario WHERE email='$correo'");
$numeroFilas = mysqli_num_rows($selectCorreo);

if ($numeroFilas == 0) {
    echo "success";
} else {
    echo "fail";
}
