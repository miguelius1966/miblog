<?php
# Fichero funciones.php creado por magb

# Se definen unas variables

define("DATABASE","miblog");
define("USER","miblog_user");
define("PASSWD",'fieVei6X');
define("SERVER","192.168.1.212");
define("ESPACIO","&nbsp;");

# Se definen unas funciones

function abroCaja() {
  echo "<!-- Dentro de la funcion abroCaja -->\n";
  echo "<div class='row'>\n";
  echo "<div class='col-12'>\n";
  echo "<section class='box'>\n";
}

function cierroCaja() {
  echo "<!-- Dentro de la funcion cierroCaja -->\n";
  echo "</section> <!-- Fin section class box -->\n";
  echo "</div> <!-- Fin div class col-12 -->\n";
  echo "</div> <!-- Fin div class row -->\n";
}

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
      echo "<li>$texto</li>\n";
    }
  }
}

function printHeader() {
  print <<<END
<header id="header">
<h1>Clasificaciones NO OFICIALES del Primer Circuito de Carreras de Barrio</h1>
<nav id="nav">
<ul> <!-- ul 1 comienza el menu horizontal -->
<li> <!-- li 1 primer item del menu horizontal -->
<a href="#" class="icon solid fa-angle-down">Individuales</a>
<ul> <!-- ul 2 comienza el menu vertical -->
<li><a href="absolutapun.php">Por puntos</a></li> <!-- Primer item del menu vertical -->
<li><a href="absolutapar.php">Por participaciones</a></li> <!-- Segundo item del munu vertical -->
<li> <!-- li 2 --> <!-- Tercer item del menu vertical -->
<a href="#">Por carreras</a>
<ul> <!-- ul 3 Comienza el submenu -->
END;

$mysqli =  mysqli_connect(SERVER, USER, PASSWD, DATABASE);

if ($mysqli->connect_error) {
        die('Error de conexión: ' . $mysqli->connect_error);
}

echo "<!-- Conectado  satisfactoriamente -->\n";

$select  = "SELECT id, breve FROM carrera WHERE visible = 1 ORDER BY fecha";

echo "<!-- Sentencia SQL: $select -->\n";

$result = mysqli_query($mysqli,$select);

if (!$result) { die(mysqli_error()); }

while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];
  $nombre = $row['breve'];
  echo "<li><a href='carrera.php?id=$id'>$nombre</a></li>\n";
}
print <<<END
</ul> <!-- fin ul 3 Acaba el submenu -->
</li> <!-- fin li 2 Acaba el tercer item del menu vertical -->
</ul> <!-- fin ul 2 Acaba el menu vertical -->
</li> <!-- fin li 1 Acaba el primer item menu horizontal -->
<li> <!-- Segundo item del menu horizontal -->
<a href="#" class="icon solid fa-angle-down">Equipos</a>
<ul>
<li><a href="equipospun.php">Por puntos</a></li>
<li><a href="equipospar.php">Por participantes</a></li>
<li> <!-- li Tercer item del segundo menu vertical -->
<a href="#">Por carreras</a>
<ul> <!-- ul Comienza el submenu -->
END;

$mysqli =  mysqli_connect(SERVER, USER, PASSWD, DATABASE);

if ($mysqli->connect_error) {
        die('Error de conexión: ' . $mysqli->connect_error);
}

echo "<!-- Conectado  satisfactoriamente -->\n";

$select  = "SELECT id, breve FROM carrera WHERE visible = 1 ORDER BY fecha";

echo "<!-- Sentencia SQL: $select -->\n";

$result = mysqli_query($mysqli,$select);

if (!$result) { die(mysqli_error()); }

while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];
  $nombre = $row['breve'];
  echo "<li><a href='carrera_eq.php?id=$id'>$nombre</a></li>\n";
}
print <<<END
</ul> <!-- Acaba el submenu -->
</li> <!-- Acaba el tercer item del segundo menu vertical -->
</ul>
</li> <!-- Acaba el segundo item del menu horizontal -->
</ul> <!-- fin ul 1 Acaba la definicion del menu -->
</nav>
</header>
END;
}

      function obtenerPuntos($id_club,$id_carrera) {

              $mysqli =  mysqli_connect(SERVER, USER, PASSWD, DATABASE);

              if ($mysqli->connect_error) { die('Error de conexión: ' . $mysqli->connect_error); }

              echo "<!-- Conectado  satisfactoriamente -->\n";

              $select  = "SELECT puntos FROM clasificacion_equipo WHERE id_club = $id_club AND id_carrera = $id_carrera";

              echo "<!-- Sentencia SQL: $select -->\n";

              $result = mysqli_query($mysqli,$select);

              $row = mysqli_fetch_assoc($result);

              $puntos = $row['puntos'];

              return $puntos;
      }

function printScripts() {
  print <<<END
<!-- Scripts f -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
END;
}
?>
