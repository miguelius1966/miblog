<?php
# Fichero funciones.php creado por magb

# Se definen unas variables

define("DATABASE","miblog");
define("USER","miblog_user");
define("PASSWD",'fieVei6X');
define("SERVER","192.168.1.212");
define("ESPACIO","&nbsp;");

# Se definen unas funciones

function printMenu() {
  $mysqli =  mysqli_connect(SERVER, USER, PASSWD, DATABASE);

  if ($mysqli->connect_error) {
          die('Error de conexión: ' . $mysqli->connect_error);
  }

  echo "<!-- Conectado  satisfactoriamente -->\n";

  $select  = "SELECT * FROM menu ORDER BY orden";

  echo "<!-- Sentencia SQL: $select -->\n";

  $result = mysqli_query($mysqli,$select);

  if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
      #$id = $row['id'];
      $texto = $row['texto'];
      echo "\t\t<li>$texto</li>\n";
    }
  }
}

function printArticulos() {
  $mysqli =  mysqli_connect(SERVER, USER, PASSWD, DATABASE);

  if ($mysqli->connect_error) {
          die('Error de conexión: ' . $mysqli->connect_error);
  }

  echo "<!-- Conectado  satisfactoriamente -->\n";
  $id = !empty($_GET['id']) ?  $_GET['id'] : 0;
  if($id) {
    $select  = "SELECT * FROM entrada WHERE id = $id";
  }
  else {
    $select  = "SELECT * FROM entrada ORDER BY fecha DESC";
  }


  echo "<!-- Sentencia SQL: $select -->\n";

  $result = mysqli_query($mysqli,$select);

  if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
      echo "\t\t<article>\n";
      echo "\t\t\t<header>\n";
      $titulo = $row['titulo'];
      echo "\t\t\t\t<h1>$titulo</h1>\n";
      echo "\t\t\t</header><br>\n";
      #$id = $row['id'];
      $contenido = $row['contenido'];
      echo "\t\t\t$contenido\n";
      echo "\t\t</article>\n";
    }
  }
}

function printTitulos() {
  $mysqli =  mysqli_connect(SERVER, USER, PASSWD, DATABASE);

  if ($mysqli->connect_error) {
          die('Error de conexión: ' . $mysqli->connect_error);
  }

  echo "<!-- Conectado  satisfactoriamente -->\n";

  $select  = "SELECT titulo, enlace FROM entrada ORDER BY fecha DESC";

  echo "<!-- Sentencia SQL: $select -->\n";

  $result = mysqli_query($mysqli,$select);

  if ($result) {
    echo "\t\t<h1>Últimas entradas</h1>\n";
    while ($row = mysqli_fetch_assoc($result)) {
      $titulo = $row['titulo'];
      $enlace = $row['enlace'];
      echo "\t\t<blockquote><a href=\"$enlace\">$titulo</a></blockquote>\n";
    }
  }
}


?>
