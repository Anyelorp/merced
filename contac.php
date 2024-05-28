<!-- inicio.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.ico">
    <title>NUESTRA SEÑORA DE LAS MERCEDES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* Estilo adicional para el botón */
        .btn-custom {
            background-color: blue; /* Color azul personalizado */
            border-color: blue; /* Color del borde */
        }
        /* Cambiar el color del texto del botón */
        .btn-custom:hover {
            color: white; /* Cambia el color del texto al pasar el mouse sobre el botón */
        }

        /* Estilos para el pie de página */
        footer {
            background-color: #2c3e50; /* Fondo oscuro */
            color: #ecf0f1; /* Texto claro */
            padding: 20px 0;
            text-align: center;
        }
        footer .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        footer p {
            margin: 10px 0;
            font-size: 1em;
            line-height: 1.5;
        }
        footer address {
            margin: 20px 0;
        }
        footer a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #3498db; /* Azul brillante al pasar el mouse */
        }
        .btn-custom {
            background-color: #3498db; /* Azul brillante */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #2980b9; /* Azul más oscuro */
        }
    </style>
</head>
<body>
    <footer>
        <div class="container">
            <p>&copy; 2024 NUESTRA SEÑORA DE LAS MERCEDES. Todos los derechos reservados.</p>
            <address>
                <p><i class="bi bi-geo-alt"></i> Dirección: JR. AYANCOCHA.</p>
                <p><i class="bi bi-telephone"></i> Teléfono: 01 123 4567</p>
                <p><i class="bi bi-envelope"></i> Correo electrónico: nuestraseñoradelasmercedes@gmail.com</p>
                <p><i class="bi bi-phone"></i> Número de celular: 987654321</p>
                <p><i class="bi bi-credit-card"></i> Número de RUC: 20489332460</p>
                <!-- Aquí agregamos el enlace de Facebook como un botón personalizado -->
                <p><a href="https://www.facebook.com/ieensmhco/?locale=es_LA" class="btn btn-custom"><i class="bi bi-facebook"></i> FACEBOOK: IEE Nuestra Señora de las Mercedes - Huánuco</a></p>
            </address>
        </div>
    </footer>
</body>
</html>
