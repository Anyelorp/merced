<!-- index.php -->
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
  </style>
</head>
<body>

  <header>
    <div class="logo-titulo">
      <a href="index.php"><!--logo-->
        <img class="logo" src="logo.png" alt="">
      </a>
      <p class="titulo"><!--titulo-->
        nuestra <br> señora <br> de las <br> mercedes
      </p>
    </div>
    <div class="buscar">
      <form action=""><!--buscador-->
        <input type="search">
        <i class="bi bi-search"></i><!--lupa-->
      </form>
    </div>
    <div class="acceso-directo">
      <nav>
        <a href="http://localhost/pagLasMercedes/noticias.html"><i class="bi bi-newspaper"></i> Noticias</a>
        <a href="index.php?page=historia"><i class="bi bi-feather"></i> Historia</a>
        <a href="index.php?page=vision"><i class="bi bi-mortarboard"></i> Mision/Vision</a>
        <a href="index.php?page=biblioteca"><i class="bi bi-journals"></i> Biblioteca</a>
        <a href="index.php?page=contac"><i class="bi bi-person"></i> Contacto</a>
      </nav>
    </div>
  </header>

  <div class="img">
    <p>como estan mis kines</p>
  </div>

  <!-- Aquí incluimos el contenido de vision.php si el parámetro 'page' está establecido a 'vision' -->
  <?php
  if (isset($_GET['page']) && $_GET['page'] == 'vision') {
      include 'vision.php';
  }
  ?>

<?php
  if (isset($_GET['page']) && $_GET['page'] == 'contac') {
      include 'contac.php';
  }
  ?>

<?php
if (isset($_GET['page']) && $_GET['page'] == 'historia') {
    include 'historia.php';
}
?>

<?php
if (isset($_GET['page']) && $_GET['page'] == 'biblioteca') {
    include 'biblioteca.php';
}
?>



  
 
  
</body>
</html>
