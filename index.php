<!DOCTYPE html>
<?php include "funciones.php" ?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Blog utilizando HTML5">
<meta name="keywords" content="HTML5, CSS3, JavaScript, MySQL">
<title>Blog de miguelius</title>
<link rel="stylesheet" href="miblog.css">
</head>
<body>
  <div id="agrupar">
    <header id="cabecera">
    <h1><a href="index.php">Blog de miguelius</a></h1>
    </header>
    <nav id="menu">
      <ul>
        <?php printMenu() ?>
      </ul>
    </nav>
    <section id="seccion">
      <?php printArticulos() ?>
    </section>
    <aside id="columna">
      <?php printTitulos() ?>
    </aside>
    <footer id="pie">Derechos Reservados &copy; 2020</footer>
  </div>
</body>
</html>
