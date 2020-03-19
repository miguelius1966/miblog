<!DOCTYPE html>
<?php include "funciones.php" ?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Ejemplo de HTML5">
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<title>Este texto es el título del documento</title>
<link rel="stylesheet" href="miblog.css">
</head>
<body>
<header>
<!-- Comentario para probar git -->
<h1>Este es el título principal del sitio web</h1>
</header>
<nav>
  <ul>
    <?php printMenu() ?>
  </ul>
</nav>
<section>
  <article>
    <header>
      <hgroup>
        <h1>Título del mensaje uno</h1>
        <h2>Subtítulo del mensaje uno</h2>
      </hgroup>
      <p>publicado 10-12-2011</p>
    </header>
    Este es el texto de mi primer mensaje
    <figure><img src=”miguel-tres-gatitos.jpg”>
      <figcaption>Esta es la imagen del primer mensaje</figcaption>
    </figure>
    <footer>
      <p>comentarios (0)</p>
    </footer>
  </article>
  <article>
    <header>
      <hgroup>
        <h1>Título del mensaje dos</h1>
        <h2>Subtítulo del mensaje dos</h2>
      </hgroup>
      <p>publicado 15-12-2011</p>
    </header>Este es el texto de mi segundo mensaje
    <footer>
      <p>comentarios (0)</p>
    </footer>
  </article>
</section>
<aside>
  <blockquote>Mensaje número uno</blockquote>
  <blockquote>Mensaje número dos</blockquote>
</aside>
<footer>Derechos Reservados &copy; 2019</footer>
</body>
</html>
