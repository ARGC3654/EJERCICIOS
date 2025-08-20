<?php

include("conexion.php");


$username = $_POST['username']; 
$password = $_POST['password']; 

$sql = "SELECT u.usuario, r.nombre_rol
                FROM usuario u 
                INNER JOIN roles r ON u.rol_id = r.id
                WHERE u.usuario = '$username' AND u.clave = '$password'"; 
$query = mysqli_query($conn, $sql); 

if(mysqli_num_rows($query)>0) {

    $filas = mysqli_fetch_assoc($query); 
    $name = $filas['usuario']; 
    $rol = $filas['nombre_rol']; 

    if($rol == "admin"){
        header("Location: interfaz_admin.php"); 
        exit();
    } elseif($rol == "docente"){
        header("Location: interfaz_docente.php"); 
        exit();
    } else {
        echo "ROL DE ESTUDIANTE";
    }


}else{
    echo "USUARIO O CONTRASEÑA INCORRECTOS"; 
}


?>
