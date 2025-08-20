<?php
include("conexion.php");
$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM docentes WHERE id=$id");
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Docente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-info text-white">
      <h4 class="mb-0">Editar Docente</h4>
    </div>
    <div class="card-body">
      <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="nombre" value="<?php echo $row['nombres']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Apellido</label>
          <input type="text" name="apellido" value="<?php echo $row['apellidos']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">DNI</label>
          <input type="text" name="dni" value="<?php echo $row['dni']; ?>" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Teléfono</label>
          <input type="number" name="telefono" value="<?php echo $row['telefono']; ?>" class="form-control" required>
        </div>

          <div class="mb-3">
          <label class="form-label">Especialidad</label>
          <input type="text" name="especialidad" value="<?php echo $row['especialidad']; ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Actualizar</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>