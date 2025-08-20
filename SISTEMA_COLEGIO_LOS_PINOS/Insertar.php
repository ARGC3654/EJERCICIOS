<?php 

include("conexion.php");


$id = null;
$codigo_estudiante=$_POST['codigo_estudiante'];
$nombres=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$grado=$_POST['grado'];
$seccion=$_POST['seccion'];
$asistencia=$_POST['asistencias'];

$sql = "INSERT INTO estudiantes VALUES ('$id','$codigo_estudiante','$nombres','$apellido','$grado','$seccion','$asistencia')";
$query = mysqli_query($conn,$sql);

if($query){
    header("location: crud.estudiante.php");
}

?>