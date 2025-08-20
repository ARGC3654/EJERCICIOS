<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "colegio_los_pinos";
$port = 3307;


$conn = mysqli_connect($host,$username,$password,$dbname,$port);

if(!$conn){
    die("ERROR DE CONEXION" . mysqli_connect_error());
}


?>