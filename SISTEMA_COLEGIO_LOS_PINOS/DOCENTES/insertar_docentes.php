<?php
if(isset($_POST['submit'])){
  include("conexion.php");
  $nombre = $_POST['nombres'];
  $apellido = $_POST['apellidos'];
   $dni = $_POST['dni'];
  $email = $_POST['email'];
  $telefono = $_POST['teléfono'];
   $especialidad = $_POST['especialidad'];
  $sql = "INSERT INTO docentes(nombres,apellidos,dni,email,teléfono,especialidad) VALUES('$nombre','$apellido',$dni,'$email','$telefono,$especialidad')";
  mysqli_query($conn,$sql);
  header("Location: crud.docentes.php");
}
?>

