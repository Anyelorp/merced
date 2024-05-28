<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 36px;
        }

        .welcome-message {
            background-color: #A9E2F3; /* Cambia la URL por la de tu imagen */
            background-size: cover;
            background-position: center;
            color: #0A0A61;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .welcome-message p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #333;
        }

        .welcome-message img {
            max-width: 50%;
            height: auto;
            margin-top: 20px;
        }

        .options {
            display: flex;
            justify-content: space-around;
        }

        .option {
            flex-basis: 30%;
            padding: 10px;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .option:hover {
            background-color: #0056b3;
        }

        .option a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenido a la Biblioteca</h1>
    
    <div class="options">
        <div class="option">
            <a href="biblioteca1.php">Buscar Libros</a>
        </div>
        <div class="option">
            <a href="#">Añadir Libro</a>
        </div>
        <div class="option">
            <a href="#">Mis Préstamos</a>
        </div>
    </div>

    <div class="welcome-message">
        <p>Descubre un mundo de conocimiento y aventuras entre nuestras páginas.</p>
        <p>Sumérgete en la magia de la lectura y expande tu mente con cada libro que encuentres.</p>
        <p>¡Nuestro equipo está aquí para ayudarte a explorar y encontrar tu próxima lectura favorita!</p>

        <img src="https://www.guiayeduca.com/wp-content/uploads/2023/02/Reeducaciones.png" alt="Libros">
    </div>
</div>

</body>
</html>
