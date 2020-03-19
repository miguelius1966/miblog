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
      echo "<li>$texto</li>\n";
    }
  }
}


?>
