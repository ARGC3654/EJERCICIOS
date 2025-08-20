<?php

include("conexion.php");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM docentes WHERE id=$id");
header("Location: crud.docentes.php");
?>