<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Agregar Estudiante</h2>
        <form action="insertar.php" method="POST">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Código Estudiante</label>
                    <input type="text" name="codigo_estudiante" class="form-control" placeholder="Ej. 123456" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombres" class="form-control" placeholder="Ej. RODRIGO" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Ej. Doe" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Grado</label>
                    <input type="text" name="grado" class="form-control" placeholder="Ej. 10" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Sección</label>
                    <input type="text" name="seccion" class="form-control" placeholder="Ej. A" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Asistencia</label>
                    <input type="text" name="asistencias" class="form-control" placeholder="Ej. 90%" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-12">
                    <input type="submit" value="AGREGAR ESTUDIANTE" class="btn btn-success w-100">
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
