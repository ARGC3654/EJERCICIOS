<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management | Los Pinos Academy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary: #1a365d;
            --secondary: #2c5282;
            --accent: #4299e1;
            --light: #ebf8ff;
            --success: #38b2ac;
            --warning: #ed8936;
            --danger: #e53e3e;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #f7fafc;
            color: #2d3748;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .main-container {
            flex: 1;
            padding: 2rem 0;
        }

        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }

        .card-header-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 1.25rem 1.5rem;
        }

        .table-custom th {
            background-color: var(--secondary);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
        }

        .btn-primary-custom {
            background-color: var(--accent);
            border: none;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s;
        }

        .btn-primary-custom:hover {
            background-color: #3182ce;
            transform: translateY(-1px);
        }

        .badge-present {
            background-color: var(--success);
        }

        .badge-absent {
            background-color: var(--danger);
        }

        .badge-excused {
            background-color: #a0aec0;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .footer-custom {
            background-color: var(--primary);
            color: white;
            padding: 1.5rem 0;
        }

        .action-btn {
            transition: all 0.2s;
            margin: 0 2px;
        }

        .action-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .responsive-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://placehold.co/60x60?text=LP" alt="Los Pinos Academy Logo" class="avatar me-3">
                <div>
                    <h1 class="h5 mb-0">COLEGIO LOS PINOS </h1>
                    <small class="text-white-50">SISTEMA DE ESTUDIANTES </small>
                </div>
            </a>
            <div class="d-flex">
                <a href="interfaz_admin.php" class="btn btn-outline-light me-2 btn-sm">
                    <i class="bi bi-speedometer2 me-1"></i> inicio
                </a>
                <a href="agregar_estudiante.php" class="btn btn-primary-custom btn-sm">
                    <i class="bi bi-plus-circle me-1"></i> AGREGAR ESTUDIANTE
                </a>
            </div>
        </div>
    </nav>

    <main class="main-container">
        <div class="container">
            <div class="card card-custom mb-4">
                <div class="card-header card-header-custom d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0"><i class="bi bi-people-fill me-2"></i>REGISTROS ESTUDIANTILES</h2>
                    <div class="d-flex">
                        <input type="text" class="form-control form-control-sm me-2" placeholder="BUSCAR ESTUDIANTES...">
                        <button class="btn btn-sm btn-light">
                            <i class="bi bi-funnel"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive responsive-table">
                        <table class="table table-hover table-custom mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Grado</th>
                                    <th>Clase</th>
                                        <th>Asistencia</th>
                                            <th></th>
                                            <th>Editar Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include("conexion.php");
                                $sql = "SELECT * FROM estudiantes";
                                $query = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_array($query)): ?>

                                <tr>

                                    <td><?= $row['id'] ?></td>
                                     <td><?= $row['codigo_estudiante'] ?></td>
                                       <td><?= $row['nombres'] ?></td>
                                      <td><?= $row['apellidos'] ?></td>
                                 
                                        <td><?= $row['grado'] ?></td>
                                        <td><?= $row['seccion'] ?></td>
                                            
                                                     <td><?= $row['asistencias'] ?></td>


                                    <td class="fw-bold">#<?= $row['id'] ?></td>
                                   
                                   
                                   
                                   
                                        <?php if(strtoupper($row['asistencias']) == "PRESENT"): ?>
                                            <span class="badge badge-present rounded-pill"><i class="bi bi-check-circle me-1"></i> Presente</span>
                                        <?php elseif(strtoupper($row['asistencias']) == "ABSENT"): ?>
                                            <span class="badge badge-absent rounded-pill"><i class="bi bi-x-circle me-1"></i> Lista de asistencia </span>
                                        <?php elseif(strtoupper($row['asistencias']) == "EXCUSED"): ?>
                                            <span class="badge badge-excused rounded-pill"><i class="bi bi-slash-circle me-1"></i> Excusa</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="update_admin.php?id=<?= $row['id'] ?>" 
                                               class="btn btn-sm btn-outline-primary action-btn"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="delete.php?id=<?= $row['id'] ?>" 
                                               class="btn btn-sm btn-outline-danger action-btn"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                               onclick="return confirm('Delete student #<?= $row['id'] ?> permanently?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-1">&copy; <?= date('Y') ?> COLEGIO LOS PINOS . All rights reserved.</p>
            <p class="mb-0 small">Student Management System v1.0</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>
