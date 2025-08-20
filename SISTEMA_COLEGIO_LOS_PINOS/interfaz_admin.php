<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
        }
        .admin-card {
            transition: all 0.2s ease;
            cursor: pointer;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .admin-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-content {
            padding: 1rem;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Panel principal -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Encabezado -->
            <div class="bg-blue-600 p-4 text-center">
                <h1 class="text-2xl font-bold text-white">PANEL DE ADMINISTRACIÓN</h1>
            </div>
            
            <!-- Contenido -->
            <div class="p-4 space-y-4">
                <!-- Estudiantes -->
                <form action="crud.estudiantes.php" method="POST" class="admin-card bg-white border border-blue-200">
                    <div class="card-content flex items-center justify-between p-3">
                        <span class="font-medium text-gray-700">Gestión de Estudiantes</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </form>

                <!-- Docentes -->
                <form action="crud.docentes.php" method="POST" class="admin-card bg-white border border-green-200">
                    <div class="card-content flex items-center justify-between p-3">
                        <span class="font-medium text-gray-700">Gestión de Docentes</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </form>

                <!-- Salir -->
                <form action="login.php" method="POST" class="admin-card bg-white border border-red-200">
                    <div class="card-content flex items-center justify-between p-3">
                        <span class="font-medium text-gray-700">Cerrar Sesión</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </form>
            </div>

            <!-- Pie de página -->
            <div class="bg-gray-100 px-4 py-3 text-center text-xs text-gray-600">
                Sistema de Administración © 2025
            </div>
        </div>
    </div>
</body>
</html>
