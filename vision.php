<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión y Misión</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }

        .vision-mision-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
            max-width: 1200px;
            margin: auto;
        }

        .section-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 800px;
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .section-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .section-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: left;
        }

        .section-text {
            flex: 1;
        }

        .section-image {
            flex: 1;
            text-align: center;
        }

        .section-image img {
            max-width: 80%;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 300px; /* Set a fixed width */
            height: auto; /* Maintain aspect ratio */
        }

        h2 {
            color: #007BFF;
            font-size: 2em;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 1.2em;
            line-height: 1.5;
        }

        .video-container {
            margin: 20px 0;
        }

        video {
            width: 100%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .cta-buttons {
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="vision-mision-container">
    <div class="section-container">
        <div class="section-content">
            <div class="section-text">
                <h2>Visión</h2>
                <p>Nuestra Institucion Educativa el lider regional y nacional, por su calidad academica, huamnista, emprendedora y acreditada</p>
            </div>
            <div class="section-image">
                <img src="img/NIÑO.png" alt="Imagen de una alumna mostrando la visión">
            </div>
        </div>
    </div>

    <div class="section-container">
        <div class="section-content">
            <div class="section-text">
                <h2>Misión</h2>
                <p>Somos una Institucion Educativa formadora de estudiantes que desarrollan sus competencias personales, academicas, productivas, practicando valores eticos, cristianos, civicos y ecologicos.</p>
            </div>
            <div class="section-image">
                <img src="img/niña.png" alt="Imagen de una alumna mostrando la misión">
            </div>
        </div>
    </div>

    <div class="video-container">
        <video controls>
            <source src="video.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    <div class="cta-buttons">
        <a href="/about" class="btn">Aprende más sobre nosotros</a>
        <a href="/join" class="btn">Únete a nuestra misión</a>
    </div>
</div>

</body>
</html>
