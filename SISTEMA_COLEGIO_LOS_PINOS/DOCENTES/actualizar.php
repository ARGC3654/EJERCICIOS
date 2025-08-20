
<?php 
include("conexion.php");
// Obtener el ID y los datos del formulario
$id = $_POST['id']; // Asegúrate de que el ID se esté recibiendo correctamente
$nombre = $_POST['nombres']; // Usar 'nombres'
$apellidos = $_POST['apellido']; // Usar 'apellido'
$dni = $_POST['dni'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$especialidad = $_POST['especialidad'];
// Asegúrate de que el ID esté definido y no sea nulo
if (!empty($id)) {
    // Usar sentencias preparadas para evitar inyecciones SQL
    $stmt = $conn->prepare("UPDATE docentes SET nombre = ?, apellido = ?, dni = ?, email = ?, telefono = ?, especialidad = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $nombre, $apellidos, $dni, $email, $telefono, $especialidad, $id);
    if ($stmt->execute()) {
        header("Location: crud.docentes.php");
        exit(); // Asegúrate de salir después de redirigir
    } else {
        echo "Error: " . $stmt->error; // Mostrar error específico
    }
    $stmt->close();
} else {
    echo "ID no válido."; // Mensaje de error si el ID no es válido
}
$conn->close();


?>