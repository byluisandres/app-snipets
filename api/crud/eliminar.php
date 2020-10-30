<?php
include "../conexion.php";
$id = htmlentities($_GET['id']);
$delete=$con->prepare("DELETE FROM snipets WHERE id=?");
$delete->bind_param("i",$id);
if($delete->execute()){
    echo "success";
}else{
    echo "fail";
}
$delete->close();
$con->close();