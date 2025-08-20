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
        <h2 class="text-center">Agregar Docente</h2>
        <form action="insertar_docentes.php" method="POST">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">id</label>
                    <input type="text" name="id" class="form-control" placeholder="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control" placeholder="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">dni	</label>
                    <input type="text" name="dni" class="form-control" placeholder="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Telefono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">especialidad</label>
                    <input type="text" name="especialidad" class="form-control" placeholder="" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-12">
                    <input type="submit" value="AGREGAR DOCENTE" class="btn btn-success w-100">
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
