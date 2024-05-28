<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia de Nuestra Escuela</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* Estilos para la sección de historia */
         /* Estilos para la sección de historia */
         .historia-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        .historia-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .historia-header h1 {
            font-size: 2.5em;
            color: #333;
        }

        .historia-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .historia-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .historia-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .historia-item h2 {
            color: #007BFF;
            font-size: 2em;
            margin-bottom: 10px;
        }

        .historia-item p {
            color: #666;
            font-size: 1.2em;
            line-height: 1.5;
        }

        .historia-image {
            text-align: center;
            margin: 20px 0;
        }

        .historia-image img {
            width: 500px; /* Ancho fijo */
            height: 500px; /* Alto fijo */
            object-fit: cover; /* Mantener la proporción y recortar */
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .timeline {
            position: relative;
            margin: 40px 0;
            padding: 20px 0;
            list-style: none;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e9ecef;
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin: 20px 0;
            padding-left: 50%;
            width: 50%;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            top: 20px;
            left: -10px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #007BFF;
        }

        .timeline-item-content {
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .timeline-item-content h3 {
            color: #007BFF;
            font-size: 1.5em;
        }

        .timeline-item-content p {
            font-size: 1em;
            color: #666;
        }

        .timeline-item:nth-child(even) {
            padding-left: 0;
            padding-right: 50%;
            text-align: right;
        }

        .timeline-item:nth-child(even) .timeline-item-content {
            text-align: left;
        }

        .btn-back {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="historia-container">
        <div class="historia-header">
            <h1>Nuestra Historia</h1>
        </div>
        <div class="historia-content">
            <div class="historia-item">
                <h2>Fundación</h2>
                <p>El Colegio Nacional Nuestra Señora de las Mercedes fue fundado en 1848 por un grupo de religiosos mercedarios. Desde entonces, la institución ha pasado por varias etapas de crecimiento y transformación, pero siempre ha mantenido su compromiso con la educación de calidad..</p>
            </div>
            <div class="historia-image">
                <img src="https://cdn.www.gob.pe/uploads/document/file/5447921/869207-construccion-de-techos-en-el-colegio-las-mercedes-20.jpeg" alt="Imagen de la fundación de la escuela">
            </div>
            <div class="historia-item">
                <h2>Crecimiento</h2>
                <p>A lo largo de las décadas, la escuela ha crecido y se ha modernizado, adaptándose a las necesidades educativas cambiantes.</p>
            </div>
            <div class="historia-image">
                <img src="https://tudiariohuanuco.pe/wp-content/uploads/2024/03/techos-patio-las-mercedes.jpg" alt="Imagen del crecimiento de la escuela">
            </div>
            <div class="historia-item">
                <h2>Actualidad</h2>
                <p>Hoy en día, nuestra escuela es un referente en educación, con programas innovadores y un enfoque en el desarrollo integral de los estudiantes. El colegio cuenta con una amplia gama de instalaciones, incluyendo aulas modernas, laboratorios, una biblioteca y un gimnasio. También ofrece una variedad de actividades extracurriculares, como deportes, música y teatro.</p>
            </div>
            <div class="historia-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYb0mm1KLlk5VpLsMcPZ3bPl-Jd17AeMGI2GLbfq9V6g&s" alt="Imagen actual de la escuela">
            </div>
        </div>

        <ul class="timeline">
            <li class="timeline-item">
                <div class="timeline-item-content">
                    <h3>1950</h3>
                    <p>La escuela fue fundada y comenzó a operar en un pequeño edificio en el centro de la ciudad.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-content">
                    <h3>1970</h3>
                    <p>Se amplió el campus con nuevas aulas y laboratorios, mejorando las instalaciones para los estudiantes.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-content">
                    <h3>1990</h3>
                    <p>Introducción de programas tecnológicos y mejora de la infraestructura digital.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-item-content">
                    <h3>2020</h3>
                    <p>Implementación de educación en línea y expansión de la oferta educativa a nivel internacional.</p>
                </div>
            </li>
        </ul>

        <a href="index.php" class="btn-back">Volver al Inicio</a>
    </div>
</body>
</html>
