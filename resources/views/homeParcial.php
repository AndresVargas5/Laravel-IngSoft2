<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 1</title>
    <style>
        .navbar-custom {
            background-color: #f8f9fa;
        }
        .navbar-nav .nav-link.active {
            color: #007bff;
            border-bottom: 2px solid #007bff;
        }
        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }
        .image-container {
            text-align: center;
            margin-top: 20px;
        }
        .image-container img {
            max-width: 50%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="text-center mt-4">
        <h2>Bienvenido a la aplicación de Alquiler</h2>
        <h4>Carros y Motos</h4>
        <br>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menú</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/clientes">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alquileres">Alquiler</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="image-container">
        <img src="/img/rentCar.jpg" class="img-fluid" alt="Imagen de Alquiler">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qnGZ4OrjZsoBXOlz5PiWtT5qD/QFeSe5MrPSqvWe/LloGNSKrivF4+8aLYVg9tBt" crossorigin="anonymous"></script>
</body>
</html>

