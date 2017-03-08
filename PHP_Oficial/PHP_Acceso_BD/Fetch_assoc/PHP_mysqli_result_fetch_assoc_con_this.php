<!--
    @Created on : 27-nov-2016, 20:26:14
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/mysqli-result.fetch-assoc.php
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Consultar {

      public function consultar() {
        $mysqli = new mysqli("localhost", "root", "", "world");
        if ($mysqli->connect_errno) {
          printf("Conexion Fallida: %s\n", $mysqli->connect_error);
          exit("Abortada conexion");
        }
        $consulta = "SELECT Name , CountryCode FROM city";
        $resultado = $mysqli->query($consulta);
        if ($resultado) {
          while ($fila = $resultado->fetch_assoc()) { // • Devuelve un array de objetos
            printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
            echo '<br>';
          }
          $resultado->free();
        }
        $mysqli->close();
      }

      public function consultar2() {
        $mysqli = new mysqli("localhost", "root", "", "world");
        if ($mysqli->connect_errno) {
          printf("Conexion Fallida: %s\n", $mysqli->connect_error);
          exit("Abortada conexion");
        }
        $consulta = "SELECT Name , CountryCode FROM city";
        $resultado = $mysqli->query($consulta);
        if ($resultado) {
          while ($fila = $resultado->fetch_all()) { // • Obtener todas las filas en un array asociativo, numérico, o en ambos
//          while ($fila = $resultado->fetchAll()) { // • Devuelve un array de objetos PDO
            printf("%s (%s)\n", $fila[0], $fila[1]);
            echo '<br>';
          }
          $resultado->free();
        }
        $mysqli->close();
      }

      public static function consultar_static() {
        $mysqli = new mysqli("localhost", "root", "", "world");
        if ($mysqli->connect_errno) {
          printf("Conexion Fallida: %s\n", $mysqli->connect_error);
          exit("Abortada conexion");
        }
        $consulta = "SELECT Name , CountryCode FROM city";
        $resultado = $mysqli->query($consulta);
        if ($resultado) {
//         fetch_assoc : usa el nombre de las columnas de la bd
          while ($fila = $resultado->fetch_assoc()) {
            printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
            echo '<br>';
          }
          $resultado->free();
        }
        $mysqli->close();
      }

    }

    $conexion = new Consultar();
//    $conexion->consultar();
    $conexion->consultar2();
//    Consultar::consultar_static();
    ?>
  </body>
</html>